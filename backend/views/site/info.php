<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Info';
?>
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-color panel-custom">
                    <div class="panel-heading" style="padding-top: 0px; padding-bottom: 0px;">
                        <ol class="breadcrumb" style="padding-top: 2px; padding-bottom: 10px;">
                            <li>
                                <h4 class="page-title text-white">Info</h4>
                            </li>
                            <li><a href="<?= Url::to(['site/home']) ?>">Home</a></li>
                            <li class="text-white">Panel Info</li>
                        </ol>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="panel-footer">
                        Uin Alauddin Makassar.2019
                    </div>
                </div>
            </div>
        </div><!-- Row -->


    </div> <!-- container -->

</div>