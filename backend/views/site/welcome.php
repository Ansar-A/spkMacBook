<?php

/** @var yii\web\View $this */

use yii\helpers\Url;


$this->title = 'Landing Page';
?>
<html>

<head>
    <style>
        .bg-custom {
            background-image: linear-gradient(to right,
                    #667eea,
                    #8e37d7);
            box-shadow: 0 1px 5px 0 rgba(116, 79, 168, 0.75);
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .card-box {
            border-top-left-radius: 50px;
            border-bottom-right-radius: 30px;
        }

        .bn632-hover {
            width: 170px;
            font-size: 14px;
            font-weight: 450;
            color: #fff;
            cursor: pointer;
            margin: 5px;
            height: 45px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:hover {
            background-position: 100% 0;
            moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:focus {
            outline: none;
        }

        .bn632-hover.bn20 {
            background-image: linear-gradient(to right,
                    #667eea,
                    #764ba2,
                    #6b8dd6,
                    #8e37d7);
            box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
        }
    </style>
</head>

</html>

<div class="wrapper-page">
    <a href="<?= Url::to(['site/login']) ?>">
        <div class="card-box">
            <div class="profile-widget text-center">
                <div class="bg-custom bg-profile"></div>
                <img src="<?= Url::to('@web/' . Yii::$app->user->identity->photo) ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
                <p></p>
                <p class="text-muted" style="padding-bottom: 20px;">
                    <font> Welcome to SPK MacBook Bekas</font>
                </p>
                <p></p>
            </div>
        </div>
    </a>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                <font>Selamat datang <b><?= Yii::$app->user->identity->username ?></b>! Kami yakin Anda akan unggul dalam pekerjaan dan mencapai banyak hal hebat!</font>
            </p>
        </div>
    </div>
</div>