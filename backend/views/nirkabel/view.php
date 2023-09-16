<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Nirkabel $model */

$this->title = $model->id_nirkabel;
$this->params['breadcrumbs'][] = ['label' => 'Nirkabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

                    <div class="nirkabel-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id_nirkabel' => $model->id_nirkabel], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id_nirkabel' => $model->id_nirkabel], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_nirkabel',
                                'wifi',
                                'bluetooth',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>