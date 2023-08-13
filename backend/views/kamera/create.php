<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kamera $model */

$this->title = 'Create Kamera';
$this->params['breadcrumbs'][] = ['label' => 'Kameras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
