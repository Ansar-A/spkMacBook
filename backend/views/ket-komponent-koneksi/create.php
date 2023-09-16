<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentKoneksi $model */

$this->title = 'Create Ket Komponent Koneksi';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Koneksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-koneksi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
