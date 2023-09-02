<?php


use frontend\controllers\SiteController;
use yii\helpers\Url;
?>
<div class="col-sm-6 col-lg-3 col-md-4">
    <div class="product-list-box thumb" style="margin-top:8px">
        <a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
            <img src="<?= Url::to('@web/' . $model->photo) ?>" class="thumb-img" alt="work-thumbnail">
        </a>
        <div class="product-action">
            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
        </div>
        <div class="detail">
            <h5 class="m-t-0 text-center"><a href="" class="text-dark"><b><?php echo $model->nama_produk ?></b></a> </h5>
            <div class="rating text-center">
                <h5><span class="badge badge-info">Stock: <?php echo  $model->stock ?></span></h5>
            </div>
            <h6 class="m-0 text-center"> <span class="text-dark"><?php echo 'Rp ' . $model->harga ?></span></h6>
        </div>
    </div>
</div>