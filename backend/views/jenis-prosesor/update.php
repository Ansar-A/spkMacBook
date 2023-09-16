<?php

use yii\helpers\Html;
use yii\helpers\Url;


/** @var yii\web\View $this */
/** @var common\models\JenisProsesor $model */

$this->title = 'Update Jenis Prosesor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Prosesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Jenis Prosesor</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['jenis-prosesor/index']) ?>">Panel Jenis Prosesor</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="jenis-prosesor-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>