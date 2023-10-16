<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\BuiltinApps $model */

$this->title = $model->id_builtinApps;
$this->params['breadcrumbs'][] = ['label' => 'Builtin Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Builtin Apps</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['builtin-apps/index']) ?>">Panel Builtin Apps</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="builtin-apps-view">
                        <p>
                            <?php if (\Yii::$app->user->can('deletePost')) : ?>
                                <?= Html::a('Update', ['update', 'id_builtinApps' => $model->id_builtinApps], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', 'id_builtinApps' => $model->id_builtinApps], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            <?php else : ?>
                            <?php endif ?>
                        </p>

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_builtinApps',
                                'builtinApp',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>