<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetKomponentNirkabel $model */

$this->title = 'Create Ket Komponent Nirkabel';
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponent Nirkabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ket-komponent-nirkabel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
