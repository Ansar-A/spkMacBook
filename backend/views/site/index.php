<?php

/** @var yii\web\View $this */

use common\models\Pengguna;
use common\models\Produk;
use common\models\SpkKelayakan;
use common\models\User;
use dosamigos\chartjs\ChartJs;
use yii\helpers\Url;

$this->title = 'My Yii Application';

$totalPengguna = Pengguna::find()->count();
if (\Yii::$app->user->can('SuperAdmin')) {
    $totalProduk = Produk::find()->count();
} else {
    $totalProduk = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id])->count();
}
// $totalProduk = SpkKelayakan::find()->count();
// $totalProduk = Produk::find()->where(['id_servicer' => Yii::$app->user->identity->id])->count();
$totalServicer = User::find()->count();

$total = [];
foreach ($ts as $produk) {
    $total[] = $produk['total'];
}
$nama = [];
foreach ($namaProduk as $namaP) {
    $nama[] = $namaP->jenis;
}

?>
<html>

<head>

    <style>
        /* Card Styles */
        .widget-panel {
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }

        .card-box {
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }

        .card {
            box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
            width: 100%;
            height: 400px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* background-color: rgba(113, 113, 113, 0.6);
            backdrop-filter: blur(20px); */
            text-align: center;
            /* border: 1px solid #FFFFFF; */
            /* Transform Propertys */
            --rotate-animation: rotate(45deg);
            --scale-animation: scale(0);
            /* Backgrounds - Social Media Hover */
            --bg-facebook: blue;
            --bg-instagram: linear-gradient(to right, #8a2387, #e94057, #f27121);
            --bg-twitter: rgb(25, 173, 206);
            --bg-linkedin: rgb(30, 48, 131);

        }

        .card::before {
            content: '';
            height: 110%;
            width: 110%;
            position: absolute;
            top: -5%;
            left: -5%;
            z-index: -1;
            background-color: default;
            border-radius: 5px;

        }

        .card__hover {
            color: #fff;
            width: 100%;
            margin: 0;
            font-size: 40px;
            font-weight: 600;
            position: absolute;
            top: 50%;
            left: 0;
            text-align: center;
            letter-spacing: 2px;
            pointer-events: none;
            transform: scale(1) translateY(-50%);
            font-family: var(--font-mulish);
            transition: transform 500ms;
        }

        .card:hover .card__hover {
            transform: scale(0);
        }

        .card__figure {
            width: 100%;
            height: 65%;
            border-radius: 10px;
            overflow: hidden;
            transform: var(--rotate-animation) var(--scale-animation);
            transition: transform 600ms ease 100ms;
        }

        .card:hover .card__figure {
            --rotate-animation: rotate(0);
            --scale-animation: scale(1);
        }

        .card__figure svg {
            height: 100%;
            width: 100%;
            object-fit: cover;
            filter: drop-shadow(0 0 2px #2E2390);
        }

        .card__info {
            display: flex;
            flex-direction: column;
            transform: var(--scale-animation);
            transition: transform 600ms ease 100ms;
        }

        .card:hover .card__info {
            --scale-animation: scale(1);
        }

        .card__name {
            color: #fff;
            font-size: 28px;
            letter-spacing: 1px;
            font-family: var(--font-AR-One-Sans);
        }

        .card__ocupation {
            color: aliceblue;
            font-family: var(--font-mulish);
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 2px;
        }

        .card__links {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
            --transform-animation: translateY(-10px);
        }

        .card__links svg {
            height: 38px;
            width: 38px;
            padding: 10px;
            background-color: rgba(128, 128, 128, 0.211);
            border-radius: 15px;
            cursor: pointer;
            transition: background .3s ease,
                transform .2s ease;
        }

        .card__links svg:hover {
            transform: var(--transform-animation);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, .5);
        }

        /* Hover Colors */
        .card__links svg:nth-child(1):hover {
            background: var(--bg-facebook);
        }

        .card__links svg:nth-child(2):hover {
            background: var(--bg-instagram);
        }

        .card__links svg:nth-child(3):hover {
            background: var(--bg-twitter);
        }

        .card__links svg:nth-child(4):hover {
            background: var(--bg-linkedin);
        }

        /* card */
        .card {

            width: 100%;
            height: 260px;
            background: linear-gradient(to top right, rgb(113, 58, 190), rgb(113, 58, 190));
            background: -webkit-linear-gradient(to top right, rgb(7 16 45), rgb(58 60 84));
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 20px;
            /* border: 1px solid rgb(84 90 106); */
        }

        .small-text,
        .title,
        .desc {
            font-weight: 600;
        }

        .title,
        .desc {
            margin: 8px 0;
        }

        .small-text {
            color: #488aec;
            font-size: 14px;
        }

        .title {
            color: #fff;
            font-size: 26px;
            line-height: 26px;
        }

        .desc {
            color: rgb(151 153 167);
            font-size: 13px;
        }

        .buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 10px;
            padding: 6px;
            text-decoration: none;
        }

        .button:first-child {
            box-shadow: 0 4px 6px -1px #488aec31, 0 2px 4px -1px #488aec17;
            background-color: #488aec;
        }

        .button:last-child {
            box-shadow: 0 4px 6px -1px #0b162531, 0 2px 4px -1px #0e192b17;
            background-color: #fff;
        }

        .icon {
            height: 25px;
            width: 25px;
        }

        .icon svg {
            width: 100%;
            height: 100%;
        }

        .icon svg:last-child {
            fill: #000
        }

        .button-text {
            display: flex;
            flex-direction: column;
            margin-left: 8px;
        }

        .button-text span:first-child {
            font-size: 12px;
            font-weight: 600;
        }

        .google span:first-child {
            color: rgb(219 206 253);
        }

        .apple span:first-child {
            color: rgb(81 87 108);
        }

        .google span:last-child {
            color: #fff;
            font-weight: 800;
        }

        .apple span:last-child {
            color: #000;
            font-weight: 800;
        }

        /* tes */
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

        * {
            box-sizing: border-box;
        }

        .courses-container {
            padding-bottom: 20px;
        }

        .course {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
            display: flex;
            max-width: 100%;
            /* margin: 20px; */
            overflow: hidden;
            width: 100%;
        }

        .course h6 {
            opacity: 0.6;
            margin: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .course h2 {
            letter-spacing: 1px;
            margin: 10px 0;
        }

        .course-preview {
            background-color: rgb(113, 58, 190);
            color: #fff;
            padding: 30px;
            max-width: 250px;
        }

        .course-preview a {
            color: #fff;
            display: inline-block;
            font-size: 12px;
            opacity: 0.6;
            margin-top: 30px;
            text-decoration: none;
        }

        .course-info {
            padding: 30px;
            position: relative;
            width: 100%;
        }

        .progress-container {
            position: absolute;
            top: 30px;
            right: 30px;
            text-align: right;
            width: 150px;
        }

        .progress {
            background-color: #ddd;
            border-radius: 3px;
            height: 5px;
            width: 300px;
        }

        .progress::after {
            border-radius: 3px;
            background: rgb(113, 58, 190);
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 5px;
            width: 100%;
        }

        .progress-text {
            font-size: 10px;
            opacity: 0.6;
            letter-spacing: 1px;
        }

        .btn {
            background-color: rgb(113, 58, 190);
            border: 0;
            border-radius: 10px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 16px;
            padding: 12px 25px;
            position: absolute;
            bottom: 30px;
            right: 30px;
            letter-spacing: 1px;
        }


        .floating-btn {
            border-radius: 10px;
            background-color: rgb(113, 58, 190);
            border: 1px solid rgb(113, 58, 190);
            box-shadow: 0 16px 22px -17px #03153B;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            line-height: 20px;
            padding: 12px 20px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }

        .floating-btn:hover {
            background-color: #ffffff;
            color: #001F61;
        }

        .floating-btn:focus {
            outline: none;
        }


        @media screen and (max-width: 480px) {

            .social-panel-container.visible {
                transform: translateX(0px);
            }

            .floating-btn {
                right: 10px;
            }
        }
    </style>
</head>

</html>
<div class="content" id="up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (Yii::$app->session->hasFlash('error')) : ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-lock"></i>Not Access !</h4>
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <div class="courses-container">
                    <div class="course">
                        <div class="course-preview">
                            <h6 style="color: white;">New</h6>
                            <h4 style="color: white;">Simple and Inovatif</h4>
                            <a href="#">View all information <i class="fa fa-exclamation"></i></a>
                        </div>
                        <div class="course-info">
                            <div class="progress-container">
                                <div class="progress"></div>
                                <span class="progress-text">
                                    <!-- 6/9 Challenges -->
                                </span>
                            </div>
                            <h6>Website</h6>
                            <h3>Sistem Pendukung Keputusan Penentuan <br>MacBook Bekas</h3>
                            <?php if (Yii::$app->user->can('SuperAdmin')) : ?>
                                <a style="height: 40px; width: 120px; padding-top:9px" type="button" class="btn" href="<?= Url::to(['spk-kelayakan/index']) ?>">Start</a>
                            <?php else : ?>
                                <a style="height: 40px; width: 120px; padding-top:9px" type="button" class="btn" href="<?= Url::to(['produk/index']) ?>">Start</a>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
                <a type="button" class="floating-btn" href="#up">
                    <i class="fa fa-sort-asc"></i>
                </a>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <?php if (Yii::$app->user->can('SuperAdmin')) : ?>
                        <div class="col-sm-4">
                            <div class="widget-panel widget-style-2 bg-white"><i class="md md-people text-primary" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                                <h2 class="m-0 text-dark counter font-600"><?php echo $totalServicer ?></h2>
                                <div class="text-muted m-t-5">Admin</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-panel widget-style-2 bg-white"><i class="md md-assessment text-info" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                                <h2 class="m-0 text-dark counter font-600"><?php echo $totalProduk ?></h2>
                                <div class="text-muted m-t-5">Product</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-panel widget-style-2 bg-white"><i class="md md-person text-success" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                                <h2 class="m-0 text-dark counter font-600"><?php echo $totalPengguna ?></h2>
                                <div class="text-muted m-t-5">Pengguna</div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-sm-6">
                            <div class="widget-panel widget-style-2 bg-white"><i class="md md-assessment text-info" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                                <h2 class="m-0 text-dark counter font-600"><?php echo $totalProduk ?></h2>
                                <div class="text-muted m-t-5">Product</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-panel widget-style-2 bg-white"><i class="md md-person text-success" style="padding-left: 20px; border-left-width: 10px; padding-right: 20px;"></i>
                                <h2 class="m-0 text-dark counter font-600"><?php echo $totalPengguna ?></h2>
                                <div class="text-muted m-t-5">Pengguna</div>
                            </div>
                        </div>
                    <?php endif ?>

                    <div class="col-sm-12">
                        <div class="card-box">
                            <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                            <?php echo ChartJs::widget([
                                'type' => 'polarArea',
                                'options' => [
                                    'height' => 240,
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
                            ]) ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="card" style="width: 100%; height: 480px; border-radius:5px;">
                        <span class="card__hover">
                            <h5 style="color: #FFFFFF;">About Me!</h5>
                        </span>
                        <figure class="card__figure" style="padding-top: 30px">
                            <img src=" <?php echo Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
                        </figure>
                        <div class="card__info">
                            <span class="card__name">
                                <h6 style="color: #FFFFFF;">"<?php echo Yii::$app->user->identity->tentang ?>"</h6>
                                <hr>
                                <h4 style="color: #FFFFFF;"><?php echo Yii::$app->user->identity->username ?></h4>
                                <p>
                                    <span class="card__ocupation">
                                        <?php if (\Yii::$app->user->can('SuperAdmin')) : ?>
                                            <h6 class="text-white">Super Admin</h6>
                                        <?php else : ?>
                                            <h6 class="text-white">Admin</h6>
                                        <?php endif ?>
                                    </span>
                                </p>

                                <div class="card__links">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: msFilter;">
                                        <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: msFilter;">
                                        <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: msFilter;">
                                        <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path>
                                    </svg>
                                </div>
                            </span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>