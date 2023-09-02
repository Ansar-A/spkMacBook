<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponent $model */

$this->title = 'Create Ket Komponent';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
