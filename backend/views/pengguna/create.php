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
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <!-- <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button> -->
                <ul class="dropdown-menu drop-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <h4 class="page-title">Basic Tables</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Ubold</a>
                </li>
                <li>
                    <a href="#">Tables</a>
                </li>
                <li class="active">
                    Tables
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title"><b>USER <span class="text-muted">(6)</span></b></h4>
                    <p class="text-muted m-b-0">
                        Nunc nec dui vitae urna cursus lacinia. In
                        venenatis eget justo in dictum. Vestibulum
                        auctor raesent quisnm. auctor raesent quisnm.
                        venenatis eget justo in dictum. Vestibulum
                        auctor.
                    </p>
                    <p></p>
                    <form role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="button" class="btn waves-effect btn-white"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div> <!-- form-group -->
                    </form>


                    <div class="friend-list text-center">
                        <a href="#">
                            <img src="<?= Url::to('@web/purple/assets/images/users/avatar-1.jpg') ?>" class="img-circle thumb-md img-thumbnail" alt="friend">
                        </a>

                        <a href="#">
                            <img src="<?= Url::to('@web/purple/assets/images/users/avatar-2.jpg') ?>" class="img-circle thumb-md img-thumbnail" alt="friend">
                        </a>

                        <a href="#">
                            <img src="<?= Url::to('@web/purple/assets/images/users/avatar-3.jpg') ?>" class="img-circle thumb-md img-thumbnail" alt="friend">
                        </a>

                        <a href="#">
                            <img src="<?= Url::to('@web/purple/assets/images/users/avatar-4.jpg') ?>" class="img-circle thumb-md img-thumbnail" alt="friend">
                        </a>

                        <a href="#">
                            <img src="<?= Url::to('@web/purple/assets/images/users/avatar-5.jpg') ?>" class="img-circle thumb-md img-thumbnail" alt="friend">
                        </a>

                        <a href="#">
                            <span class="extra-number">+89</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card-box p-b-0">
                    <a href="javascript:;" class="center-block text-center text-dark">
                        <img src="<?php echo Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="thumb-lg img-thumbnail img-circle" alt="">
                        <div class="h5 m-b-0"><strong><?= Yii::$app->user->identity->username ?></strong></div>
                    </a>
                    <div class="bg-custom pull-in-card p-20 widget-box-two m-b-0 m-t-30 list-inline text-center row">
                        <div class="col-xs-4">
                            <h4 class="text-white m-0 font-600">782</h4>
                            <p class="text-white m-b-0">Followers</p>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="text-white m-0 font-600">834</h4>
                            <p class="text-white m-b-0">Following</p>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="text-white m-0 font-600">2907</h4>
                            <p class="text-white m-b-0">Likes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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