<?php

namespace backend\assets;

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
        "purple/assets/css/core.css",
        "purple/assets/css/components.css",
        "purple/assets/css/icons.css",
        "purple/assets/css/pages.css",
        "purple/assets/css/responsive.css",
    ];
    public $js = [
        // "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js",
        // "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js",
        "purple/assets/js/modernizr.min.js",
        "purple/assets/js/jquery.min.map",
        "purple/assets/js/bootstrap.min.js",
        "purple/assets/js/detect.js",
        "purple/assets/js/fastclick.js",
        "purple/assets/js/jquery.slimscroll.js",
        "purple/assets/js/jquery.blockUI.js",
        "purple/assets/js/waves.js",
        "purple/assets/js/wow.min.js",
        "purple/assets/js/jquery.nicescroll.js",
        "purple/assets/js/jquery.scrollTo.min.js",
        // "purple/assets/plugins/peity/jquery.peity.min.js",
        // "purple/assets/plugins/waypoints/lib/jquery.waypoints.js",
        // "purple/assets/plugins/counterup/jquery.counterup.min.js",
        // "purple/assets/plugins/morris/morris.min.js",
        // "purple/assets/plugins/raphael/raphael-min.js",
        // "purple/assets/plugins/jquery-knob/jquery.knob.js",
        // "purple/assets/pages/jquery.dashboard.js",
        "purple/assets/js/jquery.core.js",
        "purple/assets/js/jquery.app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    // public $jsOptions = [
    //     'posision' => \yii\web\View::POS_HEAD,
    // ];
}
