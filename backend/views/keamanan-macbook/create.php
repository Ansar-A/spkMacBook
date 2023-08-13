<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KeamananMacbook $model */

$this->title = 'Create Keamanan Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Keamanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keamanan-macbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
