<?php

/** @var yii\web\View $this */

use common\models\LikeProduk;
use common\models\Pengguna;
use common\models\Produk;
use common\models\User;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use yii\helpers\Url;

$this->title = 'My Yii Application';

$totalPengguna = Pengguna::find()->count();
$totalProduk = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id])->count();
$totalServicer = User::find()->count();

$total = [];
foreach ($ts as $produk) {
    $total[] = $produk["total"];
}
$nama = [];
foreach ($namaProduk as $namaP) {
    $nama[] = $namaP->nama_produk;
}
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
                            <div class="col-md-8" style="padding-left: 20px;">
                                <h1 class="text-custom">Welcome</h1>
                                <p>
                                    Selamat datang di <b>Sistem Pendukung Keputusan Penentuan MacBook Bekas Layak Pakai</b>.
                                <p>“Dunia ini ibarat bayangan. Kalau kau berusaha menangkapnya, ia akan lari. Tapi kalau kau membelakanginya, ia tak punya pilihan selain mengikutimu” <b>Qayyim Al Jauziyyah</b></p>
                                </p>
                                <p>
                                    <a href="https://api.whatsapp.com/send?phone=6282347626103&text=Write yout Message" class="btn btn-info  btn-rounded btn-sm waves-effect waves-light">Contact Us
                                        <span class="btn-label btn-rounded  btn-label-right"><i class="fa fa-info"></i>
                                        </span>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-4" style="padding-right: 20px;">
                                <div class=" row">
                                    <div class="col-sm-12"></div>
                                    <img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= Url::to('@web/purple/assets/images/statistics.svg') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8" style="padding-right: 0px;">
                    <div class="col-sm-4">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-people text-primary" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                            <h2 class="m-0 text-dark counter font-600"><?php echo $totalServicer ?></h2>
                            <div class="text-muted m-t-5">Servicer</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-assessment text-info" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                            <h2 class="m-0 text-dark counter font-600"><?php echo $totalProduk ?></h2>
                            <div class="text-muted m-t-5">Product</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-person text-success" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                            <h2 class="m-0 text-dark counter font-600"><?php echo $totalPengguna ?></h2>
                            <div class="text-muted m-t-5">Pengguna</div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card-box">
                            <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                            <h4 class="m-t-0 header-title"><b>Total Produk</b></h4>
                            <p class="text-muted m-b-15 font-13">Total MacBook berdasarkan nama Produk MacBook Bekas</p>
                            <?php echo ChartJs::widget([
                                'type' => 'doughnut',
                                //'id' => 'doughnut',
                                'options' => [
                                    'height' => 250,
                                    'width' => 500,
                                ],
                                'data' => [
                                    'radius' =>  "90%",
                                    'labels' => $nama,
                                    'datasets' => [
                                        [
                                            'label' => 'My First Dataset',
                                            'data' => $total,
                                            'backgroundColor' =>
                                            [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255, 205, 86)',
                                                'rgb(200, 205, 86)',
                                                'rgb(190, 244, 86)',
                                                'rgb(92, 205, 86)',
                                            ],
                                            'borderColor' =>  [
                                                '#fff',
                                                '#fff',
                                                '#fff',
                                                '#fff',
                                                '#fff',
                                                '#fff',
                                            ],
                                            'hoverOffset' => 6,
                                            'borderWidth' => 1,
                                            'hoverBorderColor' => ["#999", "#999", "#999", "#999", "#999", "#999"],
                                        ]
                                    ]
                                ],
                                // 'config' => [
                                //     'type' => 'doughnut',
                                //     'data' => 'data'
                                // ]
                                // 'clientOptions' => [
                                //     'legend' => [
                                //         'display' => false,
                                //         'position' => 'bottom',
                                //         'labels' => [
                                //             'fontSize' => 14,
                                //             'fontColor' => "#425062",
                                //         ]
                                //     ],
                                //     'tooltips' => [
                                //         'enabled' => true,
                                //         'intersect' => true
                                //     ],
                                //     'hover' => [
                                //         'mode' => false
                                //     ],
                                //     'maintainAspectRatio' => false,

                                // ],

                            ]) ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4" style="padding-right: 20px;">
                    <div class="card-box p-0">
                        <div class="profile-widget text-center">

                            <img src=" <?php echo Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="thumb-lg img-circle img-thumbnail" alt="img" style="margin-top: 20px;">
                            <h4><?php echo Yii::$app->user->identity->username ?></h4>
                            <a href="<?= Url::to(['user/index']) ?>" class="btn btn-sm btn-info m-t-20">More</a>
                            <p class="m-t-10 text-muted p-20"><?php echo Yii::$app->user->identity->tentang ?></p>
                            <!-- <ul class="list-inline widget-list clearfix">
                                <li class="col-md-6">
                                    <h6>Contact</h6>
                                    <h5><?php echo Yii::$app->user->identity->hp ?></h5>
                                </li>
                                <li class="col-md-6">
                                    <h6>Email</h6><?php echo Yii::$app->user->identity->email ?>
                                </li>
                            </ul> -->
                        </div>
                        <div class="panel-footer">
                            <h6 class="text-dark text-center"><?php echo Yii::$app->user->identity->email ?></h6>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>