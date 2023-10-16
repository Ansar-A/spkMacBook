<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\UkuranBerat $model */

$this->title = $model->id_ukuranberat;
$this->params['breadcrumbs'][] = ['label' => 'Ukuran Berats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ukuran Berat</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['ukuran-berat/index']) ?>">Panel Ukuran Berat</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="ukuran-berat-view">
                        <p>
                            <?php if (\Yii::$app->user->can('deletePost')) : ?>
                                <?= Html::a('Update', ['update', 'id_ukuranberat' => $model->id_ukuranberat], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', 'id_ukuranberat' => $model->id_ukuranberat], [
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
                                'id_ukuranberat',
                                'tinggi',
                                'panjang',
                                'lebar',
                                'berat',
                            ],
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>