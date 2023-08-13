<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BuiltinApps $model */

$this->title = 'Create Builtin Apps';
$this->params['breadcrumbs'][] = ['label' => 'Builtin Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="builtin-apps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
