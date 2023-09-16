<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */

$this->title = $model->id_performa;
$this->params['breadcrumbs'][] = ['label' => 'Performa Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Performa MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['performa-macbook/index']) ?>">Panel Performa</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="performa-macbook-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_performa' => $model->id_performa], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_performa' => $model->id_performa], [
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
                                'id_performa',
                                'ram',
                                'vga',
                                'prosesor',
                                'storage',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>