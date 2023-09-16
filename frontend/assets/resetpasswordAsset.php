<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class resetpasswordAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        // "purple/assets/plugins/morris/morris.css",
        // "purple/assets/css/bootstrap.min.css",
        "max/lib/bootstrap/css/bootstrap.min.css",
        "max/lib/font-awesome/css/font-awesome.min.css",
        "max/lib/prettyphoto/css/prettyphoto.css",
        "max/lib/hover/hoverex-all.css",
        "max/lib/jetmenu/jetmenu.css",
        "max/lib/owl-carousel/owl-carousel.css",
        "max/css/style.css",
        "max/css/colors/blue.css",
    ];
    public $js = [
        "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js",
        "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js",
        "menu/assets/js/modernizr.min.js",
        "menu/assets/js/jquery.min.js",
        "menu/assets/js/bootstrap.min.js",
        "menu/assets/js/detect.js",
        "menu/assets/js/fastclick.js",
        "menu/assets/js/jquery.slimscroll.js",
        "menu/assets/js/jquery.blockUI.js",
        "menu/assets/js/waves.js",
        "menu/assets/js/wow.min.js",
        "menu/assets/js/jquery.nicescroll.js",
        "menu/assets/js/jquery.scrollTo.min.js",
        "menu/assets/plugins/peity/jquery.peity.min.js",
        "menu/assets/plugins/waypoints/lib/jquery.waypoints.js",
        "menu/assets/plugins/counterup/jquery.counterup.min.js",
        "menu/assets/plugins/morris/morris.min.js",
        "menu/assets/plugins/raphael/raphael-min.js",
        "menu/assets/plugins/jquery-knob/jquery.knob.js",
        "menu/assets/pages/jquery.dashboard.js",
        "menu/assets/js/jquery.core.js",
        "menu/assets/js/jquery.app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    // public $jsOptions = [
    //     'posision' => \yii\web\View::POS_HEAD,
    // ];
}
