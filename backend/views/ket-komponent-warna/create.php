<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentWarna $model */

$this->title = 'Create Ket Komponent Warna';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-warna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
