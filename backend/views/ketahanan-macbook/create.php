<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */

$this->title = 'Create Ketahanan Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Ketahanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketahanan-macbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
