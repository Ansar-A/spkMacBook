<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $model */

$this->title = 'Update User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3><i class="text-primary md md-add-shopping-cart"></i> <b data-plugin="counterup">3730</b></h3>
                                <h4 class="text-muted">Lifetime total sales</h4>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3><i class="text-custom md md-attach-money"></i> <b data-plugin="counterup">3267</b></h3>
                                <h4 class="text-muted">Income amounts</h4>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3><i class="text-pink md md-account-child"></i> <b data-plugin="counterup">2717</b></h3>
                                <h4 class="text-muted">Total users</h4>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center b-0">
                                <h3><i class="text-purple md md-visibility"></i> <b data-plugin="counterup">135</b></h3>
                                <h4 class="text-muted">Total visits</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="user-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>