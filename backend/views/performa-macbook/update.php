<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */

$this->title = 'Update Performa Macbook: ' . $model->id_performa;
$this->params['breadcrumbs'][] = ['label' => 'Performa Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_performa, 'url' => ['view', 'id_performa' => $model->id_performa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Performa MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['performa-macbook/index']) ?>">Panel Performa</a>
                    </li>
                    <li class="active">
                        Update Performa MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="performa-macbook-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>