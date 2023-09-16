<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Daya $model */

$this->title = 'Create Daya';
$this->params['breadcrumbs'][] = ['label' => 'Dayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="jenis-penyimpanan-create">
                        <div class="daya-create">
                            <?= $this->render('_form', [
                                'model' => $model,
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>