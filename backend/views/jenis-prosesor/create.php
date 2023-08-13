<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\JenisProsesor $model */

$this->title = 'Create Jenis Prosesor';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Prosesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-prosesor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
