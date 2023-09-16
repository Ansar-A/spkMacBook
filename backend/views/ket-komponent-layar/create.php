<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentLayar $model */

$this->title = 'Create Ket Komponent Layar';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Layars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-layar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
