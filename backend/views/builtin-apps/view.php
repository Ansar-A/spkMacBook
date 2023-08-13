<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\BuiltinApps $model */

$this->title = $model->id_builtinApps;
$this->params['breadcrumbs'][] = ['label' => 'Builtin Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="builtin-apps-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_builtinApps' => $model->id_builtinApps], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_builtinApps' => $model->id_builtinApps], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_builtinApps',
            'builtinApp',
        ],
    ]) ?>

</div>
