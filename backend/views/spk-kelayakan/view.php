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
                        <h4 class="page-title">View SPK</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['spk-kelayakan/index']) ?>">Panel SPK</a>
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
                            <?= Html::a('Update', ['update', 'id_kelayakan' => $model->id_kelayakan], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_kelayakan' => $model->id_kelayakan], [
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
                                [
                                    'attribute' => 'get_produk',
                                    'label' => 'Nama Produk',
                                    'value' => function ($model) {
                                        return $model->produk->nama_produk;
                                    }
                                ],
                                [
                                    'attribute' => 'get_produk',
                                    'label' => 'Toko',
                                    'value' => function ($model) {
                                        return $model->produk->user->username;
                                    }
                                ],
                                [
                                    'label' => 'Photo',
                                    'format' => 'raw',
                                    'value' => function ($model) {
                                        return Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']);
                                    }
                                ],
                                'kode_produk',
                                'get_produk',
                                'dataRKetahanan',
                                'dataRKeamanan',
                                'dataRKondisi',
                                'dataRPerforma',
                                'RsquareKetahanan',
                                'RsquareKeamanan',
                                'RsquareKondisi',
                                'RsquarePerforma',
                                'dataFKetahanan',
                                'dataFKeamanan',
                                'dataFKondisi',
                                'dataFPerforma',
                                'T_cicleCount',
                                'T_kapasitasPengisian',
                                'T_noSeri',
                                'T_garansi',
                                'T_ram',
                                'T_vga',
                                'T_presesor',
                                'T_storage',
                                'T_layar',
                                'T_keyboard',
                                'T_tracpad',
                                'T_audio',
                                'T_kamera',
                                'T_koneksi',
                                'T_port',
                                'id_kelayakan',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>