<?php
if (!isset($lazyLoadBufferStarted)) {
    $lazyLoadBufferStarted = true;
    ob_start(); // Capture output for lazy-loading injection
}
?>
<!DOCTYPE html>
<html lang="en-US"> 
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Residential HVAC Winnipeg | East Side Ventilation | Heating and Cooling Service and Repairs</title>
		<meta name="keywords" content="HVAC Winnipeg">
		<meta name="description" content="East Side Ventilation is the go-to team of HVAC pros in Winnipeg and Brandon for your furnace, air conditioning, duct work, and metal fabrication needs. "> 
		<link rel='shortcut icon' type='image/x-icon' href='../<?php echo $baseUrl; ?>/images/favicon.ico'/>
            
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
        </style>
        <link rel="stylesheet" href="../../css/style1.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style2.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style3.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style4.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style5.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style6.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style7.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style8.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style9.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style10.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style11.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style12.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style13.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style14.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style15.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style16.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style17.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style18.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style19.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style20.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/style21.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../../css/inline-style.css" type="text/css" media="all" />

        <link rel="stylesheet" id="wp-block-library-css" href="../../wp-includes/css/dist/block-library/style.mind96d.css?ver=5.6.1" type="text/css" media="all" />
        <link rel="stylesheet" id="wc-block-vendors-style-css" href="../../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style7e2e.css?ver=3.8.1" type="text/css" media="all" />
        <link rel="stylesheet" id="wc-block-style-css" href="../../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style7e2e.css?ver=3.8.1" type="text/css" media="all" />
        <link rel="stylesheet" id="bt_bb_content_elements-css" href="../../wp-content/plugins/bold-page-builder/css/front_end/content_elements.crushd96d.css?ver=5.6.1" type="text/css" media="all" />
        <link rel="stylesheet" id="bt_bb_slick-css" href="../../wp-content/plugins/bold-page-builder/slick/slickd96d.css?ver=5.6.1" type="text/css" media="all" />
        <link rel="stylesheet" id="bt_cc_style-css" href="../../wp-content/plugins/bt_cost_calculator/style.mind96d.css?ver=5.6.1" type="text/css" media="all" />
        <link rel="stylesheet" id="contact-form-7-css" href="../../wp-content/plugins/contact-form-7/includes/css/styles9dff.css?ver=5.3.2" type="text/css" media="all" />

        <style id="woocommerce-inline-inline-css" type="text/css">
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel="stylesheet" id="prohauz-style-css" href="../../wp-content/themes/prohauz/styled96d.css?ver=5.6.1" type="text/css" media="screen" />
        <style id="prohauz-style-inline-css" type="text/css"> 
        </style>
        <link rel="stylesheet" id="prohauz-print-css" href="../../wp-content/themes/prohauz/printd96d.css?ver=5.6.1" type="text/css" media="print" />
        <link
            rel="stylesheet"
            id="prohauz-fonts-css"
            href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" id="boldthemes-framework-css" href="../../wp-content/themes/prohauz/framework/css/styled96d.css?ver=5.6.1" type="text/css" media="all" />
        <script type="text/javascript" src="../../js/jquery.min.js" id="jquery-core-js"></script>
        <script type="text/javascript" src="../../wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="../../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/bold-page-builder/slick/slick.mind96d.js?ver=5.6.1" id="bt_bb_slick-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/bold-page-builder/content_elements_misc/js/jquery.magnific-popup.mind96d.js?ver=5.6.1" id="bt_bb_magnific-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/bold-page-builder/content_elements_misc/js/content_elementsd96d.js?ver=5.6.1" id="bt_bb-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/bold-page-builder/script_fed96d.js?ver=5.6.1" id="bt_bb_fe-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/bt_cost_calculator/jquery.ddd96d.js?ver=5.6.1" id="bt_cc_dd-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/bt_cost_calculator/cc.maind96d.js?ver=5.6.1" id="bt_cc_main-js"></script>
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
        
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
       
    </head>

    <body
        class="home page-template-default page page-id-3436 theme-prohauz bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js btHeadingWeight_default btCapitalizeMainMenuItems btHasAltLogo btMenuRightEnabled btStickyEnabled btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btSoftRoundedButtons btOpacityLightHeader btNoSidebar"
    >
        <div class="btPageWrap" id="top">
            <div class="btVerticalHeaderTop">
                <div class="btVerticalMenuTrigger">
                    &nbsp;
                    <div class="bt_bb_icon"><a href="#" target="_self" data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a></div>
                </div>

                <div class="btLogoArea">
                    <div class="logo">
                        <span>
                            <a href="http://localhost/kumar/app/">
                                <img class="btMainLogo" data-hw="1.72" src="../<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="ESV" title="ESV" />
                                <img class="btAltLogo" src="../<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="ESV" title="ESV" />
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
                                    <a href="http://localhost/kumar/app/">
                                        <img class="btMainLogo" data-hw="1.72" src="../<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="ESV" title="ESV"  />
                                        <img class="btAltLogo" src="../<?php echo $baseUrl; ?>/images/east-side-ventilation-winnipeg-logo-2-2.webp" alt="ESV" title="ESV"  />
                                    </a>
                                </span>
                            </div>
                            <!-- /logo -->
                            <div class="menuPort">
                                <div class="topBarInMenu">
                                    <div class="topBarInMenuCell">
                                        <a href="tel:204-667-8700" target="_self" class="btIconWidget btWidgetWithText">
                                            <div class="btIconWidgetIcon"><span data-ico-essential="&#xea22;" class="bt_bb_icon_holder"></span></div>
                                            <div class="btIconWidgetContent"><span class="btIconWidgetTitle">Call Us:</span><span class="btIconWidgetText">204 667 8700</span></div>
                                        </a>
                                        <div class="btButtonWidget btDefaultButtonWidget btWithLink">
                                            <a href="#" target="_self" class="btButtonWidgetLink"><span class="btButtonWidgetText">Click here for Commercial Services</span></a>
                                        </div>
                                    </div>
                                    <!-- /topBarInMenu -->
                                </div>
                                <!-- /topBarInMenuCell -->
                                <nav>
                                    <ul id="menu-primary-menu" class="menu">
                                        <li id="menu-item-3647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3436 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3647"
                                        > <a href="http://localhost/kumar/app/" aria-current="page">Home</a> 
                                        </li>
                                        <li id="menu-item-1342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1342"> 
                                            <a href="../furnaces-heating/">Heating &amp; Furnaces</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378"><a href="../furnaces-heating/furnace-installation.php">Installation</a></li>
                                                <li id="menu-item-2281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2281"><a href="../furnaces-heating/furnace-cleaning.php">Cleaning</a></li>
                                                <li id="menu-item-2287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2287"><a href="../furnaces-heating/furnace-service.php">Service</a></li>
                                                <li id="menu-item-2296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2296"><a href="../furnaces-heating/furnace-repair-replacement.php">Repair &amp; Replacement</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1343" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1343">
                                            <a href="../hrv/">HRV</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-2494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2494"><a href="../hrv/hrv-installation.php">Installation</a></li>
                                                <li id="menu-item-2492" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2492"><a href="../hrv/hrv-repair-replacement.php">Repair and Replacement</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1345">
                                            <a href="../ac-cooling/">AC &amp; Cooling</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-1349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1349"><a href="../ac-cooling/ac-installation.php">Install</a></li>
                                                <li id="menu-item-1346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1346"><a href="../ac-cooling/ac-cleaning.php">Clean</a></li>
                                                <li id="menu-item-1347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1347"><a href="../ac-cooling/ac-service.php">Service</a></li>
                                                <li id="menu-item-1348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1348"><a href="../ac-cooling/ac-repair-replacement.php">Repair and Replacement</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1345">
                                            <a href="../residential-duct-cleaning.php">Duct Cleaning</a> </li>
                                        <li id="menu-item-1345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1345">
                                                <a href="../../contact.php">Contact</a> </li>
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
