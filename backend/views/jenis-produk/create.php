<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisProduk $model */

$this->title = 'Create Jenis Produk';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-box">
                    <div class="jenis-produk-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget-panel widget-style-2 bg-white" style="height:168px">
                    <i class="md md-add-shopping-cart text-pink"></i>
                    <h2 class="m-0 text-dark counter font-600"><span data-plugin="counterup">2541</span></h2>
                    <div class="text-muted m-t-5">Sales</div>
                </div>
            </div>
        </div>
    </div>
</div>