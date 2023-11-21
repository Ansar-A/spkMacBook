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
                    <li class="active"><a href="left-sidebar.html#popular" data-toggle="tab" aria-expanded="false">Basic</a></li>
                    <li class=""><a href="left-sidebar.html#kelayakan" data-toggle="tab" aria-expanded="true"> Toko </a></li>
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
                                </article>
                                <!-- detail information -->
                                <div class="row" style="padding-left: 20px;padding-right: 20px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="widget effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                            <h3 class="title"><i class="fa fa-laptop"></i> Detail Information</h3>
                                            <ul>
                                                <li class="version">Layar : <span><?php echo $model->produk->nama_produk ?></span></li>
                                                <li class="release">Warna : <span><?php echo $model->produk->warna->warna ?></span></li>
                                                <li class="designer">Daya : <span><?php echo $model->produk->daya->informasi_baterai ?></span></li>
                                                <li class="designer">Wifi : <span><?php echo $model->produk->nirkabel->wifi ?></span></li>
                                                <li class="designer">Bluetooth: <span><?php echo $model->produk->nirkabel->bluetooth ?></span></li>
                                                <li class="designer">Panjang : <span> <?php echo $model->produk->ukuranberat->panjang ?></span></li>
                                                <li class="designer">Lebar : <span><?php echo $model->produk->ukuranberat->lebar ?></span></li>
                                                <li class="designer">Berat : <span><?php echo $model->produk->ukuranberat->berat ?></span></li>
                                                <li class="designer">Tinggi : <span><?php echo $model->produk->ukuranberat->tinggi ?></span></li>
                                                <li class="designer">Kamera : <span><?php echo $model->produk->kameras->kamera ?></span></li>
                                                <li class="designer">Builtin App : <span><?php echo $model->produk->builtinApps->builtinApp ?></span></li>
                                                <li class="designer">Audio : <span><?php echo $model->produk->audios->audio ?></span></li>
                                                <li class="designer">Koneksi Ekspansi : <span><?php echo $model->produk->koneksiekspansi->koneksiEkspansi ?></span></li>
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
                                        <div class="stat f-container" style="height:120px">
                                            <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <i class="fa fa-laptop f1-4x"></i>
                                                <div class="milestone-counter">
                                                    <span class=""><?php echo $model->T_ketahanan ?></span>
                                                    <div class="">Ketahanan</div>
                                                </div>
                                            </div>
                                            <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <i class="fa fa-laptop f1-4x"></i>
                                                <div class="milestone-counter">
                                                    <span class=""><?php echo $model->T_keamanan ?></span>
                                                    <div class="">Keamanan</div>
                                                </div>
                                            </div>
                                            <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <i class="fa fa-laptop f1-4x"></i>
                                                <div class="milestone-counter">
                                                    <span class=""><?php echo $model->T_kondisi ?></span>
                                                    <div class="">Kondisi</div>
                                                </div>
                                            </div>
                                            <div class="f-element col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <i class="fa fa-laptop f1-4x"></i>
                                                <div class="milestone-counter">
                                                    <span class=""><?php echo $model->T_performa ?></span>
                                                    <div class="">Performa</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="f-element">
                                            <div class="milestone-counter">
                                                <span class="stat-count highlight"><?php echo $model->Rsquare ?></span>%
                                                <div class="milestone-details">Kelayakan</div>
                                            </div>
                                        </div>


                                        <ul>
                                            <li class="version">Nama Produk : <span><?php echo $model->produk->nama_produk ?></span></li>
                                            <li class="release">Harga : <span><small>Rp</small><?php echo $model->produk->harga ?></span></li>
                                            <li class="designer">Toko : <span><?php echo $model->produk->user->username ?></span></li>
                                            <li class="designer">Jenis MacBook : <span><?php echo  $model->produk->so->jenis ?></span></li>
                                            <li class="designer">Prosesor : <span><?php echo $model->produk->prosesors->jenisProsesor ?></span></li>
                                            <li class="designer">Sistem Operasi : <span><?php echo  $model->produk->so->jenis ?></span></li>
                                            <li class="designer">Penyimpanan : <span><?php echo $model->produk->penyimpanan->jenis ?></span></li>
                                            <li class="designer">No Seri : <span> <?php echo $model->produk->no_seri ?></span></li>
                                            <li class="designer">Garansi : <span> <?php echo $model->produk->garansi ?></span></li>
                                            <li class="designer">Tahun Rilis : <span><?php echo $model->produk->tahun_rilis ?></span></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane" id="kelayakan">
                        <div class="portfolio_details">
                            <div class="details_section">
                                <h3>About Toko</h3>
                                <p><?php echo $model->produk->user->tentang ?></p>
                                <hr>
                                <ul>
                                    <li class="version">Toko: <span><a href="#"><?php echo $model->produk->user->username ?></a></span></li>
                                    <li class="update">Address: <span><a href="#"><?php echo $model->produk->user->address ?></a></li>
                                    <li class="release">Email: <span><?php echo $model->produk->user->email ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="details_section">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                    <div class="custom-box">
                                        <div class="servicetitle">
                                            <h3>Ketahanan</h3>
                                            <hr>
                                        </div>
                                        <div class="icn-main-container">
                                            <span class="icn-container"></span>
                                        </div>
                                        <p>Tingkat Ketahanan</p>
                                        <ul class="pricing">
                                            <li><?php echo $model->produk->baterai ?> Cicle Count</li>
                                            <li><?php echo $model->produk->kapasitas_pengisian ?> Pengisian</li>
                                            <li><?php echo $model->Rsquare ?> R Square</li>
                                            <li><?php echo $model->dataF ?> Data F</li>
                                            <li><?php echo $model->T_keamanan ?> T Keamanan</li>
                                            <li><?php echo $model->T_ketahanan ?> T ketahanan</li>
                                            <li><?php echo $model->T_kondisi ?> T kondisi</li>
                                            <li><?php echo $model->T_performa ?> T performa</li>
                                        </ul>
                                        <a class="btn btn-primary" href="#">More Info</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                    <div class="custom-box">
                                        <div class="servicetitle">
                                            <h3>Keamanan</h3>
                                            <hr>
                                        </div>
                                        <div class="icn-main-container">
                                            <span class="icn-container">55</span>
                                        </div>
                                        <p>Tingkat Keamanan</p>
                                        <ul class="pricing">


                                        </ul>
                                        <a class="btn btn-primary" href="#">More Info</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                    <div class="custom-box">
                                        <div class="servicetitle">
                                            <h4>Kondisi</h4>
                                            <hr>
                                        </div>
                                        <div class="icn-main-container">
                                            <span class="icn-container"><?php echo $model->dataR ?></span>
                                        </div>
                                        <p>Tingkat Kondisi</p>
                                        <ul class="pricing">


                                        </ul>
                                        <a class="btn btn-primary" href="#">More Info</a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                    <div class="custom-box">
                                        <div class="servicetitle">
                                            <h4>Performa</h4>
                                            <hr>
                                        </div>
                                        <div class="icn-main-container">
                                            <span class="icn-container"><?php echo $model->dataR ?></span>
                                        </div>
                                        <p>Tingkat Performa</p>
                                        <ul class="pricing">


                                        </ul>
                                        <a class="btn btn-primary" href="#">More Info</a>
                                    </div>

                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>