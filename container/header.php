<?php include_once 'config.php';
// Build a base URL anchored to the project root (one level above /container).
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'localhost';
$docRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
$appRoot = realpath(__DIR__ . '/..');
$basePath = '';
if ($docRoot && $appRoot && strpos($appRoot, $docRoot) === 0) {
    $basePath = substr($appRoot, strlen($docRoot));
} else {
    $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $appDirName = $appRoot ? basename($appRoot) : '';
    if ($appDirName !== '') {
        $needle = '/' . $appDirName;
        $pos = strrpos($scriptName, $needle);
        if ($pos !== false) {
            $basePath = substr($scriptName, 0, $pos + strlen($needle));
        }
    }
}
$basePath = str_replace('\\', '/', $basePath);
$basePath = $basePath ? '/' . trim($basePath, '/') : '';
$baseUrl = $scheme . '://' . $host . $basePath;
$_fileName=basename($_SERVER['PHP_SELF']);
			$_Slug="";
foreach($_pages as $pages){
		if($pages['slug']==rtrim($_fileName,'.php')){
			$_Title=$pages['Title'];
			$_Meta_Keyword=$pages['Meta Keyword'];
			$_Meta_Description=$pages['Meta Description'];
			$_Slug=$pages['slug'];
			break;
		}
}
?>
<?php 
   
define('WEB_ROOT', 'https://eastsideventilation.ca');
define('WEB_ASSETS', WEB_ROOT . '');   

?>     
<?php
$start_year = 1996;
$current_year = date("Y"); // Get current year dynamically       
$years_in_business = $current_year - $start_year;


?>

<?php
$isBlogPage = strpos($_SERVER['REQUEST_URI'], '/blogs/') !== false;

if (!isset($lazyLoadBufferStarted)) {
    $lazyLoadBufferStarted = true;
    ob_start(); // Capture output for lazy-loading and (if blog) meta updates
}
?> 


<!DOCTYPE html>            
<html lang="en-US"> 
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'> 
        <meta http-equiv='pragma' content='no-cache'>
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
	<title><?= !empty($_Title) ? $_Title . ' | ' . SITENAME : SITENAME; ?></title>
<meta name="keywords" content="<?= !empty($_Meta_Keyword) ? $_Meta_Keyword : SITENAME; ?>">
<meta name="description" content="<?= !empty($_Meta_Description) ? $_Meta_Description : SITENAME; ?>">

		<link rel='icon' href="<?php echo $baseUrl; ?>/images/favicon.ico"/> 
		<script src="https://tag.validate.audio/validate.js" async></script>
		<script type="application/ld+json">
{
  "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "additionalType": "https://schema.org/HVACBusiness",
  "@id": "https://www.eastsideventilation.ca/#localbusiness",
  "name": "East Side Ventilation",
  "image": "https://www.eastsideventilation.ca/images/logo.png",
  "url": "https://www.eastsideventilation.ca/",
  "telephone": "+1-204-667-8700",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "11 Durand Rd",
    "addressLocality": "Winnipeg",
    "addressRegion": "MB",
    "postalCode": "R2J 3T1",
    "addressCountry": "CA"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday"],
      "opens": "08:00",
      "closes": "16:30"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "07:00",
      "closes": "15:30"
    }
  ],
  "areaServed": {
    "@type": "City",
    "name": "Winnipeg"
  },
  "sameAs": [
    "https://www.facebook.com/EastSideVentilationWinnipeg/",
    "https://www.google.com/maps/place/East+Side+Ventilation+Ltd+-+Furnace+and+HVAC+in+Winnipeg/"
  ],
  "serviceOffered": [
    {
      "@type": "Service",
      "name": "Heating & Furnace Services",
      "serviceType": "Installation, Cleaning, Servicing, Repair & Replacement"
    },
    {
      "@type": "Service",
      "name": "HRV Services",
      "serviceType": "Installation, Repair & Replacement"
    },
    {
      "@type": "Service",
      "name": "Air Conditioning & Cooling Services",
      "serviceType": "Installation, Cleaning, Servicing, Repair & Replacement"
    },
    {
      "@type": "Service",
      "name": "Duct Cleaning",
      "serviceType": "Residential Duct Cleaning Services"
    },
    {
      "@type": "Service",
      "name": "Gas Piping",
      "serviceType": "Gas Line Installation & Repairs"
    },
    {
      "@type": "Service",
      "name": "Multi-Family HVAC Systems",
      "serviceType": "Heating, Cooling & Ventilation Solutions for Multi-Family Homes"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.2",
    "reviewCount": "102"
  },
  "review": [
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Gordon Way" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "datePublished": "2025-10-22",
      "reviewBody": "Excellent service for the last 19 years since we had our house built. Will continue to use East Side."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Michael Harris" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "datePublished": "2025-10-16",
      "reviewBody": "Just had a new furnace installed. Great job all around - from the time and effort put in for an accurate quote to the installation and follow-ups - East Side didn’t disappoint!"
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Roland Desjardins" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "datePublished": "2025-10-02",
      "reviewBody": "Professional, courteous and thorough cleaning procedure. Appreciated me being ready for them. Would have liked more before and after pictures, but overall good job."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Su Ven" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "datePublished": "2025-09-23",
      "reviewBody": "Very professional and fast. Great work. Thank you."
    }
  ]
}
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRV5L6F3');</script>
<!-- End Google Tag Manager -->

