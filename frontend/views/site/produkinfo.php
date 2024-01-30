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
<section class="post-wrapper-top">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="breadcrumb">
                <li><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                <li>Single Product</li>
            </ul>
            <h2>SINGLE PRODUCT</h2>
        </div>
    </div>
</section>
<section class="section1">
    <div class="container clearfix">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item_image">
                            <img class="img-responsive aligncenter" src="<?= Url::to('@web/' . $model->likeProduk->kelayakan->produk->photo) ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="theme_details">
                            <div class="item_price">
                                <h3><span><small>Rp. </small><?php echo $model->likeProduk->kelayakan->produk->harga ?></span></h3>
                            </div>
                            <!-- item_price -->
                            <hr>
                            <div class="buttons">
                                <a class="button btn-block large" href="https://wa.me/<?php echo $model->likeProduk->kelayakan->produk->user->hp ?>">Contact Toko</a>
                                <!-- <a class="button btn-block large" href="#"><i class="fa fa-download"></i> BUY NOW</a> -->
                            </div>
                            <div class="rating text-center">
                                <!-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i> -->
                                <p><?php echo $model->likeProduk->kelayakan->produk->user->username ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="portfolio_details">
                    <div class="details_section">
                        <h3><?php echo $model->likeProduk->kelayakan->produk->nama_produk ?></h3>

                        <hr>
                        <ul>
                            <li class="version">Sistem Operasi : <span><?php echo $model->likeProduk->kelayakan->produk->so->jenis ?></span></li>
                            <li class="version">Storage : <span><?php echo $model->likeProduk->kelayakan->produk->id_penyimpanan ?></span></li>
                            <li class="version">RAM : <span><?php echo $model->likeProduk->kelayakan->produk->get_informasi_ram ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="theme_details" style="padding-bottom: 0px;">
                    <div class="details_section">
                        <h3>Item Details</h3>
                        <ul>
                            <li class="version">Size: <span><?php echo $model->likeProduk->kelayakan->produk->tinggi ?> X <?php echo $model->likeProduk->kelayakan->produk->tinggi ?> X <?php echo $model->likeProduk->kelayakan->produk->panjang ?> X <?php echo $model->likeProduk->kelayakan->produk->berat ?></span></li>
                            <li class="designer">Sistem Operasi: <span><?php echo $model->likeProduk->kelayakan->produk->so->jenis ?></span></li>
                            <li class="designer">Warna: <span><?php echo $model->likeProduk->kelayakan->produk->warna->warna ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>