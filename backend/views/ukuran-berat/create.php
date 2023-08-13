<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */

$this->title = 'Create Ukuran Berat';
$this->params['breadcrumbs'][] = ['label' => 'Ukuran Berats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukuran-berat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
