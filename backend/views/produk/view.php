<?php

use yii\helpers\Html;
use yii\helpers\Url;
// use kartik\detail\DetailView;
use yii\widgets\DetailView;
use yii2mod\alert\AlertAsset;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
AlertAsset::register($this);
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
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="panel panel-border panel-custom">
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark">
                        </h3>
                        <div class="clearfix"></div>
                    </div>

                    <div id="bg-default" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="portlet-body">
                            <?php if (\Yii::$app->user->can('Administrator')) : ?>
                            <?php else : ?>
                                <div class="panel-heading" style="padding-left: 20px; padding-top: 30px; padding-bottom: 10px">
                                    <?= Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']) ?>
                                    <?= Html::a('', ['delete', 'id' => $model->id], [
                                        'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                        'data' => [
                                            'confirm' => 'Yakin untuk hapus data ini?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </div>
                            <?php endif ?>

                            <div class="panel-body">
                                <div class="produk-view">
                                    <?= DetailView::widget([
                                        'model' => $model,
                                        // 'options' => ['class' => 'table m-0'],
                                        // 'condensed' => true,
                                        // 'hover' => true,
                                        // 'mode' => DetailView::MODE_VIEW,
                                        // 'panel' => [
                                        //     'heading' => 'ID MacBook ' . $model->id,
                                        //     'type' => DetailView::TYPE_DARK,
                                        // ],
                                        'attributes' => [
                                            'id',
                                            'nama_produk',
                                            [
                                                'label' => 'Photo',
                                                'format' => 'raw',
                                                'value' => function ($model) {
                                                    return Html::img('@web/' . $model->photo, ['style' => 'width:150px;', 'class' => 'img-responsive img-rounded']);
                                                }
                                            ],

                                            [
                                                'attribute' => 'id_servicer',
                                                'value' => $model->user->username,
                                                // 'value' => function ($model) {
                                                //     return $model->user->username;
                                                // }
                                            ],

                                            [
                                                'attribute' => 'id_jenis',
                                                'value' => $model->jenis->jenis,
                                                // 'value' => function ($model) {
                                                //     return $model->jenis->jenis;
                                                // }
                                            ],
                                            [
                                                'attribute' => 'id_prosesor',

                                            ],
                                            [
                                                'attribute'  => 'id_so',
                                                'value' => $model->so->jenis,
                                                // 'value' => function ($model) {
                                                //     return $model->so->jenis;
                                                // }
                                            ],
                                            [
                                                'attribute'  => 'id_layar',
                                            ],
                                            [
                                                'attribute'  => 'id_penyimpanan',
                                            ],
                                            [
                                                'attribute'  => 'get_warna',
                                                'value' => $model->warna->warna,

                                            ],
                                            [
                                                'attribute'  => 'get_daya',
                                            ],
                                            [
                                                'attribute'  => 'get_nirkabel',
                                            ],

                                            [
                                                'attribute' => 'get_kamera',
                                            ],
                                            [
                                                'attribute' => 'get_builtinApps',
                                            ],
                                            [
                                                'attribute' => 'get_audio',
                                            ],
                                            [
                                                'attribute' =>  'get_koneksiekspansi',
                                            ],
                                            [
                                                'attribute' =>  'get_informasi_ram',
                                            ],
                                            [
                                                'attribute' =>  'get_informasi_vga',
                                            ],
                                            [
                                                'attribute' => 'harga',
                                                'value' => $model->harga,
                                            ],
                                            'tinggi',
                                            'berat',
                                            'panjang',
                                            'lebar',
                                            'baterai',
                                            'ket',
                                            'status_produk'
                                        ],
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>