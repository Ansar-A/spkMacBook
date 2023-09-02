<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AuthAssignment $model */

$this->title = 'Update Auth Assignment: ' . $model->item_name;
$this->params['breadcrumbs'][] = ['label' => 'Auth Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_name, 'url' => ['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="content">
    <div class="container">
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
                    <div class="auth-assignment-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>