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
                <p>"Membantu anda dalam menentukan MacBook yang memiliki kualitas terbaik berbadasarkan budget anda"</p>
                <?php if (Yii::$app->user->isGuest) : ?>
                    <p style="padding-top: 10px;"> <a class=" dmbutton large" href="<?= Url::to(['site/login']) ?>">FIND NOW</a></p>
                <?php else : ?>
                    <p style="padding-top: 10px;"> <a class=" dmbutton large" href="<?= Url::to(['spk-kelayakan/index']) ?>">FIND NOW</a></p>
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
                    <p>Memberikan kesempatan untuk para pemilik toko komputer dalam memperkenalkan produk MacBook bekasnya</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <?php if (Yii::$app->user->isGuest) : ?>
                            <a href="<?= Url::to(['site/login']) ?>" class=""> <i class="active dm-icon fa fa-laptop fa-3x"></i> </a>
                        <?php else : ?>
                            <a href="<?= Url::to(['spk-kelayakan/index']) ?>" class=""> <i class="active dm-icon fa fa-bars fa-3x"></i> </a>
                        <?php endif ?>
                    </div>
                    <div class="servicetitle">
                        <h4>Find MacBook</h4>
                        <hr>
                    </div>
                    <p>Fitur ini dapat membantu anda dalam menentukan MacBook berdasarkan budget yang anda masukkan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-right">
                        <a class=""> <i class="active dm-icon fa fa-book fa-3x"></i> </a>
                    </div>
                    <div class="servicetitle">
                        <h4>Easy to Proses</h4>
                        <hr>
                    </div>
                    <p>Langkah awal dalam menentukan pilihan terbaik untuk memiliki MacBook bekas yang anda inginkan dengan kualitas MacBook terbaik</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section1">
    <div class="container clearfix">
        <div class=" col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="divider"></div>
            <nav class="portfolio-filter clearfix">
                <ul>
                    <li><a href="#" class="dmbutton2" data-filter="*">Populer</a></li>
                    <li><a href="#" class="dmbutton2" data-filter=".pro">MacBook Pro</a></li>
                    <li><a href="#" class="dmbutton2" data-filter=".air">MacBook Air</a></li>
                    <li><a href="#" class="dmbutton2" data-filter=".m">M Series</a></li>
                </ul>
            </nav>
            <div class="portfolio-centered">
                <div class="recentitems portfolio isotope" style="position: relative; overflow: hidden; height: 1518px;">
                    <div class="portfolio-item col-lg-4 col-md-6 col-sm-6 col-xs-12 pro isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                        <div class="he-wrap tpl6 market-item">
                            <img src="http://localhost/template/max/img/portfolio_01.jpg" alt="">
                            <div class="he-view he-view-show">
                                <div class="bg a0 fadeIn" data-animate="fadeIn">
                                    <h3 class="big a1 fadeInDown" data-animate="fadeInDown">Project Name Here</h3>
                                    <a data-rel="prettyPhoto" href="max/img/portfolio_01.jpg" class="dmbutton a2 bounceInLeft" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                                    <a href="#" class="dmbutton a2 bounceInRight" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                                    <div class="portfolio_category text-center a2 fadeIn" data-animate="fadeIn">
                                        <a href="#">web design</a>
                                    </div>
                                </div>
                                <!-- he bg -->
                            </div>
                            <!-- he view -->
                        </div>
                        <!-- he wrap -->

                    </div>
                    <!-- end col-12 -->

                    <div class="portfolio-item col-lg-4 col-md-6 col-sm-6 col-xs-12 m air isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(555px, 0px, 0px);">
                        <div class="he-wrap tpl6 market-item">
                            <img src="http://localhost/template/max/img/portfolio_02.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="big a1" data-animate="fadeInDown">Project Name Here</h3>
                                    <a data-rel="prettyPhoto" href="img/portfolio_02.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                                    <a href="#" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                                        <a href="#">web design</a>
                                    </div>
                                    <!-- portfolio_category -->
                                </div>
                                <!-- he bg -->
                            </div>
                            <!-- he view -->
                        </div>
                        <!-- he wrap -->

                    </div>
                    <!-- end col-12 -->

                    <div class="portfolio-item col-lg-4 col-md-6 col-sm-6 col-xs-12 air isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 506px, 0px);">
                        <div class="he-wrap tpl6 market-item">
                            <img src="http://localhost/template/max/img/portfolio_03.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="big a1" data-animate="fadeInDown">Project Name Here</h3>
                                    <a data-rel="prettyPhoto" href="img/portfolio_03.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                                    <a href="#" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                                        <a href="#">web design</a>
                                    </div>
                                    <!-- portfolio_category -->
                                </div>
                                <!-- he bg -->
                            </div>
                            <!-- he view -->
                        </div>
                        <!-- he wrap -->

                    </div>
                    <!-- end col-12 -->

                    <div class="portfolio-item col-lg-4 col-md-6 col-sm-6 col-xs-12 pro isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(555px, 506px, 0px);">
                        <div class="he-wrap tpl6 market-item">
                            <img src="http://localhost/template/max/img/portfolio_04.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="big a1" data-animate="fadeInDown">Project Name Here</h3>
                                    <a data-rel="prettyPhoto" href="img/portfolio_04.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                                    <a href="#" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                                        <a href="#">web design</a>
                                    </div>
                                    <!-- portfolio_category -->
                                </div>
                                <!-- he bg -->
                            </div>
                            <!-- he view -->
                        </div>
                        <!-- he wrap -->

                    </div>
                    <!-- end col-12 -->

                    <div class="portfolio-item col-lg-4 col-md-6 col-sm-6 col-xs-12 m isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1012px, 0px);">
                        <div class="he-wrap tpl6 market-item">
                            <img src="http://localhost/template/max/img/portfolio_05.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="big a1" data-animate="fadeInDown">Project Name Here</h3>
                                    <a data-rel="prettyPhoto" href="img/portfolio_05.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                                    <a href="#" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                                        <a href="#">web design</a>
                                    </div>
                                    <!-- portfolio_category -->
                                </div>
                                <!-- he bg -->
                            </div>
                            <!-- he view -->
                        </div>
                        <!-- he wrap -->

                    </div>
                    <!-- end col-12 -->

                    <div class="portfolio-item col-lg-4 col-md-6 col-sm-6 col-xs-12 m isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(555px, 1012px, 0px);">
                        <div class="he-wrap tpl6 market-item">
                            <img src="http://localhost/template/max/img/portfolio_06.jpg" alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="big a1" data-animate="fadeInDown">Project Name Here</h3>
                                    <a data-rel="prettyPhoto" href="img/portfolio_06.jpg" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search"></i></a>
                                    <a href="#" class="dmbutton a2" data-animate="bounceInRight"><i class="fa fa-link"></i></a>
                                    <div class="portfolio_category text-center a2" data-animate="fadeIn">
                                        <a href="#">web design</a>
                                    </div>
                                    <!-- portfolio_category -->
                                </div>
                                <!-- he bg -->
                            </div>
                            <!-- he view -->
                        </div>
                        <!-- he wrap -->
                    </div>
                    <!-- end col-12 -->

                </div>
                <!-- portfolio -->
            </div>
            <!-- portfolio container -->
            <div class="divider"></div>
        </div>
        <!-- end container -->
    </div>
</section>
<section class="section2">
    <div class="container">
        <div class="message text-center">
            <h2 class="big-title">WELCOME TO SPK <span>MACBOOK BEKAS</span></h2>
            <p class="small-title">"Simple, Inovatif and The Best Solution"</p>
            <a class="button large" href="<?= Url::to(['site/about']) ?>">ABOUT</a>
            <a class=" dmbutton large" href="https://api.whatsapp.com/send?phone=6282347626103&text=Silahkan Kirim Pesan Anda" target="_blank">CONTACT US</a>
        </div>
    </div>
</section>