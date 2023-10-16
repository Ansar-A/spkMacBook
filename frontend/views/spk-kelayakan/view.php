<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */

$this->title = $model->id_kelayakan;
$this->params['breadcrumbs'][] = ['label' => 'Spk Kelayakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="spk-kelayakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id_kelayakan',
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
            'T_layar',
            'get_produk',
        ],
    ]) ?>

</div>