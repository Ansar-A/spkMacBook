<?php

/** @var yii\web\View $this */

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
                    <li class=""><a href="left-sidebar.html#kelayakan" data-toggle="tab" aria-expanded="true"> Tingkat Kelayakan </a></li>
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
                            </div>

                            <div class="content col-lg-5 col-md-5 col-sm-5 col-xs-12 clearfix" style="padding-top: 20px;padding-bottom: 0px;">
                                <div class="theme_details">
                                    <div class="item_price">
                                        <h3><span><small>Rp</small><?php echo $model->produk->harga ?></span></h3>
                                    </div>
                                    <hr>
                                    <div class="widget effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;margin-bottom: 0px;padding-bottom: 0px;padding-top: 14px;">
                                        <h3 class="title"><i class="fa fa-laptop"></i> <?php echo $model->produk->nama_produk ?></h3>
                                        <ul class="">
                                            <li><a><?php echo $model->produk->jenis->jenis ?></a></li>
                                            <li><a><?php echo  $model->produk->so->jenis ?></a></li>
                                            <li><a><?php echo $model->produk->prosesors->jenisProsesor ?></a></li>
                                            <li><a><?php echo $model->produk->penyimpanan->jenis ?></a></li>
                                            <li><a>Release Date <?php echo $model->produk->tahun_rilis ?></a></li>
                                        </ul>
                                    </div>
                                    <!-- buttons -->
                                    <hr>
                                    <div class="rating text-center">
                                        <i class="fa fa-home"></i>
                                        <i class="">&nbsp;</i>
                                        <i class="fa fa-instagram"></i>
                                        <i class="">&nbsp;</i>
                                        <i class="fa fa-facebook"></i>

                                        <p><?php echo $model->produk->user->username ?></p>
                                    </div>
                                    <!-- rating -->
                                </div>
                            </div>
                            <div class="row" style="padding-left: 20px;padding-right: 20px;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                        <h3 class="title"><i class="fa fa-laptop"></i> Detail Information</h3>
                                        <ul class="check">
                                            <li><a href="#">Warna <?php echo $model->produk->warna->warna ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->daya->informasi_baterai ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->kameras->kamera ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->nirkabel->wifi ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->nirkabel->bluetooth ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->ukuranberat->tinggi ?>, <?php echo $model->produk->ukuranberat->panjang ?>, <?php echo $model->produk->ukuranberat->lebar ?>, <?php echo $model->produk->ukuranberat->berat ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->builtinApps->builtinApp ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->koneksiekspansi->koneksiEkspansi ?></a></li>
                                            <li><a href="#"><?php echo $model->produk->audios->audio ?></a></li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kelayakan">
                        <div class="details_section">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 effect-slide-bottom in" data-effect="slide-bottom" style="transition: all 0.7s ease-in-out 0s;">
                                    <div class="custom-box">
                                        <div class="servicetitle">
                                            <h3>Ketahanan</h3>
                                            <hr>
                                        </div>
                                        <div class="icn-main-container">
                                            <span class="icn-container"><?php echo $model->dataRKetahanan ?></span>
                                        </div>
                                        <p>Tingkat Ketahanan</p>
                                        <ul class="pricing">
                                            <li><?php echo $model->produk->baterai ?> Cicle Count</li>
                                            <li><?php echo $model->produk->kapasitas_pengisian ?> Pengisian</li>
                                            <li><?php echo $model->RsquareKetahanan ?> R Square</li>
                                            <li><?php echo $model->dataFKetahanan ?> Data F</li>
                                            <li><?php echo $model->T_cicleCount ?> T Cicle Count</li>
                                            <li><?php echo $model->T_kapasitasPengisian ?> T Pengisian</li>
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
                                            <li><?php echo $model->produk->no_seri ?> (No Seri)</li>
                                            <li><?php echo $model->produk->garansi ?> Garansi</li>
                                            <li><?php echo $model->RsquareKeamanan ?> R Square</li>
                                            <li><?php echo $model->dataFKeamanan ?> Data F</li>
                                            <li><?php echo $model->T_noSeri ?> T No Seri</li>
                                            <li><?php echo $model->T_garansi ?> T Garansi</li>
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
                                            <span class="icn-container"><?php echo $model->dataRKondisi ?></span>
                                        </div>
                                        <p>Tingkat Kondisi</p>
                                        <ul class="pricing">
                                            <li><?php echo $model->produk->kondisi_layar ?> Kondisi Layar</li>
                                            <li><?php echo $model->produk->keyboard ?> Kondisi Keyboard</li>
                                            <li><?php echo $model->produk->tracpad ?> Kondisi Tracpad</li>
                                            <li><?php echo $model->produk->audio ?> Kondisi Audio</li>
                                            <li><?php echo $model->produk->kamera ?> Kondisi Kamera</li>
                                            <li><?php echo $model->produk->koneksi ?> Kondisi Koneksi</li>
                                            <li><?php echo $model->produk->kondisi_port ?> Kondisi Port</li>
                                            <li><?php echo $model->RsquareKondisi ?> R Square</li>
                                            <li><?php echo $model->dataFKondisi ?> Data F</li>
                                            <li><?php echo $model->T_layar ?> T Kondisi Layar</li>
                                            <li><?php echo $model->T_keyboard ?> T Kondisi Keyboard</li>
                                            <li><?php echo $model->T_tracpad ?> T Kondisi Tracpad</li>
                                            <li><?php echo $model->T_audio ?> T Kondisi Audio</li>
                                            <li><?php echo $model->T_kamera ?> T Kondisi Kamera</li>
                                            <li><?php echo $model->T_koneksi ?> T Kondisi Koneksi</li>
                                            <li><?php echo $model->T_port ?> T Kondisi Port</li>
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
                                            <span class="icn-container"><?php echo $model->dataRPerforma ?></span>
                                        </div>
                                        <p>Tingkat Performa</p>
                                        <ul class="pricing">
                                            <li><?php echo $model->produk->ram ?> RAM</li>
                                            <li><?php echo $model->produk->vga ?> VGA</li>
                                            <li><?php echo $model->produk->prosesor ?> Prosesor</li>
                                            <li><?php echo $model->produk->storage ?> Storage</li>
                                            <li><?php echo $model->RsquarePerforma ?> R Square</li>
                                            <li><?php echo $model->dataFPerforma ?> Data F</li>
                                            <li><?php echo $model->T_ram ?> T RAM</li>
                                            <li><?php echo $model->T_vga ?> T VGA</li>
                                            <li><?php echo $model->T_presesor ?> T Prosesor</li>
                                            <li><?php echo $model->T_storage ?> T Storage</li>
                                        </ul>
                                        <a class="btn btn-primary" href="#">More Info</a>
                                    </div>
                                    <!-- end custombox -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
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
            <!-- details section -->
        </div>
        <!-- theme details -->
    </div>
</section>