<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Kamera $model */

$this->title = $model->id_kamera;
$this->params['breadcrumbs'][] = ['label' => 'Kameras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Kamera</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['kamera/index']) ?>">Panel Kamera</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="kamera-view">
                        <p>
                            <?php if (\Yii::$app->user->can('deletePost')) : ?>
                                <?= Html::a('Update', ['update', 'id_kamera' => $model->id_kamera], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', 'id_kamera' => $model->id_kamera], [
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
                                'id_kamera',
                                'kamera',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>