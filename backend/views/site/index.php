<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" panel panel-border panel-custom">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-8">
                                <p>
                                <h3 class="text-primary">Welcome <b></b></h3>
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ullamco laboris nisi ut aliquip ex ea commodo consequat
                                </p>
                                <p>

                                <ul class="social-links list-inline m-1">
                                    <li><button type=" button" class="btn btn-info  btn-rounded btn-sm waves-effect waves-light">Info
                                            <span class="btn-label btn-rounded  btn-label-right"><i class="fa fa-info"></i>
                                            </span>
                                        </button></li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-md-4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= Url::to('@web/purple/assets/images/statistics.svg') ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-people text-primary"></i>
                    <h2 class="m-0 text-dark counter font-600">50</h2>
                    <div class="text-muted m-t-5">Servicer</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-assessment text-pink"></i>
                    <h2 class="m-0 text-dark counter font-600">126</h2>
                    <div class="text-muted m-t-5">Product</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-store-mall-directory text-info"></i>
                    <h2 class="m-0 text-dark counter font-600">18</h2>
                    <div class="text-muted m-t-5">Stores</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget-panel widget-style-2 bg-white">
                    <i class="md md-person text-custom"></i>
                    <h2 class="m-0 text-dark counter font-600">856</h2>
                    <div class="text-muted m-t-5">Users</div>
                </div>
            </div>
            <!-- produk -->
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Donut Chart</b></h4>
                    <p class="text-muted m-b-15 font-13">Pie and doughnut charts are probably the most commonly used chart there are. They are
                        divided into segments, the arc of each segment shows the proportional value of each piece of data.
                    </p>


                </div>
            </div>

            <!-- pengguna -->
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Donut Chart</b></h4>
                    <p class="text-muted m-b-15 font-13">Pie and doughnut charts are probably the most commonly used chart there are. They are
                        divided into segments, the arc of each segment shows the proportional value of each piece of data.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>