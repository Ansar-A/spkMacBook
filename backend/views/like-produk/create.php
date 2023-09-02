<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\LikeProduk $model */

$this->title = 'Create Like Produk';
$this->params['breadcrumbs'][] = ['label' => 'Like Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="like-produk-create">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>