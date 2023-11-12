<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Pengguna $model */

$this->title = 'Update Pengguna: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li>
                    <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                </li>
                <li>
                    <a href="<?= Url::to(['pengguna/index']) ?>"><i class="icon-people"></i></a>
                </li>
                <li>
                    <a href="<?= Url::to(['pengguna/index']) ?>">Pengguna</a>
                </li>
                <li class="active">
                    Update
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="pengguna-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>