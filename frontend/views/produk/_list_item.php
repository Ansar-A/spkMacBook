<?php


use frontend\controllers\SiteController;
use yii\helpers\Url;
?>
<div class="portfolio-item col-lg-4 col-sm-2 mockups">
    <div class="he-wrap tpl6 market-item">
        <img class="lazyOwl" alt="" src="<?= Url::to('@web/' . $model->photo) ?>" style="display: block; opacity: 1; transition-property: all; transition-duration: 0s; transition-timing-function: ease;">
        <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown"><?php echo $model->nama_produk ?></h3>
                <a href="<?= Url::to(['detail-produk', 'id' => $model->id]) ?>" class="dmbutton a2" data-animate="fadeIn">Details</a>
                <!-- <a href="checkout.html" class="dmbutton a2" data-animate="fadeIn">Like</a> -->
                <div class="rating text-center a2" data-animate="fadeIn">
                    <?php echo 'Rp ' . $model->harga ?>
                </div>
            </div>
        </div>
    </div>
</div>