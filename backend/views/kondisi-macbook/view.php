<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\KondisiMacbook $model */

$this->title = $model->id_kondisi;
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Kondisi MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['kondisi-macbook/index']) ?>">Panel Kondisi</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="kondisi-macbook-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_kondisi' => $model->id_kondisi], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_kondisi' => $model->id_kondisi], [
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
                                'id_kondisi',
                                'kondisi_layar',
                                'keyboard',
                                'tracpad',
                                'audio',
                                'kamera',
                                'koneksi',
                                'kondisi_port',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>