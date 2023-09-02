<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AuthItemChild $model */

$this->title = 'Create Auth Item Child';
$this->params['breadcrumbs'][] = ['label' => 'Auth Item Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-child-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>