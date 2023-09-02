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
                <div class="btn-group pull-right m-t-15">
                    <!-- <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button> -->
                    <ul class="dropdown-menu drop-menu-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

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
            <div class="col-sm-12">
                <div class="blog-box-one">
                    <div class="post-info">
                        <div class="date">
                            <span class="day">11</span><br>
                            <span class="month">Feb</span>
                        </div>

                        <div class="meta-container">
                            <a href="#">
                                <h4 class="text-overflow m-t-0">Beautiful Image Blog Post</h4>
                            </a>
                            <div class="font-13">
                                <span class="meta">Posted by James in <a href="#"><b>Web Design</b></a></span>
                            </div>
                        </div>

                        <p class="text-muted m-b-0">
                            Nunc nec dui vitae urna cursus lacinia. In
                            venenatis eget justo in dictum. Vestibulum
                            auctor raesent quisnm.
                        </p>

                        <div class="row m-t-10">
                            <div class="col-xs-6">
                                <div class="m-t-10 blog-widget-action">
                                    <a href="javascript:void(0)">
                                        <i class="mdi md-favorite"></i> <span>34</span>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="mdi md-comment"></i> <span>58</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="" class="btn btn-sm waves-effect btn-white">Read More</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="user-view">
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
                            'options' => [
                                'class' => 'table-bordered  table table-hover'
                            ],
                            'attributes' => [
                                'id',
                                'username',
                                'address',
                                'tentang',
                                'hp',
                                // 'auth_key',
                                // 'password_hash',
                                // 'password_reset_token',
                                'email:email',
                                'status',
                                // 'created_at',
                                // 'updated_at',
                                // 'verification_token',
                                'get_sosial'
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>