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
if (\Yii::$app->user->can('Yii::@app->user->identity->get_auth')) {
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
                            <li class="hidden-xs">
                                <a href="<?= Url::to(['user/index']) ?>" class="right-bar-toggle waves-effect waves-light"><i class="fa fa-dot-circle-o"></i> <?php echo Yii::$app->user->identity->username ?> [ <?php echo Yii::$app->user->identity->role ?> ]</a>
                            </li>
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
                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
                            <li class="text-muted menu-title">MacBook</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-apple"></i><span>MacBook</span> <span style="color:#714ABA" class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['produk/index']) ?>">Data MacBook</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Komponent</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span style="color:#714ABA" class="menu-arrow"></span><span> Komponen </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['jenis-produk/index']) ?>">Jenis MacBook</a></li>
                                    <li><a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a></li>
                                    <li><a href="<?= Url::to(['warna/index']) ?>">Warna</a></li>
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
                                <a class="waves-effect"><i class="icon-people"></i> <span> Pengguna Website</span>
                                    <span style="color:#714ABA" class="menu-arrow">
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['pengguna/index']) ?>">Data Pengguna</a></li>
                                    <li><a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Akses</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-key"></i><span> Akses Kontrol </span> <span style="color:#714ABA" class="menu-arrow"></span></a>
                                <ul class="list-unstyled">

                                    <li><a href="<?= Url::to(['auth-assignment/index']) ?>">Auth Assignment</a></li>

                                </ul>
                            </li>
                            <!-- <li class="text-muted menu-title">Frontend</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-layers"></i><span> Custom Populer</span> <span style="color:#714ABA" class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['fr-macpro/index']) ?>">Populer Item</a></li>
                                </ul>
                            </li> -->
                        <?php elseif (\Yii::$app->user->can('Toko')) : ?>
                            <li class="text-muted menu-title">MacBook</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-apple"></i><span>Data MacBook</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['produk/index']) ?>">MacBook</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Komponent</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span style="color:#714ABA" class="menu-arrow"></span><span> Komponen </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['jenis-produk/index']) ?>">Jenis MacBook</a></li>
                                    <li><a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a></li>
                                    <li><a href="<?= Url::to(['warna/index']) ?>">Warna</a></li>
                                </ul>
                            </li>
                            <!-- <li class="text-muted menu-title">SPK Kelayakan</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-stats-up"></i><span style="color:#714ABA" class="menu-arrow"></span><span> SPK </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['spk-kelayakan/index']) ?>">Kelayakan MacBook</a></li>
                                </ul>
                            </li> -->
                            <li class="text-muted menu-title">User</li>
                            <li class="has_sub">
                                <a class="waves-effect"><i class="ti-user"></i> <span> Admin </span> <span style="color:#714ABA" class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['user/index']) ?>">Data Admin</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a class="waves-effect"><i class="icon-people"></i> <span> Pengguna Website</span> <span style="color:#714ABA" class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">

                                    <li><a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a></li>
                                </ul>
                            </li>
                        <?php elseif (\Yii::$app->user->can('Personal')) : ?>
                            <li class="text-muted menu-title">MacBook</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-apple"></i><span>Data MacBook</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['produk/index']) ?>">MacBook</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">Komponent</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span style="color:#714ABA" class="menu-arrow"></span><span> Komponen </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= Url::to(['jenis-produk/index']) ?>">Jenis MacBook</a></li>
                                    <li><a href="<?= Url::to(['jenis-so/index']) ?>">Sistem Operasi</a></li>
                                    <li><a href="<?= Url::to(['warna/index']) ?>">Warna</a></li>
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
                                <a class="waves-effect"><i class="icon-people"></i> <span> Pengguna Website</span> <span style="color:#714ABA" class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">

                                    <li><a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a></li>
                                </ul>
                            </li>
                        <?php endif ?>
                        <li class="text-muted menu-title">Help</li>
                        <li class="has_sub">
                            <a href="<?= Url::to(['site/info']) ?>" class="waves-effect"><i class="ti-info"></i><span> Info </span></a>
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
    <!-- <div class="side-bar right-bar nicescroll" style="overflow: hidden; outline: none;" tabindex="5000">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll" style="overflow: hidden; outline: none;" tabindex="5001">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-10.jpg" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
        <div id="ascrail2001" class="nicescroll-rails" style="width: 8px; z-index: 99; cursor: default; position: absolute; top: 53px; left: 232px; height: 511px; display: none; opacity: 0;">
            <div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(152, 166, 173); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div>
        </div>
        <div id="ascrail2001-hr" class="nicescroll-rails" style="height: 8px; z-index: 99; top: 556px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;">
            <div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(152, 166, 173); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
        </div>
    </div> -->
    <script>
        var resizefunc = [];
    </script>

    <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage();
