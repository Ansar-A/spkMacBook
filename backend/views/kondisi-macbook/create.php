<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\KondisiMacbook $model */

$this->title = 'Create Kondisi Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kondisi-macbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
