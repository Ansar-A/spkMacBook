<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Like Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
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
                        <a href="<?= Url::to(['like-produk/index']) ?>"><i class="icon-people"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="like-produk-view">
                        <!-- <p>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p> -->

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                [
                                    'label' => 'Toko',
                                    'attribute' => 'produk_id',
                                    'value' => function ($model) {
                                        return $model->kelayakan->produk->user->username;
                                    }
                                ],
                                [
                                    'attribute' => 'produk_id',
                                    'value' => function ($model) {
                                        return $model->kelayakan->produk->nama_produk;
                                    }
                                ],
                                [
                                    'attribute' => 'user_id',
                                    'value' => function ($model) {
                                        return $model->pengguna->username;
                                    }
                                ],
                                'created_at',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>