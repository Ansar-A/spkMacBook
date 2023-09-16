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
    <div class="topbar clearfix">
        <div class="container">
            <div class="col-lg-12 text-right">
                <div class="social_buttons">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <header class="header">
        <div class="container">
            <div class="site-header clearfix" style="padding-top: 10px;">
                <div class="col-lg-3 col-md-3 col-sm-12 title-area">
                    <div class="site-title" id="title">
                        <a href="index.html" title="">
                            <h4>SPK<span> MacBook Bekas</span></h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div id="nav" class="right">
                        <div class="container clearfix">
                            <ul id="jetmenu" class="jetmenu blue">
                                <li><a href="<?= Url::to(['site/index']) ?>">Home</a>
                                </li>
                                <li><a href=" <?= Url::to(['site/about']) ?>">About</a>
                                </li>
                                <?php if (Yii::$app->user->isGuest) : ?>
                                    <li class="pull-right"><a href="<?= Url::to(['site/login']) ?>">Login</a>
                                    </li>
                                <?php else : ?>
                                    <li class=""><a href="<?= Url::to(['produk/index']) ?>">Find your MacBook</a>
                                    </li>
                                    <li class="pull-right"><a href="<?= Url::to(['site/logout']) ?>" data-method="post">LOGOUT</a> </li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <main role="main">
        <?= $content ?>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="widget col-lg-4 col-md-4 col-sm-12">
                <h4 class="title">About us</h4>
                <p>Sistem Pendukung Keputusan penentuan <b>MacBook Bekas</b> adalah platform yang dapat anda gunakan dalam mencari MacBook berkualitas berdasarkan Budget yang anda miliki.</p>
                <a class="button small" href="<?php Url::to(['site/index']) ?>">read more</a>
            </div>

            <!-- end widget -->
            <div class="widget col-lg-4 col-md-4 col-sm-12">
                <h4 class="title">Get In Touch</h4>
                <ul class="contact_details">
                    <li><i class="fa fa-envelope-o"></i> ansarkenshin@gmail.com</li>
                    <li><i class="fa fa-phone-square"></i> +62 8243 7344</li>
                    <li><i class="fa fa-home"></i> Lambai, Kec. Lambai, Kab. Kolaka Utara</li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> View large map</a></li>
                </ul>
                <!-- contact_details -->
            </div>
            <!-- end widget -->
            <div class="widget col-lg-4 col-md-4 col-sm-12">
                <h4 class="title">Mitra</h4>
                <ul class="flickr">
                    <li><a href="#"><img alt="" src="<?= Url::to('@web/max/img/flickr_01.jpg') ?>"></a></li>
                    <li><a href="#"><img alt="" src="<?= Url::to('@web/max/img/flickr_01.jpg') ?>"></a></li>
                    <li><a href="#"><img alt="" src="<?= Url::to('@web/max/img/flickr_01.jpg') ?>"></a></li>
                </ul>
            </div>
            <!-- end widget -->
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="col-sm-12 columns text-center">
                    <p>Copyright © 2023 - UIN Alauddin Makassar - TR19GERS</p>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
