<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */

$this->title = 'Update Daya: ' . $model->id_daya;
$this->params['breadcrumbs'][] = ['label' => 'Dayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daya, 'url' => ['view', 'id_daya' => $model->id_daya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['daya/index']) ?>">Daya</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="daya-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>