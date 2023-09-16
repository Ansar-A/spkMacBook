<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentUkuran $model */

$this->title = 'Create Ket Komponent Ukuran';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Ukurans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-ukuran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
