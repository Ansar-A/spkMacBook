<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\User $model */

$this->title = 'Update User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li>
                    <h4 class="page-title">Panel Admin</h4>
                </li>
                <li>
                    <a href="<?= Url::to(['user/index']) ?>">Admin</a>
                </li>
                <li class="active">
                    Update
                </li>
            </ol>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="user-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>