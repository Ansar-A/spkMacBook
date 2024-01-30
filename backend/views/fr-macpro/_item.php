<?php

use common\models\SpkKelayakan;

$count = SpkKelayakan::find()
    ->select(['get_produk', 'COUNT(*) as count'])
    ->groupBy('get_produk')
    ->asArray()
    ->all();
?>
<div class="col-md-6 col-lg-3">
    <div class="widget-bg-color-icon card-box">
        <div class="bg-icon bg-icon-info pull-left">
            <i class="md md-attach-money text-info"></i>
        </div>
        <?php foreach ($count as $product) : ?>
            <div class="text-right">
                <p class="text-muted"><?= $product['get_produk'] ?></p>
                <h3 class="text-dark"><b class="counter"><?= $product['count'] ?></b></h3>
            </div>
        <?php endforeach; ?>

        <div class="clearfix"></div>
    </div>
</div>