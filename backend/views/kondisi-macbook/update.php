<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\KondisiMacbook $model */

$this->title = 'Update Kondisi Macbook: ' . $model->id_kondisi;
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kondisi, 'url' => ['view', 'id_kondisi' => $model->id_kondisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Kondisi MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['kondisi-macbook/index']) ?>">Panel Kondisi</a>
                    </li>
                    <li class="active">
                        Update Kondisi MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="kondisi-macbook-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>