<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\KoneksiEkspansi $model */

$this->title = 'Update Koneksi Ekspansi: ' . $model->id_koneksi;
$this->params['breadcrumbs'][] = ['label' => 'Koneksi Ekspansis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_koneksi, 'url' => ['view', 'id_koneksi' => $model->id_koneksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Koneksi Ekspansi</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['koneksi-ekspansi/index']) ?>">Panel Koneksi Ekspansi</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="koneksi-ekspansi-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>