<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$requestUri = explode('?', $_SERVER['REQUEST_URI'])[0]; // Remove query string

// Remove .php extension if present
$requestUri = preg_replace('/\.php$/', '', $requestUri);   

$canonicalUrl = $protocol . $host . $requestUri;
?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />  



        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important; 
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important; 
                padding: 0 !important;
            }
            .footer_links li a{
                  
            font-size: 15px;
            }
            .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 10003;
    top: 0;
    right: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: .5s;
    padding-top: 0;
    box-shadow: 0 0 6px 0 #5a5a5a52;
}
.btn-static {
    position: relative;
    background-color: #fff;
}
.sidenav .closebtn {
    position: absolute;
    top: 4px;
    left: 150px;
    font-size: 36px;
    margin-left: 50px;
}
.sidenav a {
    padding: 0;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: .3s;
}
.btn-innr {
    position: fixed;
    width: 100%;
    background-color: #fff;
    border-bottom: 1px solid #f6f6f6;
}
.sidenav h4 {
    font-size: 18px;
    padding: 10px 0 10px 15px;
    margin: 10px 0;
}
.rev-pad-t70 {
    padding-top: 70px !important;
}
.rev-pad-t30{
    padding-top: 35px !important;
}
.rev-sec {
    background-color: #fcfcfc;
    padding: 15px 0 8px 15px;
    border-top: 1px solid #eee;
}
.rev-sec h3 {
    font-size: 18px;
   
}
.rev-sec p {
    font-size: 14px;
    line-height: 1.6;
 
}   

