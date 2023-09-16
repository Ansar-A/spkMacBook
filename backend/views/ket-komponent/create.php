<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponent $model */

$this->title = 'Create Ket Komponent';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="col">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="ket-komponent-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>