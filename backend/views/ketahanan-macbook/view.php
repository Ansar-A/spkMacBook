<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */

$this->title = $model->id_ketahanan;
$this->params['breadcrumbs'][] = ['label' => 'Ketahanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ketahanan MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['ketahanan-macbook/index']) ?>">Panel Ketahanan</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="ketahanan-macbook-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_ketahanan' => $model->id_ketahanan], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_ketahanan' => $model->id_ketahanan], [
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
                                'id_ketahanan',
                                'baterai',
                                'kapasitas_pengisian',
                                'ket'
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>