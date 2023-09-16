<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\KeamananMacbook $model */

$this->title = 'Create Keamanan Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Keamanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Keamanan MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['keamanan-macbook/index']) ?>">Panel Keamanan</a>
                    </li>
                    <li class="active">
                        Create Keamanan MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="keamanan-macbook-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>