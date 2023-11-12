<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */

$this->title = 'Update Spk Kelayakan: ' . $model->id_kelayakan;
$this->params['breadcrumbs'][] = ['label' => 'Spk Kelayakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelayakan, 'url' => ['view', 'id_kelayakan' => $model->id_kelayakan]];
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
                        <a href="<?= Url::to(['spk-kelayakan/index']) ?>">SPK Kelayakan</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>

            </div>
            <div class="col-sm-12">
                <div class="spk-kelayakan-update">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>