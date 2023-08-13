<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Audio $model */

$this->title = 'Update Audio: ' . $model->id_audio;
$this->params['breadcrumbs'][] = ['label' => 'Audios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_audio, 'url' => ['view', 'id_audio' => $model->id_audio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
