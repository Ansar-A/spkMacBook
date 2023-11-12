<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */

$this->title = $model->id_kelayakan;
$this->params['breadcrumbs'][] = ['label' => 'Spk Kelayakans', 'url' => ['index']];
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
                        <a href="<?= Url::to(['spk-kelayakan/index']) ?>">SPK Kelayakan</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>

            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="spk-kelayakan-view">
                        <p>
                            <?= Html::a('', ['update', 'id_kelayakan' => $model->id_kelayakan], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']) ?>
                            <?= Html::a('', ['delete', 'id_kelayakan' => $model->id_kelayakan], [
                                'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                'data' => [
                                    'confirm' => 'Yakin untuk menghapus item ini?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'produk.nama_produk',
                                'produk.user.username',
                                // [
                                //     'attribute' => 'get_produk',
                                //     'label' => 'Nama Produk',
                                //     'value' => function ($model) {
                                //         return $model->produk->nama_produk;
                                //     }
                                // ],
                                // [
                                //     'attribute' => 'get_produk',
                                //     'label' => 'Toko',
                                //     'value' => function ($model) {
                                //         return $model->produk->user->username;
                                //     }
                                // ],
                                // [
                                //     'label' => 'Photo',
                                //     'format' => 'raw',
                                //     'value' => function ($model) {
                                //         return Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']);
                                //     }
                                // ],
                                // 'kode_produk',
                                // 'get_produk',
                                [
                                    'attribute' => 'dataR',
                                    'label' => 'R Square'
                                ],
                                [
                                    'attribute' => 'Rsquare',
                                    'label' => 'Adjusted R Square'
                                ],
                                [
                                    'attribute' => 'dataF',
                                    'label' => 'F'
                                ],

                                'T_ketahanan',
                                'T_keamanan',
                                'T_kondisi',
                                'T_performa',
                                'id_kelayakan',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>