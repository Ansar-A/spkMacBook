<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Nirkabel $model */

$this->title = 'Create Nirkabel';
$this->params['breadcrumbs'][] = ['label' => 'Nirkabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nirkabel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
