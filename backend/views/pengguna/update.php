<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Pengguna $model */

$this->title = 'Update Pengguna: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="content">
    <div class="container">
        <div class="col-sm-12">

            <ol class="breadcrumb">
                <li>
                    <h4 class="page-title">Panel Pengguna</h4>
                </li>
                <li>
                    <a href="<?= Url::to(['pengguna/index']) ?>">Pengguna</a>
                </li>
                <li class="active">
                    Update
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
                    <div class="pengguna-update">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>