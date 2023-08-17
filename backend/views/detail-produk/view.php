<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\DetailProduk $model */

$this->title = $model->id_detail;
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="content">
    <div class="container">
        <div class="row">
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
                <h4 class="page-title">Basic Tables</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Ubold</a>
                    </li>
                    <li>
                        <a href="#">Tables</a>
                    </li>
                    <li class="active">
                        Tables
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
                    <div class="detail-produk-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_detail' => $model->id_detail], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_detail' => $model->id_detail], [
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
                                'id_detail',
                                'ketahanan',
                                'performa',
                                'kondisi',
                                'keamanan',
                                'get_spk',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>