<?php

use yii\helpers\Url;

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */

$this->title = $model->id_daya;
$this->params['breadcrumbs'][] = ['label' => 'Dayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Daya</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['daya/index']) ?>">Panel Daya</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="daya-view">
                        <p>
                            <?php if (\Yii::$app->user->can('deletePost')) : ?>
                                <?= Html::a('Update', ['update', 'id_daya' => $model->id_daya], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', 'id_daya' => $model->id_daya], [
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
                                'id_daya',
                                'informasi_baterai',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>