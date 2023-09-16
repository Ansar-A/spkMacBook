<?php

use yii\helpers\Html;
use yii\helpers\Url;


/** @var yii\web\View $this */
/** @var common\models\BuiltinApps $model */

$this->title = 'Update Builtin Apps: ' . $model->id_builtinApps;
$this->params['breadcrumbs'][] = ['label' => 'Builtin Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_builtinApps, 'url' => ['view', 'id_builtinApps' => $model->id_builtinApps]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Builtin Apps</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['builtin-apps/index']) ?>">Panel Builtin Apps</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="builtin-apps-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>