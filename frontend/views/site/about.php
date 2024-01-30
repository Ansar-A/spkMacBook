<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="section1">
    <div class="container clearfix">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="general-title text-center">
                <h3>ABOUT Application</h3>
                <p>Learn more about us</p>
                <hr>
            </div>
            <div class="divider"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="he-wrap tpl2">
                    <img src="<?= Url::to('@web/max/img/office.jpeg') ?>" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>Aplikasi website Sistem Pendukung Keputusan MacBook Bekas merupakan aplikasi yang dapat digunakan dalam mencari MacBook bekas dengan spesifikasi terbaik, performa, kondisi, ketahanan dan keamanan MacBook yang di inginkan</p>

                <p>Metode yang digunakan untuk penentuan kualitas MacBook menggunakan Metode Regresi Linear Berganda.</p>

                <p>Produk MacBook yang disajikan merupakan produk dengan kategori bekas yang memiliki tingkat kelayakan yang berbeda-beda.</p>

                <p>Dengan menggunakan apliasi ini anda dapat menghemat waktu untuk mencari informasi mengenai MacBook bekas yang anda inginkan.</p>
            </div>
        </div>
    </div>
</section>