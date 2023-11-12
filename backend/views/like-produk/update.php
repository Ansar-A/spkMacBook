<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */

$this->title = 'Update Like Produk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Like Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
                        <a href="<?= Url::to(['like-produk/index']) ?>"><i class="icon-people"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['like-produk/index']) ?>">Like Produk</a>
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