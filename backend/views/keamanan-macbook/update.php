<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\KeamananMacbook $model */

$this->title = 'Update Keamanan Macbook: ' . $model->id_keamanan;
$this->params['breadcrumbs'][] = ['label' => 'Keamanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keamanan, 'url' => ['view', 'id_keamanan' => $model->id_keamanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Keamanan MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['keamanan-macbook/index']) ?>">Panel Keamanan</a>
                    </li>
                    <li class="active">
                        Update Keamanan MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="keamanan-macbook-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>