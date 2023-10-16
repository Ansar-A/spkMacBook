<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SpkKelayakan $model */

$this->title = 'Create Spk Kelayakan';
$this->params['breadcrumbs'][] = ['label' => 'Spk Kelayakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spk-kelayakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
