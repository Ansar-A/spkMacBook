<?php

/** @var yii\web\View $this */

use kartik\checkbox\CheckboxX;
use kartik\grid\CheckboxColumn;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\Firs $model */

// var_dump($model->getErrors());
// die();

$this->title = 'Firs';
?>
<html>

<head>
    <style>
        /* basic style definition */
        /* •••••••••••••••••••••••••••••••• */

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }


        h1 {
            margin: 0;
            user-select: none;
            text-align: center;
            font-weight: 300;
        }


        p,
        {
        font-weight: 300;
        color: #546E7A;
        user-select: none;
        text-align: center;
        margin: 0;
        }


        a {
            text-align: center;
            text-decoration: none;
            color: #FFF;
        }

        /* Navigation menu */
        /* •••••••••••••••••••••••••••••••• */

        .menu {
            position: fixed;
            width: 100vw;
            pointer-events: none;
            margin-top: 10vh;
            text-align: center;
            z-index: 2;
        }

        /* Menu link item */
        .menu__link {
            display: inline-block;
            text-decoration: none;
            border: 2px solid #263238;
            color: #263238;
            pointer-events: auto;
            line-height: 40px;
            position: relative;
            padding: 0 50px;
            box-sizing: border-box;
            margin: 0;
            user-select: none;
            overflow: hidden;
            border-radius: 50px;

            &::before {
                content: attr(data-hover);
                background-color: #263238;
                color: #FFF;
                position: absolute;
                top: 100%;
                bottom: 0;
                left: 0;
                transition: all 300ms cubic-bezier(0.190, 1.000, 0.560, 1.000);
                right: 0;
            }


            &:hover::before {
                top: 0;
            }
        }

        /* Panels Style*/
        /* •••••••••••••••••••••••••••••••• */

        /* Common panel style */
        .panel {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            overflow: auto;
            z-index: 999;
            color: #000;
            box-sizing: border-box;
            background-color: #ECEFF1;
        }


        /* panel content (only for animation delay after open) */
        .panel__content {
            opacity: 0;
            will-change: margin-top;
            transition: all 700ms;
            transition-delay: 600ms;
            padding: 100px 200px;
            margin-top: -5%;
        }

        /* Panel content animation after open */
        .panel:target .panel__content {
            opacity: 1;
            margin-top: 0;
        }


        /*  Specific "Home "panel */
        /* •••••••••••••••••••••••••••••••• */

        .panel#home {
            z-index: 1;
            background-image: linear-gradient(to right,
                    #667eea,
                    #8e37d7);
        }


        /*  Specific panel "Slice" */
        /* •••••••••••••••••••••••••••••••• */

        .panel#slice {
            background-color: #2B66AF;
            transition: all 800ms cubic-bezier(0.190, 1.000, 0.560, 1.000);
            transform: translate3d(0, -100%, 0);
        }

        .panel#slice:target {
            transform: translate3d(0, 0, 0);
        }
    </style>
</head>

</html>

<div class="panel" id="home">
    <h1 style="color: #FFF;">SPK MacBook Bekas</h1>
</div>
<a href="<?= Url::to(['site/login']) ?>">
    <div class="panel" id="slice">
        <div class="panel__content" style="color: #FFF;">
            - LOGIN -
        </div>
    </div>
</a>
<div class="menu">
    <a class="menu__link" href="<?= Url::to('site/login') ?>" data-hover="Slice">go to LOGIN</a>
</div>