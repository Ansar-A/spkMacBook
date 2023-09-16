<?php


use backend\controllers\SiteController;
use yii\helpers\Url;
?>
<div class="col-sm-12">
    <div class="product-right-info">
        <div class="row">
            <div class="col-sm-6">
                <h6><span class="label label-info m-l-5">New</span><b> Chipset</b></h6>
                <h4 class="m-t-20" style="padding-left: 5px;margin-top: 0px; margin-bottom: 0px;">
                    <b>
                        <?php echo $model->ketKomponent->judul ?>
                    </b>
                </h4>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo Url::to('@web/' . $model->ketKomponent->photo) ?>" class="thumb-lg img-rounded img-thumbnail" alt="img">
            </div>
        </div>
        <hr>
        <h5 class="font-600" style="padding-left: 5px;">Chipset Description</h5>
        <p class="text-muted" style="padding-left: 5px;"><?php echo $model->ketKomponent->ket_jenisProduk ?></p>
        <div class="m-t-30 text-center">
            <a href="<?php echo $model->ketKomponent->link ?>" target="_blank" class="btn btn-info waves-effect waves-light btn-sm">
                <span class="btn-label"><i class="fa fa-info"></i>
                </span>More Info</a>
        </div>
    </div>
</div>