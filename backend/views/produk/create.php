<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */

$this->title = 'Create Produk';
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['produk/index']) ?>"><i class="ti-apple"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['produk/index']) ?>">Data MacBook</a>
                    </li>
                    <li class="active">
                        SPK MacBook Bekas
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="produk-create">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>