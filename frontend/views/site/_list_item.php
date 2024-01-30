<?php

use common\models\LikeProduk;
use yii\helpers\Url;
?>
<div class="portfolio-item col-lg-4 col-md-4 col-sm-4 col-xs-12 mockups isotope-item" style=" left: 0px; top: 0px; ">
    <div class="he-wrap tpl6 market-item" style="height: auto;">
        <img src="<?= Url::to('@web/' . $model->likeProduk->kelayakan->produk->photo) ?>" alt="">
        <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                <h5 class="text-center a2" data-animate="fadeInDown" style="padding-top: 40px; color:white;"><?php echo $model->likeProduk->kelayakan->produk->nama_produk ?></h5>
                <a data-rel="prettyPhoto" href="<?= Url::to('@web/' . $model->likeProduk->kelayakan->produk->photo) ?>" class="dmbutton a2" data-animate="bounceInLeft"><i class="fa fa-search-plus"></i></a>
                <a href="<?= Url::to(['info-produk', 'id' => $model->id]) ?>" class="dmbutton a2" data-animate="bounceInRight">more</a>
            </div>
        </div>
    </div>
</div>