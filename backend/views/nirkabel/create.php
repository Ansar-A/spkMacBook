<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Nirkabel $model */

$this->title = 'Create Nirkabel';
$this->params['breadcrumbs'][] = ['label' => 'Nirkabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="nirkabel-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>