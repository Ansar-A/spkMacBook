<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentSo $model */

$this->title = 'Update Ket Komponent So: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Sos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="ket-komponent-so-update">

                        <h1><?= Html::encode($this->title) ?></h1>

                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>