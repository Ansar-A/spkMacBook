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
            <div class="col-md-12">
                <div class="card-box">
                    <div class="jenis-produk-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>