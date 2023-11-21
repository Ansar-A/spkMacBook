<?php

/** @var \yii\web\View $this */

use common\models\LikeProduk;

/** @var string $content */

use yii2mod\alert\Alert;
use backend\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;

AppAsset::register($this);
if (\Yii::$app->user->can('SuperAdmin')) {
    $totalLike = LikeProduk::find()->count();
} else {
    $totalLike = LikeProduk::find()->joinWith('kelayakan.produk.user')->where(['id_servicer' => Yii::$app->user->identity->id])->count();
}

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
    <style>
        .navbar {
            /* background: linear-gradient(to top, #FF6C22, #FF9209); */
            background: rgb(113, 58, 190);
        }
    </style>
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
                            <input style="width: 300px;" type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown top-menu-item-xs">
                                <a href="<?= Url::to(['like-produk/index']) ?>" data-target="#" class="dropdown-toggle waves-effect waves-light">
                                    <i class="fa fa-heart"></i> <span class="badge badge-xs badge-danger"><?php echo $totalLike ?></span>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                            </li>
                            <li class="dropdown top-menu-item-xs">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo Url::to('@web/' . Yii::$app->user->identity->photo) ?>" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= Url::to(['user/index']) ?>"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                    <li><a href="<?= Url::to(['site/firs']) ?>"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?= Url::to(['site/logout']) ?>" data-method="POST"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">Dashboard</li>
                        <li class="has_sub active">
                            <a href="<?= Url::to(['site/index']) ?>" class="waves-effect"><i class="fa fa-desktop"></i> <span> Dashboard </span></a>
                        </li>
                        <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                            <li class="text-muted menu-title">MacBook</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-apple"></i><span>MacBook</span> <span style="color:#714ABA" class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['produk/index']) ?>">Data MacBook</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Komponent</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span style="color:#714ABA" class="menu-arrow"></span><span> Component </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['jenis-produk/index']) ?>">Jenis MacBook</a></li>
                                    <li><a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a></li>
                                    <li><a href="<?= Url::to(['jenis-layar/index']) ?>">Layar</a></li>
                                    <li><a href="<?= Url::to(['daya/index']) ?>">Daya</a></li>
                                    <li><a href="<?= Url::to(['warna/index']) ?>">Warna</a></li>
                                    <li><a href="<?= Url::to(['nirkabel/index']) ?>">Nirkabel</a></li>
                                    <li><a href="<?= Url::to(['ukuran-berat/index']) ?>">Ukuran & Berat</a></li>
                                    <li><a href="<?= Url::to(['kamera/index']) ?>">kamera</a></li>
                                    <li><a href="<?= Url::to(['builtin-apps/index']) ?>">Builtin Apps</a></li>
                                    <li><a href="<?= Url::to(['audio/index']) ?>">Audio</a></li>
                                    <li><a href="<?= Url::to(['koneksi-ekspansi/index']) ?>">Koneksi & Ekspansi</a></li>
                                    <li><a href="<?= Url::to(['jenis-prosesor/index']) ?>">Informasi Prosesor</a></li>
                                    <li><a href="<?= Url::to(['jenis-penyimpanan/index']) ?>">Informasi Storage</a></li>
                                    <li><a href="<?= Url::to(['informasi-ram/index']) ?>">Informasi RAM</a></li>
                                    <li><a href="<?= Url::to(['informasi-vga/index']) ?>">Informasi VGA</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">SPK Kelayakan</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-stats-up"></i><span style="color:#714ABA" class="menu-arrow"></span><span> SPK </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['spk-kelayakan/index']) ?>">Kelayakan MacBook</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">User</li>
                            <li class="has_sub">
                                <a class="waves-effect"><i class="ti-user"></i> <span> Admin </span> <span style="color:#714ABA" class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['user/index']) ?>">Data Admin</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a class="waves-effect"><i class="icon-people"></i> <span> Pengguna </span>
                                    <span style="color:#714ABA" class="menu-arrow">
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['pengguna/index']) ?>">Data Pengguna</a></li>
                                    <li><a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Access</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-key"></i><span> Access Control </span> <span style="color:#714ABA" class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['auth-item/index']) ?>">Auth Item</a></li>
                                    <li><a href="<?= Url::to(['auth-assignment/index']) ?>">Auth Assignment</a></li>
                                    <!-- <li><a href="<?= Url::to(['auth-rule/index']) ?>">AuthRule</a></li> -->
                                    <li><a href="<?= Url::to(['auth-item-child/index']) ?>">Auth Item Child</a></li>
                                </ul>
                            </li>
                        <?php elseif (\Yii::$app->user->can('Admin')) : ?>
                            <li class="text-muted menu-title">MacBook</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-apple"></i><span>Data MacBook</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['produk/index']) ?>">MacBook</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Komponent</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span style="color:#714ABA" class="menu-arrow"></span><span> Component </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['jenis-produk/index']) ?>">Jenis MacBook</a></li>
                                    <li><a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a></li>
                                    <li><a href="<?= Url::to(['jenis-layar/index']) ?>">Layar</a></li>
                                    <li><a href="<?= Url::to(['daya/index']) ?>">Daya</a></li>
                                    <li><a href="<?= Url::to(['warna/index']) ?>">Warna</a></li>
                                    <li><a href="<?= Url::to(['nirkabel/index']) ?>">Nirkabel</a></li>
                                    <li><a href="<?= Url::to(['ukuran-berat/index']) ?>">Ukuran & Berat</a></li>
                                    <li><a href="<?= Url::to(['kamera/index']) ?>">kamera</a></li>
                                    <li><a href="<?= Url::to(['builtin-apps/index']) ?>">Builtin Apps</a></li>
                                    <li><a href="<?= Url::to(['audio/index']) ?>">Audio</a></li>
                                    <li><a href="<?= Url::to(['koneksi-ekspansi/index']) ?>">Koneksi & Ekspansi</a></li>
                                    <li><a href="<?= Url::to(['jenis-prosesor/index']) ?>">Informasi Prosesor</a></li>
                                    <li><a href="<?= Url::to(['jenis-penyimpanan/index']) ?>">Informasi Storage</a></li>
                                    <li><a href="<?= Url::to(['informasi-ram/index']) ?>">Informasi RAM</a></li>
                                    <li><a href="<?= Url::to(['informasi-vga/index']) ?>">Informasi VGA</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">User</li>
                            <li class="has_sub">
                                <a class="waves-effect"><i class="ti-user"></i> <span> Admin </span> <span style="color:#714ABA" class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['user/index']) ?>">Data Admin</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a class="waves-effect"><i class="icon-people"></i> <span> Pengguna </span> <span style="color:#714ABA" class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['pengguna/index']) ?>">Data Pengguna</a></li>
                                    <li><a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a></li>
                                </ul>
                            </li>
                        <?php endif ?>

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
