<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BuiltinApps $model */

$this->title = 'Update Builtin Apps: ' . $model->id_builtinApps;
$this->params['breadcrumbs'][] = ['label' => 'Builtin Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_builtinApps, 'url' => ['view', 'id_builtinApps' => $model->id_builtinApps]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="builtin-apps-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
