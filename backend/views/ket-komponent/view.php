<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\KetKomponent $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ket Komponents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="col">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Keterangan Jenis Produk</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['ket-komponent/index']) ?>">Home</a>
                    </li>
                    <li class="active">
                        Panel View
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="ket-komponent-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
                                'id',
                                'ket_jenisProduk',
                                'judul',
                                'photo',
                                'link'
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>