<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\growl\Growl;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\User $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (Yii::$app->session->hasFlash('success')) : ?>
                    <?php echo Growl::widget([
                        'type' => Growl::TYPE_SUCCESS,
                        'title' => 'Well done!',
                        //'icon' => 'fa fa-close',
                        'body' => '<p>Data berhasil disimpan.</p><p>&nbsp;</p>',
                        'showSeparator' => true,
                        'delay' => 0,
                        'pluginOptions' => [
                            'showProgressbar' => true,
                            'placement' => [
                                'from' => 'top',
                                'align' => 'right',
                            ]
                        ]
                    ]);
                    ?>
                    <?= Yii::$app->session->getFlash('success') ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <h4 class="page-title">Panel Admin</h4>
                    </li>
                    <li>
                        <a href="<?= Url::to(['user/index']) ?>">Admin</a>
                    </li>
                    <li class="active">
                        View
                    </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="user-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                        <?= DetailView::widget([
                            'model' => $model,
                            'options' => [
                                'class' => 'table-bordered  table table-hover'
                            ],
                            'attributes' => [
                                'id',
                                'username',
                                'address',
                                'tentang',
                                'hp',
                                // 'auth_key',
                                // 'password_hash',
                                // 'password_reset_token',
                                'email:email',
                                'status',
                                // 'created_at',
                                // 'updated_at',
                                // 'verification_token',
                                //'get_sosial'
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>