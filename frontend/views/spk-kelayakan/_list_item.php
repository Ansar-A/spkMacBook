<?php

use common\models\LikeProduk;
use yii\helpers\Url;

?>
<div class="portfolio-item col-lg-4 col-sm-2 mockups">
    <div class="he-wrap tpl6 market-item">
        <img class="img-rounded" alt="" src="<?= Url::to('@web/' . $model->produk->photo) ?>" style="display: block; opacity: 1; transition-property: all; transition-duration: 0s; transition-timing-function: ease; max-width: 100%; height: auto; ">
        <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown">
                    <?php echo $model->produk->nama_produk ?>
                </h3>
                <?php if (Yii::$app->user->isGuest) : ?>
                    <a href="<?= Url::to(['site/login']) ?>" class="dmbutton a2" data-animate="fadeIn">Details</a>
                <?php elseif (LikeProduk::find()->where(['user_id' => Yii::$app->user->identity->id, 'produk_id' => $model->id_kelayakan])->exists()) : ?>
                    <a href="<?= Url::to(['detail-produk', 'id_kelayakan' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn">Details</a>
                    <a href="<?= Yii::$app->urlManager->createUrl(['like-produk/unlike', 'produk_id' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn">Unlike</a>
                <?php else : ?>
                    <a href="<?= Url::to(['detail-produk', 'id_kelayakan' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn">Details</a>
                    <a href="<?= Yii::$app->urlManager->createUrl(['like-produk/like', 'produk_id' => $model->id_kelayakan]) ?>" class="dmbutton a2" data-animate="fadeIn"><i class="fa fa-heart"></i></a>
                <?php endif; ?>

                <div class="rating text-center a2" data-animate="fadeIn">
                    <?php
                    $starsCount = 0;
                    $dataR = $model->dataR;
                    if ($dataR >= 90) {
                        $starsCount = 5;
                    } elseif ($dataR >= 80) {
                        $starsCount = 4;
                    } elseif ($dataR >= 70) {
                        $starsCount = 3;
                    } elseif ($dataR >= 50) {
                        $starsCount = 2;
                    } elseif ($dataR < 49) {
                        $starsCount = 1;
                    }

                    for ($i = 0; $i < 5; $i++) {
                        if ($i < $starsCount) {
                            echo '<i class="fa fa-star"></i>';
                        } else {
                            echo '<i class="fa fa-star-o"></i>';
                        }
                    }
                    ?>
                </div>
                <div class="a2" data-animate="fadeIn">
                    <p style="color: white;"><?php echo 'Rp ' . number_format($model->produk->harga, 0, ',', '.') ?></p>
                </div>
            </div>
        </div>

    </div>
</div>