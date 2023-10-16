<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group pull-right m-t-10">
                    <h6 class="text-dark">
                        <p><i class="fa fa-calendar"></i><span id="tanggalwaktu"></span></p>
                        <script>
                            var tw = new Date();
                            if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                            else(a = tw.getTime());
                            tw.setTime(a);
                            var tahun = tw.getFullYear();
                            var hari = tw.getDay();
                            var bulan = tw.getMonth();
                            var tanggal = tw.getDate();
                            var hariarray = new Array(" Minggu,", " Senin,", " Selasa,", " Rabu,", " Kamis,", " Jum'at,", " Sabtu,");
                            var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                            document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
                        </script>
                    </h6>
                </div>

                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">View MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['produk/index']) ?>">Panel MacBook</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="produk-view">
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
                            'options' => ['class' => 'table m-0'],
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
                                    'value' => function ($model) {
                                        return $model->user->username;
                                    }
                                ],
                                'tahun_rilis',
                                [
                                    'attribute' => 'id_jenis',
                                    'value' => function ($model) {
                                        return $model->jenis->jenis;
                                    }
                                ],
                                [
                                    'attribute' => 'id_prosesor',
                                    'value' => function ($model) {
                                        return $model->prosesors->jenisProsesor;
                                    }
                                ],
                                [
                                    'attribute'  => 'id_so',
                                    'value' => function ($model) {
                                        return $model->so->jenis;
                                    }
                                ],
                                [
                                    'attribute'  => 'id_layar',
                                    'value' => function ($model) {
                                        return $model->layar->jenis;
                                    }
                                ],
                                [
                                    'attribute'  => 'id_penyimpanan',
                                    'value' => function ($model) {
                                        return $model->penyimpanan->jenis;
                                    }
                                ],
                                [
                                    'attribute'  => 'get_warna',
                                    'value' => function ($model) {
                                        return $model->warna->warna;
                                    }
                                ],
                                [
                                    'attribute'  => 'get_daya',
                                    'value' => function ($model) {
                                        return $model->daya->informasi_baterai;
                                    }
                                ],
                                [
                                    'label' => 'Wifi',
                                    'attribute'  => 'get_nirkabel',
                                    'value' => function ($model) {
                                        return $model->nirkabel->wifi;
                                    }
                                ],
                                [
                                    'label' => 'Bluetooth',
                                    'attribute'  => 'get_nirkabel',
                                    'value' => function ($model) {
                                        return $model->nirkabel->bluetooth;
                                    }
                                ],
                                [
                                    'label' => 'Panjang',
                                    'attribute'  => 'get_ukuranberat',
                                    'value' => function ($model) {
                                        return $model->ukuranberat->panjang;
                                    }
                                ],
                                [
                                    'label' => 'Lebar',
                                    'attribute'  => 'get_ukuranberat',
                                    'value' => function ($model) {
                                        return $model->ukuranberat->lebar;
                                    }
                                ],
                                [
                                    'label' => 'Tinggi',
                                    'attribute'  => 'get_ukuranberat',
                                    'value' => function ($model) {
                                        return $model->ukuranberat->tinggi;
                                    }
                                ],
                                [
                                    'label' => 'Berat',
                                    'attribute'  => 'get_ukuranberat',
                                    'value' => function ($model) {
                                        return $model->ukuranberat->berat;
                                    }
                                ],
                                [
                                    'attribute' => 'get_kamera',
                                    'value' => function ($model) {
                                        return $model->kameras->kamera;
                                    }
                                ],
                                [
                                    'attribute' => 'get_builtinApps',
                                    'value' => function ($model) {
                                        return $model->builtinApps->builtinApp;
                                    }
                                ],
                                [
                                    'attribute' => 'get_audio',
                                    'value' => function ($model) {
                                        return $model->audios->audio;
                                    }
                                ],
                                [
                                    'attribute' =>  'get_koneksiekspansi',
                                    'value' => function ($model) {
                                        return $model->koneksiekspansi->koneksiEkspansi;
                                    }
                                ],
                                [
                                    'attribute' =>  'get_informasi_ram',
                                    'value' => function ($model) {
                                        return $model->ram->ram;
                                    }
                                ],
                                [
                                    'attribute' =>  'get_informasi_vga',
                                    'value' => function ($model) {
                                        return $model->vga->vga;
                                    }
                                ],
                                'harga',
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