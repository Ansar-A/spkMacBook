<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */

$this->title = 'Create Daya';
$this->params['breadcrumbs'][] = ['label' => 'Dayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
