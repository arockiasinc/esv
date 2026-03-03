<?php
// build_assets_simple.php
// Simpler scanner to extract .css and .js href/src values from header.php and footer.php
$root = realpath(__DIR__ . '/..');
$header = __DIR__ . '/header.php';
$footer = __DIR__ . '/footer.php';
$assetsDir = $root . '/assets';
if (!is_dir($assetsDir)) mkdir($assetsDir, 0755, true);
$files = array($header, $footer);
// store entries as arrays with 'fs' => filesystem path, 'web' => web path (starting without leading slash)
$css = array();
$js = array();
foreach ($files as $f) {
    if (!file_exists($f)) continue;
    $txt = file_get_contents($f);
    if (preg_match_all('/<link[^>]+href="([^"]+\.css[^"]*)"[^>]*>/i', $txt, $m, PREG_SET_ORDER)) {
        foreach ($m as $match) {
            $u = $match[1];
            $tag = $match[0];
            // skip print or non-screen styles
            if (preg_match('/media\s*=\s*"[^"]*print[^"]*"/i', $tag)) continue;
            // ignore full remote URLs
            if (preg_match('#^https?://#i', $u)) continue;
            // remove PHP baseUrl wrapper if present
            // skip jquery files (we keep jquery from CDN / explicitly)
            if (preg_match('/jquery/i', $u)) continue;
            $u = preg_replace('/<\?php.*?echo.*?\$baseUrl.*?;.*?\?>/i', '', $u);
            $u = preg_replace('/\?.*$/', '', $u);
            $u = ltrim($u, '/');
            $path = $root . '/' . $u;
            if (file_exists($path) && preg_match('/\.css$/i', $path)) $css[] = array('fs' => $path, 'web' => $u);
        }
    }
    if (preg_match_all('/<script[^>]+src="([^"]+\.js[^"]*)"[^>]*>/i', $txt, $m2, PREG_SET_ORDER)) {
        foreach ($m2 as $match) {
            $u = $match[1];
            if (preg_match('#^https?://#i', $u)) continue;
            // skip jquery files (we keep jquery from CDN / explicitly)
            if (preg_match('/jquery/i', $u)) continue;
            $u = preg_replace('/<\?php.*?echo.*?\$baseUrl.*?;.*?\?>/i', '', $u);
            $u = preg_replace('/\?.*$/', '', $u);
            $u = ltrim($u, '/');
            $path = $root . '/' . $u;
            if (file_exists($path) && preg_match('/\.js$/i', $path)) $js[] = array('fs' => $path, 'web' => $u);
        }
    }
}
// deduplicate by filesystem path
$seen = array();
$css_unique = array();
foreach ($css as $c) {
    if (!isset($seen[$c['fs']])) { $seen[$c['fs']] = true; $css_unique[] = $c; }
}
$css = $css_unique;
$seen = array();
$js_unique = array();
foreach ($js as $j) {
    if (!isset($seen[$j['fs']])) { $seen[$j['fs']] = true; $js_unique[] = $j; }
}
$js = $js_unique;
function minify_css_simple($s){
    $s = preg_replace('!/\*.*?\*/!s','',$s);
    $s = preg_replace('/\s+/',' ',$s);
    $s = str_replace(array("\n","\r","\t"),'',$s);
    return trim($s);
}
function minify_js_simple($s){
    $s = preg_replace('!/\*.*?\*/!s','',$s);
    $s = preg_replace('/(^|\s)\/\/.*$/m','$1',$s);
    $s = preg_replace('/\s+/',' ',$s);
    $s = str_replace(array("\n","\r","\t"),'',$s);
    return trim($s);
}
$combinedCss = $assetsDir . '/styles.min.css';
$combinedJs = $assetsDir . '/scripts.min.js';
if (!empty($css)){
    $out = "/* Combined CSS (simple) */\n";
    foreach ($css as $c) {
        $content = file_get_contents($c['fs']);
        // rewrite relative url(...) to absolute web paths so assets resolve from anywhere
        // compute web base (site folder name) and normalize ../ and ./ segments
        $webBase = '/' . basename($root);
        $dir = dirname($c['web']);
        if ($dir === '.') $dir = '';
        $content = preg_replace_callback('/url\(([^)]+)\)/i', function($m) use ($dir, $webBase) {
            $url = trim($m[1], "'\" \t\n\r");
            if (preg_match('#^(data:|https?:|/)#i', $url)) return "url($url)";
            $combined = $dir ? ($dir . '/' . $url) : $url;
            // normalize path segments (resolve .. and .)
            $parts = preg_split('#/+#', $combined);
            $stack = array();
            foreach ($parts as $part) {
                if ($part === '' || $part === '.') continue;
                if ($part === '..') { array_pop($stack); continue; }
                $stack[] = $part;
            }
            $normalized = implode('/', $stack);
            $new = rtrim($webBase, '/') . '/' . ltrim($normalized, '/');
            return "url('" . $new . "')";
        }, $content);
        $out .= "\n/* from: " . $c['fs'] . " */\n" . $content . "\n";
    }
    file_put_contents($combinedCss, minify_css_simple($out));
    echo "Wrote $combinedCss (".count($css)." files)\n";
} else echo "No CSS files found.\n";
if (!empty($js)){
    $out = "/* Combined JS (simple) */\n";
    foreach ($js as $j) {
        $content = file_get_contents($j['fs']);
        $out .= "\n/* from: " . $j['fs'] . " */\n" . $content . "\n;\n";
    }
    file_put_contents($combinedJs, minify_js_simple($out));
    echo "Wrote $combinedJs (".count($js)." files)\n";
} else echo "No JS files found.\n";
echo "Done.\n";
