<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisPenyimpanan $model */

$this->title = 'Create Jenis Penyimpanan';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Penyimpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-penyimpanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
