<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">
                <!-- Logo container-->
                <div class="logo">
                    <a href="index.html" class="logo"><span>Ub<i class="md md-album"></i>ld</span></a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="navbar-c-items">
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 230px;">
                                    <li class="list-group slimscroll-noti notification-list" style="overflow: hidden; width: auto; height: 230px;">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <div class="slimScrollBar" style="background: rgb(152, 166, 173); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                </div>
                                <li>
                                    <a href="javascript:void(0);" class="list-group-item text-right">
                                        <small class="font-600">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?= Url::to('@web/menu/assets/images/users/avatar-1.jpg') ?>" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                                <li class="divider"></li>
                                <li><a href="<?= Url::to(['site/logout']) ?>" data-method="POST"><i class=" ti-power-off text-danger m-r-10"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar-custom">
            <div class="container">
                <div id="navigation" class="active">
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a style="color: black;" href="<?= Url::to(['site/index']) ?>">
                                Home
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                Find your MacBook
                            </a>
                            <ul class="submenu">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-loading-buttons.html">Loading Buttons</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-portlets.html">Portlets</a></li>
                                <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                <li><a href="ui-tabs.html">Tabs</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li><a href="ui-video.html">Video</a>
                                </li>
                                <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a style="color: black;" href="#">
                                components
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <span>Elements</span>
                                        </li>
                                        <li><a href="components-grid.html">Grid</a></li>
                                        <li><a href="components-widgets.html">Widgets</a></li>
                                        <li><a href="components-nestable-list.html">Nesteble</a></li>
                                        <li><a href="components-range-sliders.html">Range sliders</a></li>
                                        <li><a href="components-masonry.html">Masonry</a></li>
                                        <li><a href="components-animation.html">Animation</a></li>
                                        <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
                                        <li><a href="components-treeview.html">Tree view</a></li>
                                        <li><a href="components-tour.html">Tour</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <span>Forms</span>
                                        </li>
                                        <li><a href="form-elements.html">General Elements</a></li>
                                        <li><a href="form-advanced.html">Advanced Form</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-pickers.html">Form Pickers</a></li>
                                        <li><a href="form-wizard.html">Form Wizard</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <span>Forms</span>
                                        </li>
                                        <li><a href="form-mask.html">Form Masks</a></li>
                                        <li><a href="form-summernote.html">Summernote</a></li>
                                        <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                        <li><a href="form-code-editor.html">Code Editor</a></li>
                                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        <li><a href="form-xeditable.html">X-editable</a></li>
                                        <li><a href="form-image-crop.html">Image Crop</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a style="color: black;" href="#">
                                Other
                            </a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Tables</a>
                                    <ul class="submenu">
                                        <li><a href="tables-basic.html">Basic Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Table</a></li>
                                        <li><a href="tables-editable.html">Editable Table</a></li>
                                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                                        <li><a href="tables-foo-tables.html">FooTable</a></li>
                                        <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                        <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                        <li><a href="tables-jsgrid.html">JsGrid Tables</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Charts</a>
                                    <ul class="submenu">
                                        <li><a href="chart-flot.html">Flot Chart</a></li>
                                        <li><a href="chart-morris.html">Morris Chart</a></li>
                                        <li><a href="chart-chartjs.html">Chartjs</a></li>
                                        <li><a href="chart-peity.html">Peity Charts</a></li>
                                        <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                        <li><a href="chart-c3.html">C3 Charts</a></li>
                                        <li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>
                                        <li><a href="chart-sparkline.html">Sparkline charts</a></li>
                                        <li><a href="chart-radial.html">Radial charts</a></li>
                                        <li><a href="chart-other.html">Other Chart</a></li>
                                        <li><a href="chart-ricksaw.html">Ricksaw Chart</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Icons</a>
                                    <ul class="submenu">
                                        <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                                        <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                        <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                        <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                        <li><a href="icons-weather.html">Weather Icons</a></li>
                                        <li><a href="icons-typicons.html">Typicons</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Maps</a>
                                    <ul class="submenu">
                                        <li><a href="map-google.html"> Google Map</a></li>
                                        <li><a href="map-vector.html"> Vector Map</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Email</a>
                                    <ul class="submenu">
                                        <li><a href="email-inbox.html"> Inbox</a></li>
                                        <li><a href="email-read.html"> Read Mail</a></li>
                                        <li><a href="email-compose.html"> Compose Mail</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a style="color: black;" href="#">Pages</a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="page-starter.html">Starter Page</a></li>
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-login-v2.html">Login v2</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-register-v2.html">Register v2</a></li>
                                        <li><a href="page-signup-signin.html">Signin - Signup</a></li>
                                        <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="page-400.html">Error 400</a></li>
                                        <li><a href="page-403.html">Error 403</a></li>
                                        <li><a href="page-404.html">Error 404</a></li>
                                        <li><a href="page-404_alt.html">Error 404-alt</a></li>
                                        <li><a href="page-500.html">Error 500</a></li>
                                        <li><a href="page-503.html">Error 503</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main role="main">
        <?= $content ?>
        <p></p>
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        © 2023. Uin Alauddin Makassar
                    </div>
                    <div class="col-xs-6">
                        <ul class="pull-right list-inline m-b-0">
                            <li><a class="btn btn-white  btn-rounded btn-sm waves-effect waves-light">About
                                    <span class="btn-label btn-rounded  btn-label-right"><i class="fa fa-info"></i>
                                    </span>
                                </a></li>
                            <li>
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </footer>
    </main>




    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
