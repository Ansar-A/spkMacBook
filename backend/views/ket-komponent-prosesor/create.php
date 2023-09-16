<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentProsesor $model */

$this->title = 'Create Ket Komponent Prosesor';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Prosesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-prosesor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
