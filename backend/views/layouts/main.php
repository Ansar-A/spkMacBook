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
                    <a href="<?= Url::to(['site/index']) ?>" class="logo"><i class="fa fa-xing-square"></i></a>
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
                        <li class="has_sub active">
                            <a href="<?= Url::to(['site/index']) ?>" class="waves-effect"><i class="ti-home"></i> <span> Home </span></a>
                        </li>

                        <li class="text-muted menu-title">MacBook</li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-apple"></i><span>Data MacBook</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['produk/index']) ?>">MacBook</a></li>
                            </ul>
                        </li>
                        <li class="text-muted menu-title">SPK MacBook</li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-panel"></i><span> Detail Produk </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['detail-produk/index']) ?>">Detail</a></li>
                                <li><a href="<?= Url::to(['ketahanan-macbook/index']) ?>">Ketahanan MacBook</a></li>
                                <li><a href="<?= Url::to(['performa-macbook/index']) ?>">Performa MacBook</a></li>
                                <li><a href="<?= Url::to(['kondisi-macbook/index']) ?>">Kondisi MacBook</a></li>
                                <li><a href="<?= Url::to(['keamanan-macbook/index']) ?>">Keamanan MacBook</a></li>
                                <li><a href="<?= Url::to(['data-spk/index']) ?>">SPK MacBook</a></li>
                            </ul>
                        </li>
                        <li class="text-muted menu-title">Komponent</li>
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
                                <li><a href="<?= Url::to(['builtin-apps/index']) ?>">Builtin Apps</a></li>
                                <li><a href="<?= Url::to(['audio/index']) ?>">Audio</a></li>
                                <li><a href="<?= Url::to(['koneksi-ekspansi/index']) ?>">Koneksi & Ekspansi</a></li>

                            </ul>
                        </li>
                        <li class="text-muted menu-title">User</li>
                        <li class="has_sub">
                            <a class="waves-effect"><i class="ti-user"></i> <span> Admin </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['user/index']) ?>">Data Admin</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a class="waves-effect"><i class="icon-people"></i> <span> Pengguna </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['pengguna/index']) ?>">Data Pengguna</a></li>
                                <!-- <li><a href="<?= Url::to(['like-produk/index']) ?>">Like</a></li> -->
                            </ul>
                        </li>
                        <li class="text-muted menu-title">Access</li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-key"></i><span> Access Control </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?= Url::to(['auth-item/index']) ?>">AuthItem</a></li>
                                <li><a href="<?= Url::to(['auth-assignment/index']) ?>">AuthAssignment</a></li>
                                <!-- <li><a href="<?= Url::to(['auth-rule/index']) ?>">AuthRule</a></li> -->
                                <!-- <li><a href="<?= Url::to(['auth-item-child/index']) ?>">AuthItemChild</a></li> -->
                            </ul>
                        </li>
                        <li class="text-muted menu-title">Help</li>
                        <li class="has_sub">
                            <a href="<?= Url::to(['site/info']) ?>" class="waves-effect"><i class="ti-help"></i><span> Info </span></a>
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
            © 2023. Uin Alauddin Makassar.
        </footer>
    </div>
    <script>
        var resizefunc = [];
    </script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
