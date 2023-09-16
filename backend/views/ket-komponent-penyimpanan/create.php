<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentPenyimpanan $model */

$this->title = 'Create Ket Komponent Penyimpanan';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Penyimpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-penyimpanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
