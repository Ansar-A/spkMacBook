<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\growl\Growl;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\User $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<html>

<head>
    <style>
        .card {
            width: 100%;
            height: 310px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 10px;
            background-color: #fffffe;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
            border-radius: 5px;
        }

        .card::before {
            content: "";
            width: 100%;
            height: 100px;
            position: absolute;
            top: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom: 3px solid #fefefe;
            background: linear-gradient(40deg, rgb(119, 67, 219) 0%, rgb(97, 12, 159) 50%, rgb(148, 11, 146) 100%);
            transition: all 0.3s ease;
        }

        .card * {
            z-index: 1;
        }

        .image {
            width: 90px;
            height: 90px;
            background-color: #1468BF;
            border-radius: 50%;
            border: 4px solid #fefefe;
            margin-top: 30px;
            transition: all 0.5s ease;
        }

        .card-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            transition: all 0.5s ease;
        }

        .card-info span {
            font-weight: 600;
            font-size: 24px;
            color: #161A42;
            margin-top: 15px;
            line-height: 5px;
        }

        .card-info p {
            color: rgba(0, 0, 0, 0.5);
        }

        .button {
            text-decoration: none;
            background-color: #1468BF;
            color: white;
            padding: 5px 20px;
            border-radius: 5px;
            border: 1px solid white;
            transition: all 0.5s ease;
        }

        .card:hover {
            width: 100%;
            border-radius: 25px;
        }

        .card:hover .card-info {
            transform: translate(0%, -15%);
        }

        .button:hover {
            background-color: #FF6844;
            transform: scale(1.1);
        }
    </style>
</head>

</html>
<div class="content">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['user/index']) ?>"><i class="ti-user"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['user/index']) ?>">Admin</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>

            <div class="row">
                <!-- <div class="col-sm-3">
                    <div class="card">
                        <div style="padding-top: 30px;">
                            <img src="<?php echo Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="img-circle" alt="profile-image" width="80px" height="80px">
                        </div>
                        <div class="card-info">
                            <h4 style="color: purple;"><?php echo Yii::$app->user->identity->username ?></h4>
                            <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                                <p style="color: purple;">Super Admin</p>
                            <?php else : ?>
                                <p style="color: purple;">Admin</p>
                            <?php endif ?>
                        </div>
                        <div class="row" style="padding-bottom: 20px;">
                            <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                                <div class="col-sm-6">
                                    <?= Html::a('', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil']) ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= Html::a('', ['delete', 'id' => $model->id], [
                                        'class' => 'glyphicon glyphicon-trash',
                                        'data' => [
                                            'confirm' => 'Are you sure you want to delete this item?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </div>
                            <?php else : ?>
                                <div class="col-sm-12">
                                    <?= Html::a('', ['update', 'id' => $model->id], ['class' => 'button btn-sm   glyphicon glyphicon-pencil']) ?>
                                </div>
                            <?php endif ?>
                        </div>

                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="card-box">
                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
                            <div class="panel-heading" style="padding-left: 0px;">
                                <?= Html::a('', ['update', 'id' => $model->id], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']) ?>
                                <?= Html::a('', ['delete', 'id' => $model->id], [
                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </div>
                        <?php else : ?>
                        <?php endif ?>
                        <div class="user-view">
                            <?= DetailView::widget([
                                'model' => $model,
                                'options' => [
                                    'class' => 'table-bordered  table table-hover'
                                ],
                                'attributes' => [
                                    'id',
                                    [
                                        'label' => 'Photo',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            return Html::img('@web/' . $model->photo, ['style' => 'heigth: 50px; width:50px;', 'class' => 'img-responsive img-rounded']);
                                        }
                                    ],
                                    'username',
                                    'address',
                                    'tentang',
                                    'hp',
                                    // 'auth_key',
                                    // 'password_hash',
                                    // 'password_reset_token',
                                    'email:email',
                                    [
                                        'attribute' => 'status',
                                        'value' => function ($data) {
                                            if ($data->status == 10) {
                                                return 'Active';
                                            } else {
                                                return 'Suspended';
                                            }
                                        }
                                    ],
                                    'fb',
                                    'ig',
                                    'role'
                                    // 'created_at',
                                    // 'updated_at',
                                    // 'verification_token',
                                    //'get_sosial'
                                ],
                            ]) ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>