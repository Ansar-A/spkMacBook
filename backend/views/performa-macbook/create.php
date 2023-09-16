<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\PerformaMacbook $model */

$this->title = 'Create Performa Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Performa Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Performa MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['performa-macbook/index']) ?>">Panel Performa</a>
                    </li>
                    <li class="active">
                        Create Performa MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="performa-macbook-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>