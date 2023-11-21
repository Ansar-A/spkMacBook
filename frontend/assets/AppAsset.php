<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        // template max
        // "max/lib/bootstrap/css/bootstrap.min.css",
        // "max/lib/font-awesome/css/font-awesome.min.css",
        // "max/lib/prettyphoto/css/prettyphoto.css",
        // "max/lib/hover/hoverex-all.css",
        // "max/lib/jetmenu/jetmenu.css",
        // "max/lib/owl-carousel/owl-carousel.css",
        // "max/css/style.css",
        // "max/css/colors/blue.css",

        //template 
        "max/img/favicon.png",
        "max/img/apple-touch-icon.png",
        "https://fonts.googleapis.com/css?family=Ruda:400,900,700",
        "max/lib/bootstrap/css/bootstrap.min.css",
        "max/lib/font-awesome/css/font-awesome.min.css",
        "max/lib/prettyphoto/css/prettyphoto.css",
        "max/lib/hover/hoverex-all.css",
        "max/lib/jetmenu/jetmenu.css",
        "max/lib/owl-carousel/owl-carousel.css",
        "max/css/style.css",
        "max/css/colors/blue.css"

    ];
    public $js = [
        // "js/main.js",
        // "menu/assets/js/modernizr.min.js",
        // "menu/assets/js/jquery.min.js",
        // "menu/assets/js/bootstrap.min.js",
        // "menu/assets/js/detect.js",
        // "menu/assets/js/fastclick.js",
        // "menu/assets/js/jquery.slimscroll.js",
        // "menu/assets/js/jquery.blockUI.js",
        // "menu/assets/js/waves.js",
        // "menu/assets/js/wow.min.js",
        // "menu/assets/js/jquery.nicescroll.js",
        // "menu/assets/js/jquery.scrollTo.min.js",
        // "menu/assets/plugins/peity/jquery.peity.min.js",
        // "menu/assets/plugins/waypoints/lib/jquery.waypoints.js",
        // "menu/assets/plugins/counterup/jquery.counterup.min.js",
        // "menu/assets/plugins/morris/morris.min.js",
        // "menu/assets/plugins/raphael/raphael-min.js",
        // "menu/assets/plugins/jquery-knob/jquery.knob.js",

        // "menu/assets/js/jquery.core.js",
        // "menu/assets/js/jquery.app.js",
        // JavaScript Libraries
        // "max/lib/jquery/jquery.min.js",
        "max/lib/bootstrap/js/bootstrap.min.js",
        "max/lib/php-mail-form/validate.js",
        "max/lib/prettyphoto/js/prettyphoto.js",
        "max/lib/isotope/isotope.min.js",
        "max/lib/hover/hoverdir.js",
        "max/lib/hover/hoverex.min.js",
        "max/lib/unveil-effects/unveil-effects.js",
        "max/lib/owl-carousel/owl-carousel.js",
        "max/lib/jetmenu/jetmenu.js",
        "max/lib/animate-enhanced/animate-enhanced.min.js",
        "max/lib/jigowatt/jigowatt.js",
        "max/lib/easypiechart/easypiechart.min.js",
        "max/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