.notification-popup {
    
    width: 0;
    position: fixed;
    z-index: 10003;
    bottom: 350px;
    right: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: .5s;
    padding-top: 0;
    box-shadow: 0 0 6px 0 #5a5a5a52;
}
.btn-static {
    position: relative;
    background-color: #fff;
}
.notification-popup .closebtn {
       position: absolute;
    top: -5px;
    left: 170px;
    font-size: 29px;
    margin-left: 50px;
}
.notification-popup a.closebtn {
    padding: 0;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: .3s;
}
.top_h{margin-bottom:-19px;}
.btIconWidget .btIconWidgetText{color:#fff;font-weight:600;font-size:13px;opacity:1 !important;}
.topTools .btIconWidget:hover, .topBarInMenu .btIconWidget:hover{
    color:#fff !important;
}
.btStickyHeaderOpen .btIconWidget .btIconWidgetText{color: inherit !important;}
.footer-contact-info{margin:0;}
.footer-contact-info li{    
    list-style: none;
    padding: 10px 0;
        color: rgb(249 249 249 / 72%);
    
}
.facebook-icon{
    
    text-align: center;
    display: block;
    border: 1px solid #fff;
    width: 28px;
    padding: 0 8px;

}
.facebook-icon:hover{
    border: 1px solid #de0d04;
    color:#de0d04;
}
@media(max-width:656px) {
.bt_bb_button_text{width:200px;height:50px;}
}
.bt_bb_text a{
    color:#db2410;
}
/* Fix extra space under footer caused by theme min-height override */
html, body { min-height: 100vh; }
body:not(.btPageTransitions) { min-height: 100vh; }
.btSiteFooter { margin-bottom: 0; }
@media (min-width: 1200px) and (max-width: 1376px) {
 .btMenuHorizontal.btMenuRight .menuPort nav{
     float:left !important;
     padding-left:0px;
 }
 .menuPort nav ul li a{
     font-size:12px !important;
 }
}
        </style>
        
   
        
        

        <?php
        $minCssPath = __DIR__ . '/../assets/styles.min.css';
        if (file_exists($minCssPath)) {
            echo '<link rel="stylesheet" href="' . $baseUrl . '/assets/styles.min.css" type="text/css" media="all" />';
            echo '<link rel="stylesheet" href="' . $baseUrl . '/assets/path-fixes.css" type="text/css" media="all" />';
        } else {
        ?>
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style1.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style2.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style3.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style4.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style5.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style6.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style7.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style8.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style9.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style10.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style11.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style12.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style13.css" type="text/css" media="all" />
       <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style14.css" type="text/css"  media="all"/>
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style15.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style16.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style17.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style18.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style19.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style20.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style21.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/inline-style.css" type="text/css" media="all"/>
        <link rel="stylesheet" id="bt_bb_content_elements-css" href="<?php echo $baseUrl; ?>/wp-content/plugins/bold-page-builder/css/front_end/content_elements.crushd96d.css?ver=5.6.1" type="text/css"/>
        <link rel="stylesheet" id="wc-block-style-css" href="<?php echo $baseUrl; ?>/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style7e2e.css?ver=3.8.1" type="text/css"/>
        <link rel="stylesheet" id="prohauz-style-css" href="<?php echo $baseUrl; ?>/wp-content/themes/prohauz/styled96d.css?ver=5.6.1" type="text/css" media="screen"/>
        
        <link rel="stylesheet" id="wp-block-library-css" href="<?php echo $baseUrl; ?>/wp-includes/css/dist/block-library/style.mind96d.css?ver=5.6.1" type="text/css" media="all"/>
        <link rel="stylesheet" id="wc-block-vendors-style-css" href="<?php echo $baseUrl; ?>/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style7e2e.css?ver=3.8.1" type="text/css" media="all" />
        <link rel="stylesheet" id="bt_bb_slick-css" href="<?php echo $baseUrl; ?>/wp-content/plugins/bold-page-builder/slick/slickd96d.css?ver=5.6.1" type="text/css" media="all" />
        <link rel="stylesheet" id="bt_cc_style-css" href="<?php echo $baseUrl; ?>/wp-content/plugins/bt_cost_calculator/style.mind96d.css?ver=5.6.1" type="text/css" media="all" />
        <link rel="stylesheet" id="contact-form-7-css" href="<?php echo $baseUrl; ?>/wp-content/plugins/contact-form-7/includes/css/styles9dff.css?ver=5.3.2" type="text/css" media="all" />
         <link rel="stylesheet" id="prohauz-print-css" href="<?php echo $baseUrl; ?>/wp-content/themes/prohauz/printd96d.css?ver=5.6.1" type="text/css" media="print" />
        <?php
        }
        ?>
        <link
            rel="stylesheet"
            id="prohauz-fonts-css"
            href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" id="boldthemes-framework-css" href="<?php echo $baseUrl; ?>/wp-content/themes/prohauz/framework/css/styled96d.css?ver=5.6.1" type="text/css" media="all" />

       


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php
    // Load Cloudflare email decode only when available locally to avoid 404s in dev.
    $cfEmailDecode = $_SERVER['DOCUMENT_ROOT'] . '/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js';
    if (file_exists($cfEmailDecode)) {
        echo '<script data-cfasync="false" type="text/javascript" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>';
    }
    ?>

        <style id="woocommerce-inline-inline-css" type="text/css">
            .woocommerce form .form-row .required {
                visibility: visible;
            } 
            .btVerticalHeaderTop{
                    top: 35px;
                
            }
            
            
        </style>
        
        

    
        

    
    
        
        <?php
        $minJsPath = __DIR__ . '/../assets/scripts.min.js';
        // If combined scripts exist, do not print them in the head (they will be included in the footer once).
        if (!file_exists($minJsPath)) {
        ?>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-content/plugins/bold-page-builder/slick/slick.mind96d.js?ver=5.6.1"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-content/plugins/bold-page-builder/content_elements_misc/js/jquery.magnific-popup.mind96d.js?ver=5.6.1"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-content/plugins/bold-page-builder/content_elements_misc/js/content_elementsd96d.742a4952.js?ver=5.6.1"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-content/plugins/bold-page-builder/script_fed96d.js?ver=5.6.1" ></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-content/plugins/bt_cost_calculator/jquery.ddd96d.js?ver=5.6.1"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/wp-content/plugins/bt_cost_calculator/cc.maind96d.js?ver=5.6.1"></script>
        <script src="<?php echo $baseUrl; ?>/js/lazysizes.min.js" type="text/javascript" async></script>
        <?php
        }
        ?>
        
        
       
       
        <script type="text/javascript" id="bt_cc_main-js-after">
            window.bt_cc_translate = [];
            window.bt_cc_translate["prev"] = "Prev";
            window.bt_cc_translate["next"] = "Next";
            window.bt_cc_translate["su"] = "Su";
            window.bt_cc_translate["mo"] = "Mo";
            window.bt_cc_translate["tu"] = "Tu";
            window.bt_cc_translate["we"] = "We";
            window.bt_cc_translate["th"] = "Th";
            window.bt_cc_translate["fr"] = "Fr";
            window.bt_cc_translate["sa"] = "Sa";
            window.bt_cc_translate["january"] = "January";
            window.bt_cc_translate["february"] = "February";
            window.bt_cc_translate["march"] = "March";
            window.bt_cc_translate["april"] = "April";
            window.bt_cc_translate["may"] = "May";
            window.bt_cc_translate["june"] = "June";
            window.bt_cc_translate["july"] = "July";
            window.bt_cc_translate["august"] = "August";
            window.bt_cc_translate["september"] = "September";
            window.bt_cc_translate["october"] = "October";
            window.bt_cc_translate["november"] = "November";
            window.bt_cc_translate["december"] = "December";
        </script>
         <script>

        </script>
        
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>

        <style>
            /* Footer gap fix (override theme min-height/padding) */
            html, body {
                min-height: 100vh !important;
                height: auto !important;
            }
            body:not(.btPageTransitions) {
                min-height: 100vh !important;
            }
            .btPageWrap,
            .btContentWrap {
                min-height: 0 !important;
                padding-bottom: 0 !important;
                margin-bottom: 0 !important;
            }
            .btSiteFooter,
            .btSiteFooterCopyMenu {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important;
            }
        </style>
         


       
    </head>

    <body
        class="home page-template-default page page-id-3436 theme-prohauz bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js btHeadingWeight_default btCapitalizeMainMenuItems btHasAltLogo btMenuRightEnabled btStickyEnabled btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btSoftRoundedButtons btOpacityLightHeader btNoSidebar "
    >
        

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRV5L6F3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


        <div class="btPageWrap" id="top">
            <div class="btVerticalHeaderTop">
                <div class="btVerticalMenuTrigger">
                    &nbsp;
                    <div class="bt_bb_icon"><a href="#" target="_self" data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a></div>
                </div>

                <div class="btLogoArea">
                    <div class="logo">
                        <span>
                            <a href="<?php echo $baseUrl; ?>/">
                                <img class="btMainLogo" data-hw="1.72" src="<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="East Side Ventilation" title="East Side Ventilation" width="152" height="152"/>
                                <img class="btAltLogo" src="<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="East Side Ventilation" title="East Side Ventilation" width="152" height="152"/>
                            </a>
                        </span>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- /btLogoArea -->
            </div>
            <header class="mainHeader btClear">
                <div class="mainHeaderInner">
                    <div class="btLogoArea menuHolder btClear">
                        <div class="port">
                            <div class="btHorizontalMenuTrigger">
                                &nbsp;
                                <div class="bt_bb_icon"><a href="#" target="_self" data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a></div>
                            </div>
                            <div class="logo">
                                <span>
                                    <a href="<?php echo $baseUrl; ?>/">
                                        <img class="btMainLogo" data-hw="1.72" src="<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="East Side Ventilation" title="East Side Ventilation"  width="152" height="152"/>
                                        <img class="btAltLogo" src="<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="East Side Ventilation" title="East Side Ventilation" width="152" height="152" />
                                    </a>
                                </span>
                            </div>
                            <!-- /logo -->
                            <div class="menuPort">
                                <div class="topBarInMenu">
                                    <div class="topBarInMenuCell">
                                        <!--<a href="tel:+12046678700" target="_self" class="btIconWidget btWidgetWithText">-->
                                        <!--    <div class="btIconWidgetIcon"><span data-ico-essential="&#xea22;" class="bt_bb_icon_holder"></span></div>-->
                                        <!--    <div class="btIconWidgetContent"><span class="btIconWidgetTitle">Call Us:</span><span class="btIconWidgetText">204 667 8700</span></div>-->
                                        <!--     <div class="btIconWidgetContent"><span class="btIconWidgetTitle">Call Us:</span><span class="btIconWidgetText">204 667 8700</span></div>-->
                                        <!--</a>-->
                                        
                                        <div class="btIconWidget btWidgetWithText">
                                            <div class="top_h">
                                                <a href="tel:+12046678700" target="_self">
                                                <div class="btIconWidgetIcon"><span data-ico-essential="" class="bt_bb_icon_holder"></span></div>
                                                <div class="btIconWidgetContent"><span class="btIconWidgetTitle">Call Us:</span><span class="btIconWidgetText">204 667 8700</span></div>
                                                </a>
                                                </div>
                                                <div class="bottom_h">
                                                     <a href="https://www.google.com/maps/place/East+Side+Ventilation+Ltd./@49.8847061,-97.0446388,17z/data=!3m1!4b1!4m6!3m5!1s0x52ea79fe3273bdeb:0x368ff6ba0db2a209!8m2!3d49.8847061!4d-97.0424501!16s%2Fg%2F1vljf_45" target="_blank">
                                               <div class="btIconWidgetIcon"><span data-ico-essential="" class="bt_bb_icon_holder"></span></div>
                                                <div class="btIconWidgetContent"><span class="btIconWidgetText">Winnipeg</span></div>
                                                </a>&nbsp;&nbsp;
                                                
                                                 <a href="https://www.google.ca/maps/place/1451+Richmond+Ave+E+%238a,+Brandon,+MB+R7A+7A3,+Canada/@49.828343,-99.919437,18z/data=!3m1!4b1!4m6!3m5!1s0x52e790dae6c1039f:0x4f5742189a001f9b!8m2!3d49.828343!4d-99.919437!16s%2Fg%2F11lr3qjtx4?entry=ttu&g_ep=EgoyMDI1MDcyMy4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                                               <div class="btIconWidgetIcon"><span data-ico-essential="" class="bt_bb_icon_holder"></span></div>
                                                <div class="btIconWidgetContent"><span class="btIconWidgetText">Brandon</span></div>
                                                </a>
                                                
                                                </div>
                                          </div>
                                        <div class="btButtonWidget btDefaultButtonWidget btWithLink">
                                            <a href="https://commercialhvacwinnipeg.ca/" target="_blank" class="btButtonWidgetLink"><span class="btButtonWidgetText">Click here for Commercial Services</span></a>
                                        </div>
                                    </div>
                                    <!-- /topBarInMenu -->
                                </div>
                                <!-- /topBarInMenuCell -->
                                <nav>
                                    <ul id="menu-primary-menu" class="menu">
                                        <li id="menu-item-3647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-3436 current_page_item <?= ($_Slug=='index')?'current-menu-ancestor':''; ?> current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3647"
                                        > <a href="<?php echo $baseUrl; ?>/" aria-current="page">Home</a> 
                                        </li>
                                        <li id="menu-item-1342" class="menu-item <?= ($_Slug=='heating-and-furnace-company-winnipeg' || $_Slug=='furnace-installation-winnipeg' || $_Slug=='furnace-cleaning-winnipeg' || $_Slug=='furnace-service-winnipeg' || $_Slug=='furnace-repair-replacement-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1342"> 
                                            <a href="<?php echo $baseUrl; ?>/heating-and-furnace-company-winnipeg">Heating &amp; Furnaces</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1378" class="menu-item <?= ($_Slug=='furnace-installation-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1378"><a href="<?php echo $baseUrl; ?>/furnace-installation-winnipeg">Installation</a></li>
                                                <li id="menu-item-2281" class="menu-item <?= ($_Slug=='furnace-cleaning-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-2281"><a href="<?php echo $baseUrl; ?>/furnace-cleaning-winnipeg">Cleaning</a></li>
                                                <li id="menu-item-2287" class="menu-item <?= ($_Slug=='furnace-service-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-2287"><a href="<?php echo $baseUrl; ?>/furnace-service-winnipeg">Service</a></li>
                                                <li id="menu-item-2296" class="menu-item <?= ($_Slug=='furnace-repair-replacement-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-2296"><a href="<?php echo $baseUrl; ?>/furnace-repair-replacement-winnipeg">Repair &amp; Replacement</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1343" class="menu-item <?= ($_Slug=='hrv-winnipeg' || $_Slug=='hrv-installation-winnipeg' || $_Slug=='hrv-repair-replacement-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1343">
                                            <a href="<?php echo $baseUrl; ?>/hrv-winnipeg">HRV</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-2494" class="menu-item <?= ($_Slug=='hrv-installation-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-2494"><a href="<?php echo $baseUrl; ?>/hrv-installation-winnipeg">Installation</a></li>
                                                <li id="menu-item-2492" class="menu-item <?= ($_Slug=='hrv-repair-replacement-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-custom menu-item-object-custom menu-item-2492"><a href="<?php echo $baseUrl; ?>/hrv-repair-replacement-winnipeg">Repair and Replacement</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-3647" class="menu-item <?= ($_Slug=='specials')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1345"> <a href="<?php echo $baseUrl; ?>/specials" aria-current="page">specials</a> 
                                        </li>
                                        <li id="menu-item-1345" class="menu-item <?= ($_Slug=='aircondition-experts-winnipeg' || $_Slug=='ac-repair-or-replacement-winnipeg' || $_Slug=='ac-service-company-winnipeg' || $_Slug=='ac-cleaning-company-winnipeg' || $_Slug=='ac-installation-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1345">
                                        <a href="<?php echo $baseUrl; ?>/aircondition-experts-winnipeg">AC &amp; Cooling</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1349" class="menu-item <?= ($_Slug=='ac-installation-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1349"><a href="<?php echo $baseUrl; ?>/ac-installation-winnipeg">Install</a></li>
                                                <li id="menu-item-1346" class="menu-item <?= ($_Slug=='ac-cleaning-company-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1346"><a href="<?php echo $baseUrl; ?>/ac-cleaning-company-winnipeg">Clean</a></li>
                                                <li id="menu-item-1347" class="menu-item <?= ($_Slug=='ac-service-company-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1347"><a href="<?php echo $baseUrl; ?>/ac-service-company-winnipeg">Service</a></li>
                                                <li id="menu-item-1348" class="menu-item <?= ($_Slug=='ac-repair-or-replacement-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1348"><a href="<?php echo $baseUrl; ?>/ac-repair-or-replacement-winnipeg">Repair and Replacement</a></li>
                                            </ul>
                                        </li>
                                        
                                             <li id="menu-item-1388" class="menu-item <?= ($_Slug=='residential-duct-cleaning-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1345">
                                            <a href="<?php echo $baseUrl; ?>/residential-duct-cleaning-winnipeg">Duct Cleaning</a> </li>
                                            <li id="menu-item-1345" class="menu-item <?= ($_Slug=='gas-piping-winnipeg')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1345">
                                            <a href="<?php echo $baseUrl; ?>/gas-piping-winnipeg">Gas Piping</a> </li>
                                            <li id="menu-item-1345" class="menu-item <?= ($_Slug=='multi-family-units&condos')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1345">
                                            <a href="<?php echo $baseUrl; ?>/multi-family-units&condos">Multi Family HVAC Systems</a> </li>
                                        <li id="menu-item-1345" class="menu-item <?= ($_Slug=='winnipeg-hvac-company-contact')?'current-menu-ancestor':''; ?> menu-item-type-post_type menu-item-object-page menu-item-1345">
                                                <a href="<?php echo $baseUrl; ?>/winnipeg-hvac-company-contact">Contact</a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- .menuPort -->
                        </div>
                        <!-- /port -->
                    </div>
                    <!-- /menuHolder / btBelowLogoArea -->
                </div>
                <!-- / inner header for scrolling -->
            </header>
            <!-- /.mainHeader -->
              



