<?php

use common\models\JenisProduk;
use common\models\Produk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var frontend\models\ProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper" style="padding-top: 128px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card-box product-detail-box">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                            <h4 class="page-header header-title"><b>TREND</b></h4>
                            <div class="card-box m-b-10">
                                <div class="table-box opport-box">
                                    <div class="table-detail">
                                        <div class="member-info">
                                            <h4 class="m-t-0"><b>Enveto Market Pty Ltd. </b></h4>
                                            <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                            <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                        </div>
                                    </div>

                                    <div class="table-detail lable-detail">
                                        <span class="label label-info">Hot</span>
                                    </div>

                                    <div class="table-detail table-actions-bar">
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-box m-b-10">
                                <div class="table-box opport-box">
                                    <div class="table-detail">
                                        <div class="member-info">
                                            <h4 class="m-t-0"><b>The Coca-Cola Company </b></h4>
                                            <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                            <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                        </div>
                                    </div>

                                    <div class="table-detail lable-detail">
                                        <span class="label label-purple">Cold</span>
                                    </div>

                                    <div class="table-detail table-actions-bar">
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-box m-b-10">
                                <div class="table-box opport-box">
                                    <div class="table-detail">
                                        <div class="member-info">
                                            <h4 class="m-t-0"><b>Dribbble LLC </b></h4>
                                            <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                            <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                        </div>
                                    </div>
                                    <div class="table-detail lable-detail">
                                        <span class="label label-warning">progress</span>
                                    </div>

                                    <div class="table-detail table-actions-bar">
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-box m-b-10">
                                <div class="table-box opport-box">

                                    <div class="table-detail">
                                        <div class="member-info">
                                            <h4 class="m-t-0"><b>Coderthemes design </b></h4>
                                            <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                            <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                        </div>
                                    </div>

                                    <div class="table-detail lable-detail">
                                        <span class="label label-danger">Lost</span>
                                    </div>

                                    <div class="table-detail table-actions-bar">
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-box">
                                <div class="table-box opport-box">

                                    <div class="table-detail">
                                        <div class="member-info">
                                            <h4 class="m-t-0"><b>WrapMarket LLC </b></h4>
                                            <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                            <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                        </div>
                                    </div>


                                    <div class="table-detail lable-detail">
                                        <span class="label label-success">Won</span>
                                    </div>

                                    <div class="table-detail table-actions-bar">
                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 card-box" style="padding-left: 20px;">
                            <div class="product-right-info">
                                <div class="row">
                                    <div class="m-b-15" style="padding-right: 10px;">
                                        <?=
                                        ListView::widget([
                                            'dataProvider' => $dataProvider,
                                            'options' => [
                                                'tag' => 'div',
                                                'class' => 'row',
                                            ],
                                            'itemView' => '_list_item',
                                            'itemOptions' => ['tag' => null],
                                            'summary' => false,
                                        ]);
                                        ?>
                                    </div>
                                </div>
                                <h5 class="m-t-20"><b>Stock: </b> 28. <span class="label label-default m-l-5">In Stock</span></h5>
                                <hr>
                                <h5>Product Description by <b>Baginda Store</b></h5>

                                <p class="text-muted">Dantes remained confused and silent by this
                                    explanation of the thoughts which had unconsciously been working in
                                    his mind, or rather soul; for there are two distinct sorts of ideas,
                                    those that proceed from the head and those from the heart.</p>

                                <p class="text-muted">Unconsciously been working in
                                    his mind, or rather soul; for there are two distinct sorts of ideas,
                                    those that proceed from the head and those from the heart.</p>

                                <div class="m-t-30">
                                    <button type="button" class="btn btn-white" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
                                        <span class="btn-label"><i class="fa fa-shopping-cart"></i>
                                        </span>Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>