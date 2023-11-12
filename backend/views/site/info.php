<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Info';
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="ti-help"></i></a>
                    </li>
                    <li class="active">
                        Info
                    </li>
                </ol>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-border panel-custom">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <p>
                            Aplikasi Sistem Pendukung Keputusan (DSS) Penentuan MacBook Bekas Layak Pakai merupakan aplikasi yang dapat digunakan untuk menentukan MacBook bekas yang paling sesuai berdasarkan kualitas dengan tolak ukur budget yang disediakan.
                        </p>

                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>