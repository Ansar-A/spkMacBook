<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SignupAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "menu/assets/css/bootstrap.min.css",
        "menu/assets/css/core.css",
        "menu/assets/css/components.css",
        "menu/assets/css/icons.css",
        "menu/assets/css/pages.css",
        "menu/assets/css/responsive.css",
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
}
