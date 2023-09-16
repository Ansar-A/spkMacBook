<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;


/** @var yii\web\View $this */
/** @var common\models\JenisProduk $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Jenis Produk</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['jenis-produk/index']) ?>">Panel Jenis Produk</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="jenis-produk-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'jenis',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>