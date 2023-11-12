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
            <!-- <div class="col-lg-12">
                <?php if (Yii::$app->session->hasFlash('success')) : ?>
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Success!</h4>
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>
            </div> -->

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
                            <div class="panel-heading" style="padding-left: 20px; padding-top: 30px; padding-bottom: 10px">
                                <?= Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']) ?>
                                <?= Html::a('', ['delete', 'id' => $model->id], [
                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </div>
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
                                                    return Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']);
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
                                                'attribute' =>   'tahun_rilis',
                                                // 'format' => 'date',
                                                // 'type' => DetailView::INPUT_DATE,
                                                // 'widgetOptions' => [
                                                //     'pluginOptions' => ['format' => 'yyyy-mm-dd']
                                                // ],
                                                // 'valueColOptions' => ['style' => 'width:30%']
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
                                                'value' => $model->prosesors->jenisProsesor,
                                                // 'value' => function ($model) {
                                                //     return $model->prosesors->jenisProsesor;
                                                // }
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
                                                'value' => $model->layar->jenis,

                                            ],
                                            [
                                                'attribute'  => 'id_penyimpanan',
                                                'value' => $model->penyimpanan->jenis,

                                            ],
                                            [
                                                'attribute'  => 'get_warna',
                                                'value' => $model->warna->warna,

                                            ],
                                            [
                                                'attribute'  => 'get_daya',
                                                'value' => $model->daya->informasi_baterai,

                                            ],
                                            [
                                                'label' => 'Wifi',
                                                'attribute'  => 'get_nirkabel',
                                                'value' => $model->nirkabel->wifi,

                                            ],
                                            [
                                                'label' => 'Bluetooth',
                                                'attribute'  => 'get_nirkabel',
                                                'value' => $model->nirkabel->bluetooth,

                                            ],
                                            [
                                                'label' => 'Panjang',
                                                'attribute'  => 'get_ukuranberat',
                                                'value' => $model->ukuranberat->panjang,
                                                // 'value' => function ($model) {
                                                //     return $model->ukuranberat->panjang;
                                                // }
                                            ],
                                            [
                                                'label' => 'Lebar',
                                                'attribute'  => 'get_ukuranberat',
                                                'value' => $model->ukuranberat->lebar,
                                                // 'value' => function ($model) {
                                                //     return $model->ukuranberat->lebar;
                                                // }
                                            ],
                                            [
                                                'label' => 'Tinggi',
                                                'attribute'  => 'get_ukuranberat',
                                                'value' => $model->ukuranberat->tinggi,
                                                // 'value' => function ($model) {
                                                //     return $model->ukuranberat->tinggi;
                                                // }
                                            ],
                                            [
                                                'label' => 'Berat',
                                                'attribute'  => 'get_ukuranberat',
                                                'value' => $model->ukuranberat->berat,
                                                // 'value' => function ($model) {
                                                //     return $model->ukuranberat->berat;
                                                // }
                                            ],
                                            [
                                                'attribute' => 'get_kamera',
                                                'value' => $model->kameras->kamera,
                                                // 'value' => function ($model) {
                                                //     return $model->kameras->kamera;
                                                // }
                                            ],
                                            [
                                                'attribute' => 'get_builtinApps',
                                                'value' => $model->builtinApps->builtinApp,
                                                // 'value' => function ($model) {
                                                //     return $model->builtinApps->builtinApp;
                                                // }
                                            ],
                                            [
                                                'attribute' => 'get_audio',
                                                'value' => $model->audios->audio,
                                                // 'value' => function ($model) {
                                                //     return $model->audios->audio;
                                                // }
                                            ],
                                            [
                                                'attribute' =>  'get_koneksiekspansi',
                                                'value' => $model->koneksiekspansi->koneksiEkspansi,
                                                // 'value' => function ($model) {
                                                //     return $model->koneksiekspansi->koneksiEkspansi;
                                                // }
                                            ],
                                            [
                                                'attribute' =>  'get_informasi_ram',
                                                'value' => $model->ram->ram,
                                                // 'value' => function ($model) {
                                                //     return $model->ram->ram;
                                                // }
                                            ],
                                            [
                                                'attribute' =>  'get_informasi_vga',
                                                'value' => $model->vga->vga,
                                                // 'value' => function ($model) {
                                                //     return $model->vga->vga;
                                                // }
                                            ],
                                            [
                                                'attribute' => 'harga',
                                                'value' => $model->harga,
                                            ],

                                            'baterai',
                                            //'ket',
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