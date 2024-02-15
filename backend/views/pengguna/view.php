<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Pengguna $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['pengguna/index']) ?>"><i class="icon-people"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['pengguna/index']) ?>">Pengguna</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="pengguna-view">
                        <p>
                            <?php if (\Yii::$app->user->can('Administrator')) : ?>
                                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
                                'id',
                                'username',
                                //'password_hash',
                                'email:email',
                                [
                                    'attribute' => 'status',
                                ],
                                //'auth_key',
                                //'password_reset_token',
                                //'created_at',
                                //'updated_at',
                                //'verification_token',
                                'address',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>