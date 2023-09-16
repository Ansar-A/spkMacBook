<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */

$this->title = 'Update Ukuran Berat: ' . $model->id_ukuranberat;
$this->params['breadcrumbs'][] = ['label' => 'Ukuran Berats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ukuranberat, 'url' => ['view', 'id_ukuranberat' => $model->id_ukuranberat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ukuran Berat</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['ukuran-berat/index']) ?>">Panel Ukuran Berat</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="ukuran-berat-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>