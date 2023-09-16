<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\DataSpk $model */

$this->title = 'Create Data Spk';
$this->params['breadcrumbs'][] = ['label' => 'Data Spks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">SPK MacBook</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['data-spk/index']) ?>">Panel SPK</a>
                    </li>
                    <li class="active">
                        Create SPK MacBook
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="card-box">
                    <div class="data-spk-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>