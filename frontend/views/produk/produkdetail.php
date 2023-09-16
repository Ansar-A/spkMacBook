<?php

/** @var yii\web\View $this */


use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<!-- <section class="post-wrapper-top">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="breadcrumb">
                <li><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                <li><a href="<?= Url::to(['produk/index']) ?>">Find your MacBook</a></li>
                <li>Single Product</li>
            </ul>
            <h2>DETAIL PRODUCT</h2>
        </div>
    </div>
</section> -->

<section class="section1">
    <div class="container clearfix">
        <div class="row">
            <div class="content pull-right col-lg-8 col-md-8 col-sm-8 col-xs-12 clearfix" style="padding-top: 0px;">
                <article class="blog-wrap text-center" style="padding-top: 0px;">
                    <div class="blog-media">
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="<?= Url::to('@web/' . $model->photo) ?>" alt="">
                                </div>
                                <!-- end item -->
                                <div class="item">
                                    <img src="<?= Url::to('@web/' . $model->photo) ?>" alt="">
                                </div>
                                <!-- end item -->
                                <div class="item active">
                                    <img src="<?= Url::to('@web/' . $model->photo) ?>" alt="">
                                </div>
                                <!-- -- end item ---->
                            </div>
                            <!-- carousel inner -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                        <!-- end carousel -->
                    </div>
                </article>
            </div>
            <div id="sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-left: 15px;padding-right: 15px;">
                <div class="widget">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="left-sidebar.html#popular" data-toggle="tab" aria-expanded="false">Basic</a></li>
                            <li class=""><a href="left-sidebar.html#general" data-toggle="tab" aria-expanded="true">General</a></li>
                            <li class=""><a href="left-sidebar.html#recent" data-toggle="tab" aria-expanded="true"> Spesifik Teknis </a></li>
                            <li class=""><a href="left-sidebar.html#more" data-toggle="tab" aria-expanded="true"> More </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popular">
                                <div class="details_section">
                                    <h3><?php echo $model->nama_produk ?></h3>
                                    <p>MacBook merupakan komputer portable yang khusus dihadirkan oleh Apple degan sistem operasi MacOS</p>
                                    <hr>
                                    <ul>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <li class="">Rp. <span><?php echo $model->harga ?></span></li>
                                            </div>
                                            <div class="col-sm-6 text-right" style="padding-right:25px">
                                                <li class="">Stok : <span><?php echo $model->stock ?></span></li>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <hr>
                                <p class="text-center"><a href="#" type="button" class="btn btn-inverse btn-custom btn-rounded waves-effect waves-light">Tingkat Kelayakan</a></p>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 text-center" style="padding-top: 15px;">
                                    <span class="chart" data-percent="<?php echo $model->detailProduk->spk->dataF ?>">
                                        <span class="percent">0%</span>
                                    </span>
                                    <hr>
                                    <!-- <h4 class="title">Tingkat Kelayakan</h4> -->
                                </div>

                            </div>
                            <div class="tab-pane" id="general">
                                <div class="details_section">
                                    <h3><?php echo $model->nama_produk ?></h3>
                                    <p>MacBook merupakan komputer portable yang khusus dihadirkan oleh Apple degan sistem operasi MacOS</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <li class="">Jenis MacBook : <?php echo $model->jenis->jenis ?></li>
                                                <li class="">Prosesor : <?php echo $model->prosesor->jenis ?></li>
                                                <li class="">Sistem Operasi : <?php echo $model->so->jenis ?></li>
                                                <li class="">Storage : <?php echo $model->penyimpanan->jenis ?></li>
                                                <li class="">Release Date : <?php echo $model->tahun_rilis ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="recent">
                                <div class="details_section">
                                    <h3><?php echo $model->nama_produk ?></h3>
                                    <p>MacBook merupakan komputer portable yang khusus dihadirkan oleh Apple degan sistem operasi MacOS</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <li class="">Layar : <?php echo $model->layar->jenis ?></li>
                                                <li class="">Warna : <?php echo $model->warna->warna ?></li>
                                                <li class="">Daya : <?php echo $model->daya->informasi_baterai ?></li>
                                                <li class="">Audio : <?php echo $model->audio->audio ?></li>
                                                <li class="">Kamera : <?php echo $model->kamera->kamera ?></li>
                                                <li class="">Wifi : <?php echo $model->nirkabel->wifi ?></li>
                                                <li class="">Bluetooth : <?php echo $model->nirkabel->bluetooth ?></li>
                                                <li class="">Tinggi : <?php echo $model->ukuranberat->tinggi ?></li>
                                                <li class="">Panjang : <?php echo $model->ukuranberat->panjang ?></li>
                                                <li class="">Lebar : <?php echo $model->ukuranberat->lebar ?></li>
                                                <li class="">Berat : <?php echo $model->ukuranberat->berat ?></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="more">
                                <div class="details_section">
                                    <h3><?php echo $model->nama_produk ?></h3>
                                    <p>MacBook merupakan komputer portable yang khusus dihadirkan oleh Apple degan sistem operasi MacOS</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <p>
                                                    <li class="">BuiltinApps : <?php echo $model->builtinApps->builtinApp ?></li>
                                                </p>
                                                <p>
                                                    <li class="">Koneksi Ekspansi : <?php echo $model->koneksiekspansi->koneksiEkspansi ?></li>
                                                </p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="clearfix"></div> -->
            <!-- <div class="divider"></div> -->
            <!-- <div class="container">
                <div class="general-title text-center">
                    <p>Our details information</p>
                    <hr>
                </div>
                <div class="skills text-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <span class="chart" data-percent="89">
                            <span class="percent">0%</span>
                        </span>
                        <h4 class=" title">Ketahanan</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <span class="chart" data-percent="90">
                            <span class="percent">0%</span>
                        </span>
                        <h4 class=" title">Performa</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <span class="chart" data-percent="88">
                            <span class="percent">0%</span>
                        </span>
                        <h4 class=" title">Kondisi</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <span class="chart" data-percent="79">
                            <span class="percent">0%</span>
                        </span>
                        <h4 class=" title">Keamanan</h4>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="portfolio_details">
                    <div class="details_section">
                        <h3>About Toko</h3>
                        <p><?php echo $model->user->tentang ?></p>
                        <hr>
                        <ul>
                            <li class="version">Toko: <span><a href="#"><?php echo $model->user->username ?></a></span></li>
                            <li class="update">Address: <span><a href="#"><?php echo $model->user->address ?></a></li>
                            <li class="release">Email: <span><?php echo $model->user->email ?></span></li>
                        </ul>
                    </div>
                    <!-- details section -->
                </div>
                <!-- theme details -->
            </div>
        </div>
    </div>
</section>