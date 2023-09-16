<?php

/** @var yii\web\View $this */


use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>

<section id="intro">
    <div class="container">
        <div class="ror">
            <div class="col-md-8 col-md-offset-2">
                <h1>SPK MacBook Bekas</h1>
                <p>"Membantu anda dalam menentukan MacBook yang memiliki kualitas terbaik berbadasarkan budget"</p>
                <?php if (Yii::$app->user->isGuest) : ?>
                    <p style="padding-top: 10px;"> <a class=" dmbutton large" href="<?= Url::to(['site/login']) ?>">FIND NOW</a></p>
                <?php else : ?>
                    <p style="padding-top: 10px;"> <a class=" dmbutton large" href="<?= Url::to(['produk/index']) ?>">FIND NOW</a></p>
                <?php endif ?>

            </div>
        </div>
    </div>
</section>

<section class="section1">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-bottom">
                        <?php if (Yii::$app->user->isGuest) : ?>
                            <a href="<?= Url::to(['site/login']) ?>" class=""> <i class="active dm-icon fa fa-laptop fa-3x"></i> </a>
                        <?php else : ?>
                            <a href="http://localhost/yii-spk/backend/web/site/login" class=""> <i class="active dm-icon fa fa-laptop fa-3x"></i> </a>
                        <?php endif ?>
                    </div>
                    <div class="servicetitle">
                        <h4>Join to Mitra</h4>
                        <hr>
                    </div>
                    <p>Memberikan kesempatan untuk para pemilik toko komputer dalam memperkenalkan produknya</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="#" class=""> <i class="active dm-icon fa fa-bars fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Find MacBook</h4>
                        <hr>
                    </div>
                    <p>Fitur ini dapat membantu anda dalam menentukan MacBook</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-right">
                        <a href="#" class=""> <i class="active dm-icon fa fa-book fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Easy to Proses</h4>
                        <hr>
                    </div>
                    <p>Langkah awal dalam menentukan pilihan terbaik dalam menentukan MacBook yang anda inginkan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<section class="section5">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 columns">
            <div class="widget" data-effect="slide-left">
                <img src="<?= Url::to('@web/max/img/bgside.png') ?>" alt="">
            </div>
            <!-- end widget -->
        </div>
        <!-- large-6 -->
        <div class="col-lg-6 col-md-6 col-sm-12 columns">
            <div class="widget clearfix">
                <div class="services_lists">

                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-key fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Create an Account</h4>
                                <hr>
                            </div>
                            <p>Silahkan buat akun untuk dapat menentukan pilihan anda!</p>
                        </div>
                    </div>
                    <!-- services_lists_boxes -->

                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-download fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Find</h4>
                                <hr>
                            </div>
                            <p>Anda dapat langsung menentukan MacBook</p>
                        </div>
                    </div>
                    <div class="services_lists_boxes clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="services_lists_boxes_icon_none effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                <a href="#" class=""> <i class="active dm-icon-medium fa fa-dollar fa-2x"></i> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="servicetitle">
                                <h4>Spesifict Detail</h4>
                                <hr>
                            </div>
                            <p>Menyajikan informasi spesfik mengenai laptop MacBook yang anda cari.</p>
                        </div>
                    </div>

                </div>
                <!-- services_lists -->
            </div>
            <!-- end widget -->
        </div>
        <!-- large-6 -->
    </div>
    <!-- end container -->
</section>
<!-- end section2 -->


<section class="section2">
    <div class="container">
        <div class="message text-center">
            <h2 class="big-title">WELCOME TO SPK <span>MACBOOK BEKAS</span></h2>
            <p class="small-title">"Simple, Inovatif and The Best Solution"</p>
            <a class="button large" href="#">ABOUT</a> <a class=" dmbutton large" href="#">CONTACT US</a>
        </div>
    </div>
</section>