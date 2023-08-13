<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\bootstrap\Nav;
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

<body class="fixed-left">
    <?php $this->beginBody() ?>
    <div id="wrapper">
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="md md-menu"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>


                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown top-menu-item-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                    <li class="list-group slimscroll-noti notification-list">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available.</small>
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
                                    <li>
                                        <a href="javascript:void(0);" class="list-group-item text-right">
                                            <small class="font-600">See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                            </li>
                            <li class="dropdown top-menu-item-xs">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?= Url::to('@web/' . Yii::$app->user->identity->photo) ?>" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= Url::to(['site/logout']) ?>" data-method="POST"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>

                        <li class="text-muted menu-title">Dashboard</li>
                        <li class="has_sub">
                            <a href="<?= Url::to(['site/index']) ?>" class="waves-effect"><i class="ti-home"></i> <span> Home </span></a>
                        </li>
                        <li class="text-muted menu-title">User</li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Servicer </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['user/index']) ?>">User</a></li>
                                <li><a href="<?= Url::to(['site/info']) ?>">info</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Pengguna </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['pengguna/index']) ?>">Pengguna</a></li>
                                <li><a href="<?= Url::to(['site/info']) ?>">info</a></li>
                            </ul>
                        </li>
                        <li class="text-muted menu-title">SPK MacBook</li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Detail Produk </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['detail-produk/index']) ?>">Detail</a></li>
                                <li><a href="<?= Url::to(['ketahanan-macbook/index']) ?>">Ketahanan MacBook</a></li>
                                <li><a href="<?= Url::to(['performa-macbook/index']) ?>">Performa MacBook</a></li>
                                <li><a href="<?= Url::to(['kondisi-macbook/index']) ?>">Kondisi MacBook</a></li>
                                <li><a href="<?= Url::to(['keamanan-macbook/index']) ?>">Keamanan MacBook</a></li>
                                <li><a href="<?= Url::to(['data-spk/index']) ?>">SPK MacBook</a></li>
                                <li><a href="#">info</a></li>
                            </ul>
                        </li>
                        <li class="text-muted menu-title">MacBook</li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>Data MacBook</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['produk/index']) ?>">MacBook</a></li>
                                <li><a href="tables-datatable.html">info</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span class="menu-arrow"></span><span> Component </span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['jenis-produk/index']) ?>">Jenis MacBook</a></li>
                                <li><a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a></li>
                                <li><a href="<?= Url::to(['jenis-layar/index']) ?>">Layar</a></li>
                                <li><a href="<?= Url::to(['jenis-prosesor/index']) ?>">Prosesor</a></li>
                                <li><a href="<?= Url::to(['jenis-penyimpanan/index']) ?>">Penyimpanan</a></li>
                                <li><a href="<?= Url::to(['daya/index']) ?>">Daya</a></li>
                                <li><a href="<?= Url::to(['warna/index']) ?>">Warna</a></li>
                                <li><a href="<?= Url::to(['nirkabel/index']) ?>">Nirkabel</a></li>
                                <li><a href="<?= Url::to(['ukuran-berat/index']) ?>">Ukuran & Berat</a></li>
                                <li><a href="<?= Url::to(['kamera/index']) ?>">kamera</a></li>
                                <li><a href="<?= Url::to(['builtin-Apps/index']) ?>">Builtin Apps</a></li>
                                <li><a href="<?= Url::to(['audio/index']) ?>">Audio</a></li>
                                <li><a href="<?= Url::to(['koneksi-ekspansi/index']) ?>">Koneksi & Ekspansi</a></li>

                            </ul>
                        </li>

                        <li class="text-muted menu-title">More</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="page-starter.html">Starter Page</a></li>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-login-v2.html">Login v2</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-register-v2.html">Register v2</a></li>
                                <li><a href="page-signup-signin.html">Signin - Signup</a></li>
                                <li><a href="page-recoverpw.html">Recover Password</a></li>
                                <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                <li><a href="page-400.html">Error 400</a></li>
                                <li><a href="page-403.html">Error 403</a></li>
                                <li><a href="page-404.html">Error 404</a></li>
                                <li><a href="page-404_alt.html">Error 404-alt</a></li>
                                <li><a href="page-500.html">Error 500</a></li>
                                <li><a href="page-503.html">Error 503</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="extra-profile.html">Profile</a></li>
                                <li><a href="extra-timeline.html">Timeline</a></li>
                                <li><a href="extra-sitemap.html">Site map</a></li>
                                <li><a href="extra-invoice.html">Invoice</a></li>
                                <li><a href="extra-email-template.html">Email template</a></li>
                                <li><a href="extra-maintenance.html">Maintenance</a></li>
                                <li><a href="extra-coming-soon.html">Coming-soon</a></li>
                                <li><a href="extra-faq.html">FAQ</a></li>
                                <li><a href="extra-search-result.html">Search result</a></li>
                                <li><a href="extra-gallery.html">Gallery</a></li>
                                <li><a href="extra-pricing.html">Pricing</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i><span class="label label-success pull-right">3</span><span> Apps </span></a>
                            <ul class="list-unstyled">
                                <li><a href="apps-calendar.html"> Calendar</a></li>
                                <li><a href="apps-contact.html"> Contact</a></li>
                                <li><a href="apps-taskboard.html"> Taskboard</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Email </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="email-inbox.html"> Inbox</a></li>
                                <li><a href="email-read.html"> Read Mail</a></li>
                                <li><a href="email-compose.html"> Compose Mail</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-widget"></i><span> Layouts </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="layout-leftbar_2.html"> Leftbar with User</a></li>
                                <li><a href="layout-menu-collapsed.html"> Menu Collapsed</a></li>
                                <li><a href="layout-menu-small.html"> Small Menu</a></li>
                                <li><a href="layout-header_2.html"> Header style</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                        <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                        <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="text-muted menu-title">Extra</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Crm </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="crm-dashboard.html"> Dashboard </a></li>
                                <li><a href="crm-contact.html"> Contacts </a></li>
                                <li><a href="crm-opportunities.html"> Opportunities </a></li>
                                <li><a href="crm-leads.html"> Leads </a></li>
                                <li><a href="crm-customers.html"> Customers </a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i><span class="label label-warning pull-right">6</span><span> eCommerce </span></a>
                            <ul class="list-unstyled">
                                <li><a href="ecommerce-dashboard.html"> Dashboard</a></li>
                                <li><a href="ecommerce-products.html"> Products</a></li>
                                <li><a href="ecommerce-product-detail.html"> Product Detail</a></li>
                                <li><a href="ecommerce-product-edit.html"> Product Edit</a></li>
                                <li><a href="ecommerce-orders.html"> Orders</a></li>
                                <li><a href="ecommerce-sellers.html"> Sellers</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <main>
            <div class="content-page">
                <?= $content ?>
            </div>
        </main>
        <footer class="footer text-right">
            © 2016. All rights reserved.
        </footer>
    </div>
    <script>
        var resizefunc = [];
    </script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
