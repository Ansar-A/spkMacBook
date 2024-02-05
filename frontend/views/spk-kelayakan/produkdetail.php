<?php

/** @var yii\web\View $this */

use common\models\LikeProduk;
use common\models\Produk;
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>

<section class="section1">
    <div class="container clearfix">
        <div class="general-title text-center">
            <p>DETAIL PRODUK</p>
            <hr>
        </div>
        <div class="widget">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="left-sidebar.html#popular" data-toggle="tab" aria-expanded="false">Detail Info Produk</a></li>

                    <li class=""><a href="left-sidebar.html#kelayakan" data-toggle="tab" aria-expanded="true"> Perhitungan </a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="popular">
                        <div class="row">
                            <div class="content pull-right col-lg-7 col-md-7 col-sm-7 col-xs-12 clearfix" style="padding-top: 0px; padding-bottom: 0px;">
                                <article class="blog-wrap text-center" style="padding-top: 0px;">
                                    <div class="blog-media">
                                        <div id="myCarousel" class="carousel slide">
                                            <div class="carousel-inner">
                                                <div class="item">
                                                    <img src="<?= Url::to('@web/' . $model->produk->photo) ?>" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="<?= Url::to('@web/' . $model->produk->photo) ?>" alt="">
                                                </div>
                                                <div class="item active">
                                                    <img src="<?= Url::to('@web/' . $model->produk->photo) ?>" alt="">
                                                </div>
                                            </div>

                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="icon-prev"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="icon-next"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <header class="page-header blog-title">
                                        <div class="author-wrap">
                                            <span class="inside">
                                                <a href="#"><img class="img-responsive" alt="" src="<?= Url::to('@web/' . $model->produk->user->photo) ?>"></a>
                                            </span>
                                        </div>
                                        <h3 class="general-title">Toko: <?php echo $model->produk->user->username ?></h3>
                                        <div class="post-meta">
                                            <p>
                                                <span class="sep"></span><a href="<?php echo 'https://api.whatsapp.com/send?phone=' . $model->produk->user->hp . '&text=Halo%20Saya%20Tertarik%20Dengan%20Produk%20Anda'; ?>" target="_blank">Contact Now</a>
                                                <span class="sep">/</span><a href="#"><?php echo $model->produk->user->fb ?></a>
                                                <span class="sep">/</span><a href="#"><?php echo $model->produk->user->email ?></a>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="post-desc">
                                        <p><?php echo $model->produk->user->tentang ?> </p>
                                        <a class="readmore" title=""><?php echo $model->produk->user->address ?></a>
                                    </div>
                                </article>
                                <!-- detail information -->
                                <div class="row" style="padding-left: 20px;padding-right: 20px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="widget effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                            <h3 class="title"><i class="fa fa-laptop"></i> Detail Information</h3>
                                            <ul>
                                                <li class="version">Layar : <span><?php echo $model->produk->nama_produk ?></span></li>
                                                <li class="release">Warna : <span><?php echo $model->produk->warna->warna ?></span></li>
                                                <li class="designer">Daya : <span><?php echo $model->produk->get_daya ?></span></li>
                                                <li class="designer">Wifi : <span><?php echo $model->produk->get_nirkabel ?></span></li>
                                                <li class="designer">Tinggi : <span> <?php echo $model->produk->tinggi ?></span></li>
                                                <li class="designer">Panjang : <span> <?php echo $model->produk->panjang ?></span></li>
                                                <li class="designer">Lebar : <span> <?php echo $model->produk->lebar ?></span></li>
                                                <li class="designer">Berat : <span> <?php echo $model->produk->berat ?></span></li>
                                                <li class="designer">Kamera : <span><?php echo $model->produk->get_kamera ?></span></li>
                                                <li class="designer">Builtin App : <span><?php echo $model->produk->get_builtinApps ?></span></li>
                                                <li class="designer">Audio : <span><?php echo $model->produk->get_audio ?></span></li>
                                                <li class="designer">Koneksi Ekspansi : <span><?php echo $model->produk->get_koneksiekspansi ?></span></li>
                                                <li class="designer">Baterai : <span><?php echo $model->produk->baterai ?></span></li>
                                                <li class="designer">Kapasitas Pengisian : <span><?php echo $model->produk->kapasitas_pengisian ?></span></li>
                                            </ul>
                                            <hr>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="content col-lg-5 col-md-5 col-sm-5 col-xs-12 clearfix" style="padding-top: 20px;padding-bottom: 0px;">
                                <div class="theme_details">
                                    <div class="details_section">
                                        <h3>Item Details</h3>

                                        <div class="f-element">
                                            <div class="milestone-counter">
                                                <span class="stat-count highlight"><?php echo $model->dataR ?></span>%
                                                <div class="milestone-details">Tingkat Kelayakan</div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="version">Nama Produk : <span><?php echo $model->produk->nama_produk ?></span></li>
                                            <li class="release">Harga : <span><small>Rp</small><?php echo $model->produk->harga ?></span></li>
                                            <li class="designer">Toko : <span><?php echo $model->produk->user->username ?></span></li>
                                            <li class="designer">Jenis MacBook : <span><?php echo  $model->produk->so->jenis ?></span></li>
                                            <li class="designer">Prosesor : <span><?php echo $model->produk->id_prosesor ?></span></li>
                                            <li class="designer">Sistem Operasi : <span><?php echo  $model->produk->so->jenis ?></span></li>
                                            <li class="designer">Penyimpanan : <span><?php echo $model->produk->id_penyimpanan ?></span></li>
                                            <li class="designer">No Seri : <span> <?php echo $model->produk->no_seri ?></span></li>
                                            <li class="designer">Garansi : <span> <?php echo $model->produk->garansi ?></span></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane" id="kelayakan">
                        <div class="portfolio_details">
                            <div class="col-lg-12 col-md-8 col-sm-12 first">
                                <div class="details_section">
                                    <div class="testimonial">
                                        <h3>About Toko</h3>
                                        <!-- <img data-effect="slide-bottom" class="alignleft img-circle effect-slide-bottom in" src="<?php echo Url::to(['@web/' . $model->produk->user->photo])  ?>" alt="" style="transition: all 0.7s ease-in-out 0s;"> -->
                                        <p><?php echo $model->produk->user->tentang ?> </p>
                                        <div class="testimonial-meta">
                                            <h4><?php echo $model->produk->user->username ?> <small><a><?php echo $model->produk->user->email ?></a></small></h4>
                                            <p>Address: <span><a href="#"><?php echo $model->produk->user->address ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>