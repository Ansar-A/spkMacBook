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
    <div class="card-box">
        <div class="profile-widget text-center">
            <div class="bg-custom bg-profile"></div>
            <img src="<?= Url::to('@web/purple/assets/images/users/mac.png') ?>" class="thumb-lg img-circle img-thumbnail" alt="img">
            <p></p>
            <p class="text-muted" style="padding-bottom: 30px; padding-top:20px;">
                Welcome to SPK MacBook Bekas
            </p>
            <div class="form-group text-center" style="padding-bottom: 20px;">
                <a href="https://mail.google.com/mail/u/0/#inbox" type="button" class="bn632-hover bn20 btn-lg">
                    <font style="font-size: small;">Cek Email</font>
                </a>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>
                    Selamat datang untuk Anda! Silahkan periksa email anda dan login pada form yang disediakan!
                </p>
            </div>
        </div>
    </div>

</div>