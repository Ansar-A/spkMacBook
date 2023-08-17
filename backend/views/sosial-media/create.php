<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SosialMedia $model */

$this->title = 'Create Sosial Media';
$this->params['breadcrumbs'][] = ['label' => 'Sosial Media', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sosial-media-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
