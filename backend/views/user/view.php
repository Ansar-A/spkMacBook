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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (Yii::$app->session->hasFlash('success')) : ?>
                    <?php echo Growl::widget([
                        'type' => Growl::TYPE_SUCCESS,
                        'title' => 'Well done!',
                        //'icon' => 'fa fa-close',
                        'body' => '<p>Data berhasil disimpan.</p><p>&nbsp;</p>',
                        'showSeparator' => true,
                        'delay' => 0,
                        'pluginOptions' => [
                            'showProgressbar' => true,
                            'placement' => [
                                'from' => 'top',
                                'align' => 'right',
                            ]
                        ]
                    ]);
                    ?>
                    <?= Yii::$app->session->getFlash('success') ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Panel Admin</h4>
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
                <div class="col-md-4 col-lg-3">
                    <div class="profile-detail card-box">
                        <div>
                            <img src="<?php echo Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="img-circle" alt="profile-image">
                            <hr>
                            <h4 class="text-uppercase font-600">About Me</h4>
                            <p class="text-muted font-13 m-b-30">
                                <?php echo Yii::$app->user->identity->tentang ?>
                            </p>
                            <div class="button-list m-t-20">
                                <button type="button" class="btn btn-facebook waves-effect waves-light">
                                    <i class="fa fa-facebook"></i>
                                </button>

                                <button type="button" class="btn btn-twitter waves-effect waves-light">
                                    <i class="fa fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="card-box">
                        <div class="user-view">
                            <p>
                                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
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
                                'options' => [
                                    'class' => 'table-bordered  table table-hover'
                                ],
                                'attributes' => [
                                    'id',
                                    'username',
                                    'address',
                                    // 'tentang',
                                    'hp',
                                    // 'auth_key',
                                    // 'password_hash',
                                    // 'password_reset_token',
                                    'email:email',
                                    'status',
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