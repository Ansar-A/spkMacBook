<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produk-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'nama_produk',
            'id_servicer',
            'tahun_rilis',
            'id_jenis',
            'id_prosesor',
            'id_so',
            'id_layar',
            'id_penyimpanan',
            'get_warna',
            'get_daya',
            'get_nirkabel',
            'get_ukuranberat',
            'get_kamera',
            'get_builtinApps',
            'get_audio',
            'get_koneksiekspansi',
            'photo',
            'harga',
            'get_detaill',
        ],
    ]) ?>

</div>
