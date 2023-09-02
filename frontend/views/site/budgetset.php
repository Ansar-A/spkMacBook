<?php

/** @var yii\web\View $this */

use common\models\LikeProduk;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\ListView;
use kartik\number\NumberControl;

$this->title = 'My Yii Application';
?>

<div class="wrapper">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                    <ul class="dropdown-menu drop-menu-right" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <h4 class="page-title">Dashboard 4</h4>
                <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card-box widget-box-1 bg-white">
                    <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                    <h4 class="text-dark">Income status</h4>
                    <h2 class="text-primary text-center">$<span data-plugin="counterup">5623</span></h2>
                    <p class="text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card-box widget-box-1 bg-white">
                    <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                    <h4 class="text-dark">Sales status</h4>
                    <h2 class="text-pink text-center"><span data-plugin="counterup">185</span></h2>
                    <p class="text-muted">Total sales: 2398 <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>7.85%</span></p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card-box widget-box-1 bg-white">
                    <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                    <h4 class="text-dark">Income status</h4>
                    <h2 class="text-success text-center">$<span data-plugin="counterup">9562</span></h2>
                    <p class="text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="card-box widget-box-1 bg-white">
                    <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                    <h4 class="text-dark">Sales status</h4>
                    <h2 class="text-warning text-center"><span data-plugin="counterup">874</span></h2>
                    <p class="text-muted">Total sales: 2398 <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>7.85%</span></p>
                </div>
            </div>

        </div>

        <!-- BAR Chart -->
        <div class="row">
            <div class="col-lg-6">
                <div class="portlet">
                    <!-- /primary heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark"> Total Revenue </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default1"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-default1" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #3ac9d6;"></i>Series A</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #f9c851;"></i>Series B</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #ebeff2;"></i>Series C</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="p-20">
                                    <!-- <?php $form = ActiveForm::begin() ?> -->

                                    <!-- <?php ActiveForm::end() ?> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Portlet -->
            </div>
            <!-- col -->
            <div class="col-lg-6">
                <div class="portlet">
                    <!-- /primary heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark"> Sales Analytics </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="bg-default" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="text-center">
                                <ul class="list-inline chart-detail-list">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #4793f5;"></i>Mobiles</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #ff3f4e;"></i>Tablets</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #bbbbbb;"></i>Desktops</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="morris-area-example" style="height: 300px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px; top: -0.28125px;">
                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                    </text>
                                    <path fill="none" stroke="#eef0f2" d="M45.03125,261H487" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan>
                                    </text>
                                    <path fill="none" stroke="#eef0f2" d="M45.03125,202H487" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>
                                    </text>
                                    <path fill="none" stroke="#eef0f2" d="M45.03125,143H487" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan>
                                    </text>
                                    <path fill="none" stroke="#eef0f2" d="M45.03125,84H487" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan>
                                    </text>
                                    <path fill="none" stroke="#eef0f2" d="M45.03125,25H487" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="487" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>
                                    </text><text x="413.37216168416245" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan>
                                    </text><text x="339.74432336832496" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                                    </text><text x="265.91476494751254" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                                    </text><text x="192.28692663167502" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                                    </text><text x="118.65908831583751" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                                    </text><text x="45.03125" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan>
                                    </text>
                                    <path fill="#e9e9e9" stroke="none" d="M45.03125,190.2C63.43820957895937,157.75,100.25212873687813,69.25,118.65908831583751,60.400000000000006C137.0660478947969,51.55000000000001,173.87996705271564,119.4,192.28692663167502,119.4C210.6938862106344,119.4,247.50780536855316,60.400000000000006,265.91476494751254,60.400000000000006C284.37215455271564,60.400000000000006,321.28693376312185,119.4,339.74432336832496,119.4C358.15128294728436,119.4,394.96520210520305,69.25,413.37216168416245,60.400000000000006C431.77912126312185,51.550000000000004,468.5930404210406,51.55000000000002,487,48.60000000000002L487,261L45.03125,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                    <path fill="none" stroke="#bbbbbb" d="M45.03125,190.2C63.43820957895937,157.75,100.25212873687813,69.25,118.65908831583751,60.400000000000006C137.0660478947969,51.55000000000001,173.87996705271564,119.4,192.28692663167502,119.4C210.6938862106344,119.4,247.50780536855316,60.400000000000006,265.91476494751254,60.400000000000006C284.37215455271564,60.400000000000006,321.28693376312185,119.4,339.74432336832496,119.4C358.15128294728436,119.4,394.96520210520305,69.25,413.37216168416245,60.400000000000006C431.77912126312185,51.550000000000004,468.5930404210406,51.55000000000002,487,48.60000000000002" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="45.03125" cy="190.2" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="118.65908831583751" cy="60.400000000000006" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="192.28692663167502" cy="119.4" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="265.91476494751254" cy="60.400000000000006" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="339.74432336832496" cy="119.4" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="413.37216168416245" cy="60.400000000000006" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="487" cy="48.60000000000002" r="0" fill="#bbbbbb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <path fill="#f09ca3" stroke="none" d="M45.03125,225.6C63.43820957895937,193.15,100.25212873687813,104.65,118.65908831583751,95.80000000000001C137.0660478947969,86.95000000000002,173.87996705271564,154.8,192.28692663167502,154.8C210.6938862106344,154.8,247.50780536855316,95.80000000000001,265.91476494751254,95.80000000000001C284.37215455271564,95.80000000000001,321.28693376312185,154.8,339.74432336832496,154.8C358.15128294728436,154.8,394.96520210520305,104.65,413.37216168416245,95.80000000000001C431.77912126312185,86.95,468.5930404210406,86.95,487,84L487,261L45.03125,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                    <path fill="none" stroke="#ff3f4e" d="M45.03125,225.6C63.43820957895937,193.15,100.25212873687813,104.65,118.65908831583751,95.80000000000001C137.0660478947969,86.95000000000002,173.87996705271564,154.8,192.28692663167502,154.8C210.6938862106344,154.8,247.50780536855316,95.80000000000001,265.91476494751254,95.80000000000001C284.37215455271564,95.80000000000001,321.28693376312185,154.8,339.74432336832496,154.8C358.15128294728436,154.8,394.96520210520305,104.65,413.37216168416245,95.80000000000001C431.77912126312185,86.95,468.5930404210406,86.95,487,84" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="45.03125" cy="225.6" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="118.65908831583751" cy="95.80000000000001" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="192.28692663167502" cy="154.8" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="265.91476494751254" cy="95.80000000000001" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="339.74432336832496" cy="154.8" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="413.37216168416245" cy="95.80000000000001" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="487" cy="84" r="0" fill="#ff3f4e" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <path fill="#9ec0ec" stroke="none" d="M45.03125,249.2C63.43820957895937,230.02499999999998,100.25212873687813,178.4,118.65908831583751,172.5C137.0660478947969,166.6,173.87996705271564,202,192.28692663167502,202C210.6938862106344,202,247.50780536855316,172.5,265.91476494751254,172.5C284.37215455271564,172.5,321.28693376312185,202,339.74432336832496,202C358.15128294728436,202,394.96520210520305,178.4,413.37216168416245,172.5C431.77912126312185,166.6,468.5930404210406,159.22500000000002,487,154.8L487,261L45.03125,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path>
                                    <path fill="none" stroke="#4793f5" d="M45.03125,249.2C63.43820957895937,230.02499999999998,100.25212873687813,178.4,118.65908831583751,172.5C137.0660478947969,166.6,173.87996705271564,202,192.28692663167502,202C210.6938862106344,202,247.50780536855316,172.5,265.91476494751254,172.5C284.37215455271564,172.5,321.28693376312185,202,339.74432336832496,202C358.15128294728436,202,394.96520210520305,178.4,413.37216168416245,172.5C431.77912126312185,166.6,468.5930404210406,159.22500000000002,487,154.8" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="45.03125" cy="249.2" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="118.65908831583751" cy="172.5" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="192.28692663167502" cy="202" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="265.91476494751254" cy="172.5" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="339.74432336832496" cy="202" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="413.37216168416245" cy="172.5" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="487" cy="154.8" r="0" fill="#4793f5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                </svg>
                                <div class="morris-hover morris-default-style" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Portlet -->
            </div>
            <!-- col -->
        </div>
        <!-- End row-->


        <div class="row">

            <div class="col-lg-12">

                <div class="portlet"><!-- /primary heading -->
                    <div class="portlet-heading">
                        <h3 class="portlet-title text-dark text-uppercase">
                            Projects
                        </h3>
                        <div class="portlet-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                            <span class="divider"></span>
                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="portlet2" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 95px;">
                                                <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                    <input id="action-checkbox" type="checkbox">
                                                    <label for="action-checkbox"></label>
                                                </div>
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Products</th>
                                            <th>Start Date</th>
                                            <th style="min-width: 90px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="active">
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox2" type="checkbox" checked="">
                                                    <label for="checkbox2"></label>
                                                </div>

                                                <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>

                                            <td>
                                                Tomaslau
                                            </td>

                                            <td>
                                                <a href="#">tomaslau@dummy.com</a>
                                            </td>

                                            <td>
                                                <b><a href="" class="text-dark"><b>356</b></a> </b>
                                            </td>

                                            <td>
                                                01/11/2003
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1"></label>
                                                </div>

                                                <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>

                                            <td>
                                                Chadengle
                                            </td>

                                            <td>
                                                <a href="#">chadengle@dummy.com</a>
                                            </td>

                                            <td>
                                                <b><a href="" class="text-dark"><b>568</b></a> </b>
                                            </td>

                                            <td>
                                                01/11/2003
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox3" type="checkbox">
                                                    <label for="checkbox3"></label>
                                                </div>

                                                <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>

                                            <td>
                                                Stillnotdavid
                                            </td>

                                            <td>
                                                <a href="#">stillnotdavid@dummy.com</a>
                                            </td>
                                            <td>
                                                <b><a href="" class="text-dark"><b>201</b></a> </b>
                                            </td>

                                            <td>
                                                12/11/2003
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox4" type="checkbox">
                                                    <label for="checkbox4"></label>
                                                </div>

                                                <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>

                                            <td>
                                                Kurafire
                                            </td>

                                            <td>
                                                <a href="#">kurafire@dummy.com</a>
                                            </td>

                                            <td>
                                                <b><a href="" class="text-dark"><b>56</b></a> </b>
                                            </td>

                                            <td>
                                                14/11/2003
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5"></label>
                                                </div>

                                                <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>

                                            <td>
                                                Shahedk
                                            </td>

                                            <td>
                                                <a href="#">shahedk@dummy.com</a>
                                            </td>

                                            <td>
                                                <b><a href="" class="text-dark"><b>356</b></a> </b>
                                            </td>

                                            <td>
                                                20/11/2003
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-primary m-r-15">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6"></label>
                                                </div>

                                                <img src="assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>

                                            <td>
                                                Adhamdannaway
                                            </td>

                                            <td>
                                                <a href="#">adhamdannaway@dummy.com</a>
                                            </td>

                                            <td>
                                                <b><a href="" class="text-dark"><b>956</b></a> </b>
                                            </td>

                                            <td>
                                                24/11/2003
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end col -->


        </div>

        <!-- end row -->

    </div>
</div>