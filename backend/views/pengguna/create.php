<?php

use yii\helpers\Html;
use yii\helpers\Url;


/** @var yii\web\View $this */
/** @var common\models\Pengguna $model */

$this->title = 'Create Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="pengguna-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>