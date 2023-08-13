<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SignupAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "purple/assets/images/favicon_1.ico",
        "purple/assets/plugins/morris/morris.css",
        "purple/assets/css/bootstrap.min.css",
        "purple/assets/css/core.css",
        "purple/assets/css/components.css",
        "purple/assets/css/icons.css",
        "purple/assets/css/pages.css",
        "purple/assets/css/responsive.css",

    ];
    public $js = [
        "purple/assets/js/modernizr.min.js",
        "purple/assets/js/jquery.min.js",
        "purple/assets/js/bootstrap.min.js",
        "purple/assets/js/detect.js",
        "purple/assets/js/fastclick.js",
        "purple/assets/js/jquery.slimscroll.js",
        "purple/assets/js/jquery.blockUI.js",
        "purple/assets/js/waves.js",
        "purple/assets/js/wow.min.js",
        "purple/assets/js/jquery.nicescroll.js",
        "purple/assets/js/jquery.scrollTo.min.js",
        "purple/assets/plugins/peity/jquery.peity.min.js",
        "purple/assets/plugins/waypoints/lib/jquery.waypoints.js",
        "purple/assets/plugins/counterup/jquery.counterup.min.js",
        "purple/assets/plugins/morris/morris.min.js",
        "purple/assets/plugins/raphael/raphael-min.js",
        "purple/assets/plugins/jquery-knob/jquery.knob.js",
        "purple/assets/pages/jquery.dashboard.js",
        "purple/assets/js/jquery.core.js",
        "purple/assets/js/jquery.app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
