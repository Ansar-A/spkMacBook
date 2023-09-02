<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\AuthRule $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Auth Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                    <ul class="dropdown-menu drop-menu-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <h4 class="page-title">Tabs &amp; Accordions</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Ubold</a></li>
                    <li><a href="#">UI Kit</a></li>
                    <li class="active">Tabs &amp; Accordions</li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="auth-rule-view">
                        <p>
                            <?= Html::a('Update', ['update', 'name' => $model->name], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'name' => $model->name], [
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
                                'name',
                                'data',
                                'created_at',
                                'updated_at',
                            ],
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>