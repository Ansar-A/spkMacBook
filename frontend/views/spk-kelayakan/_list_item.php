<?php

use common\models\LikeProduk;
use yii\helpers\Url;
?>
<div class="portfolio-item col-lg-4 col-sm-2 mockups">
    <div class="he-wrap tpl6 market-item">
        <img class="lazyOwl" alt="" src="<?= Url::to('@web/' . $model->produk->photo) ?>" style="display: block; opacity: 1; transition-property: all; transition-duration: 0s; transition-timing-function: ease;">
        <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">
                    <?php echo $model->produk->nama_produk ?>
                </h3>
                <a href="<?= Url::to(['detail-produk', 'id_kelayakan' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn">Details</a>
                <?php if (Yii::$app->user->isGuest) : ?>

                <?php elseif (LikeProduk::find()->where(['user_id' => Yii::$app->user->identity->id, 'produk_id' => $model->id_kelayakan])->exists()) : ?>
                    <a href="<?= Yii::$app->urlManager->createUrl(['like-produk/unlike', 'produk_id' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn">Unlike</a>
                <?php else : ?>
                    <a href="<?= Yii::$app->urlManager->createUrl(['like-produk/like', 'produk_id' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn">Like</a>
                <?php endif; ?>
                <div class="text-white  a2" data-animate="fadeIn">
                    <?php echo 'Rp ' . $model->produk->harga ?>
                </div>
            </div>
        </div>
    </div>
</div>