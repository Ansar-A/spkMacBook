<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */

$this->title = $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Detail Produk</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['detail-produk/index']) ?>">Panel Detail Produk</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>

            <div class="col-sm-12">
                <div class="card-box">
                    <div class="detail-produk-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_detail' => $model->id_detail], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_detail' => $model->id_detail], [
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
                                'id_detail',
                                'ketahanan',
                                'performa',
                                'kondisi',
                                'keamanan',
                                'get_spk',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>