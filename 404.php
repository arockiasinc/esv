<?php
http_response_code(404);

// Dynamically get site base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $domain . rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Page Not Found</title>
<style>
.page-not-found {
    width: 100%;
    margin: 0;
    overflow-y: hidden;
    text-align: center;
    padding-top: 100px;
}
img {
    margin: 0 auto;
    max-width: 100%;
    height: auto;
}
.page-not-found p a {
    color: #000;
    font-family: 'Raleway', sans-serif;
    font-size: 30px;
    text-decoration: none;
}
.page-not-found p a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>

<div class="page-not-found">
   <img src="<?php echo $base_url; ?>/images/404-error-2-2.webp" alt="page-not-found-404" />
   <p><a href="<?php echo $base_url; ?>/">Please return to the home page&hellip;</a></p>
</div>

</body>
</html>
