<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */

$this->title = 'Update Like Produk: ' . $model->id_like;
$this->params['breadcrumbs'][] = ['label' => 'Like Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_like, 'url' => ['view', 'id_like' => $model->id_like]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
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
                        <h4 class="page-title">Like Produk</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['like-produk/index']) ?>">Panel Like Produk</a>
                    </li>
                    <li class="active">
                        Update
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="like-produk-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>