<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponent $model */

$this->title = 'Update Ket Komponent: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="ket-komponent-update">

                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>