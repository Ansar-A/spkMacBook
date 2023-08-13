<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Produk $model */

$this->title = 'Create Produk';
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="row">
        <div class="container">
            <div class="col-lg-12">
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
        </div>
        <div class="col-lg-12">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="widget-profile-one">
                            <div class="card-box m-b-0 b-0 bg-primary p-lg text-center">
                                <div class="m-b-30">
                                    <h3 class="text-white m-b-5">
                                        Arashas Smith
                                    </h3>
                                    <small>Founder of Company</small>
                                </div>
                                <div class="m-t-10">
                                    <span><b>480</b> Tweets</span> |
                                    <span><b>1450</b> Following</span> |
                                    <span><b>610</b> Followers</span>
                                </div>
                            </div>
                            <div class="card-box">
                                <h4 class="media-heading">Alex Smith</h4>
                                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Simply dummy text of the printing and typesetting.</p>
                                <div class="text-right">
                                    <a class="btn btn-xs btn-white waves-effect"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-danger waves-effect waves-light"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="produk-create">
                                <?= $this->render('_form', [
                                    'model' => $model,
                                ]) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title"><b>Last Transactions</b></h4>

                    <ul class="list-unstyled transaction-list">
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Advertising</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">07/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">Support licence</span>
                            <span class="pull-right text-danger tran-price">-$965</span>
                            <span class="pull-right text-muted">07/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Extended licence</span>
                            <span class="pull-right text-success tran-price">+$830</span>
                            <span class="pull-right text-muted">07/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Advertising</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">05/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">New plugins added</span>
                            <span class="pull-right text-danger tran-price">-$452</span>
                            <span class="pull-right text-muted">05/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Google Inc.</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">04/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">Facebook Ad</span>
                            <span class="pull-right text-danger tran-price">-$364</span>
                            <span class="pull-right text-muted">03/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">New sale</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">03/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Advertising</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">29/08/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">Support licence</span>
                            <span class="pull-right text-danger tran-price">-$854</span>
                            <span class="pull-right text-muted">27/08/2015</span>
                            <span class="clearfix"></span>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>