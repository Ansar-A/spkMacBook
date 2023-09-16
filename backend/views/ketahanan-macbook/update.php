<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */

$this->title = 'Update Ketahanan Macbook: ' . $model->id_ketahanan;
$this->params['breadcrumbs'][] = ['label' => 'Ketahanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ketahanan, 'url' => ['view', 'id_ketahanan' => $model->id_ketahanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ketahanan MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['ketahanan-macbook/index']) ?>">Panel Ketahanan</a>
                    </li>
                    <li class="active">
                        Update Ketahanan MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="ketahanan-macbook-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>