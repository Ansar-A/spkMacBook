<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\DataSpk $model */

$this->title = 'Create Data Spk';
$this->params['breadcrumbs'][] = ['label' => 'Data Spks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-spk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
