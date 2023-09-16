<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */

$this->title = 'Update Detail Produk: ' . $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail, 'url' => ['view', 'id_detail' => $model->id_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="content">
    <div class="container">
        <div class="col-sm-12">

            <ol class="breadcrumb">
                <li>
                    <h4 class="page-title">Detail Produk</h4>
                </li>
                <li>
                    <a href="<?= Url::to(['detail-produk/index']) ?>">Panel Detail Produk</a>
                </li>
                <li class="active">
                    Update
                </li>
            </ol>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="detail-produk-update">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
