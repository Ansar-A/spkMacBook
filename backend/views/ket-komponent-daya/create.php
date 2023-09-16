<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentDaya $model */

$this->title = 'Create Ket Komponent Daya';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Dayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-daya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
