<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\DataSpk $model */

$this->title = $model->id_spk;
$this->params['breadcrumbs'][] = ['label' => 'Data Spks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">SPK MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['data-spk/index']) ?>">Panel SPK</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>

            <div class="col-sm-12">
                <div class="card-box">
                    <div class="data-spk-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_spk' => $model->id_spk], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_spk' => $model->id_spk], [
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
                                'id_spk',
                                'rSquare',
                                'dataF',
                                'dataT',
                            ],
                        ]) ?>

                    </div>