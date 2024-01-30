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
        <div class="container" style="padding-bottom:8px">
            <div class="col-lg-12 text-right">
                <div class="social_buttons">
                    <a target="_blank" href=https://www.facebook.com/?locale=id_ID" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="https://www.youtube.com/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <header class="header" id="#dmtop">
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
                                <?php if (Yii::$app->user->isGuest) : ?>
                                    <li class="pull-right"><a href="<?= Url::to(['site/login']) ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                                    </li>
                                <?php else : ?>
                                    <li class="pull-right"><a href="<?= Url::to(['site/logout']) ?>" data-method="post">WELCOME | <u><?= Yii::$app->user->identity->username ?></a></u> </li>
                                <?php endif ?>
                                <li class=""><a href="<?= Url::to(['spk-kelayakan/index']) ?>">Find your MacBook</a>
                                </li>
                                <li><a href=" <?= Url::to(['site/about']) ?>">About</a>
                                </li>
                                <li><a href=" <?= Url::to(['site/contact']) ?>">Contact</a>
                                </li>
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
            <div class="widget col-lg-6 col-md-6 col-sm-12">
                <h4 class="title">About us</h4>
                <p>Sistem Pendukung Keputusan penentuan <b>MacBook Bekas</b> adalah platform yang dapat anda gunakan dalam mencari MacBook berkualitas berdasarkan Budget yang anda miliki.</p>
            </div>
            <div class="widget col-lg-6 col-md-6 col-sm-12">
                <h4 class="title">More About Developher</h4>
                <ul class="contact_details">
                    <li><i class="fa fa-envelope-o"></i> ansarkenshin@gmail.com</li>
                    <li><i class="fa fa-phone-square"></i> +62 8234 7626 103</li>
                    <li><i class="fa fa-home"></i> Lambai, Kec. Lambai, Kab. Kolaka Utara</li>
                </ul>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="col-sm-12 columns text-center">
                    <p>2023 - UIN Alauddin Makassar - Sistem Informasi</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="dmtop" style="bottom: 25px;">Scroll to Top</div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
