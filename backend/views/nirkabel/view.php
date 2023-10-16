<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Nirkabel $model */

$this->title = $model->id_nirkabel;
$this->params['breadcrumbs'][] = ['label' => 'Nirkabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Nirkabel</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['nirkabel/index']) ?>">Panel Nirkabel</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="nirkabel-view">
                        <p>
                            <?php if (\Yii::$app->user->can('deletePost')) : ?>
                                <?= Html::a('Update', ['update', 'id_nirkabel' => $model->id_nirkabel], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', 'id_nirkabel' => $model->id_nirkabel], [
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
                                'id_nirkabel',
                                'wifi',
                                'bluetooth',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>