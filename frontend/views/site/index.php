<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>

<div class="wrapper" style="padding-top: 126px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel btn-twitter social-feed-box">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-7" style="padding-top: 60px; padding-left: 120px;">
                            <h1 class="text-white">Sistem Pendukung Keputusan Penentuan <b>MacBook Bekas</b></h1>
                            <p>Powerfull and Stylis to find MacBook</p>
                            <div class="button-list" style="padding-top: 20px; padding-bottom: 80px;">
                                <button type="button" class="btn btn-default btn-rounded waves-effect waves-light">Find MacBook
                                    <span class="btn-label btn-rounded btn-label-right"><i class="fa fa-arrow-right"></i>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-custom  btn-rounded btn-info waves-effect waves-light">Info</button>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= Url::to('@web/menu/assets/images/mac01.png') ?>" style="padding-top: 30px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="m-b-15">
                    <?=
                    ListView::widget([
                        'dataProvider' => $dataprovider,
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
        </div>
    </div>