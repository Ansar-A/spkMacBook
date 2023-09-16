<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\KetahananMacbook $model */

$this->title = 'Create Ketahanan Macbook';
$this->params['breadcrumbs'][] = ['label' => 'Ketahanan Macbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Ketahanan MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['ketahanan-macbook/index']) ?>">Panel Ketahanan</a>
                    </li>
                    <li class="active">
                        Create Ketahanan MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="ketahanan-macbook-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>