<?php

use common\models\SpkKelayakan;
use common\models\User;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
?>
<html>

<head>
    <style>
        .card {
            height: 157px;
            width: 100%;
            position: relative;
            transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
            border-radius: 5px;
            box-shadow: 0 0 20px 2px #DBDBDBBB;
            overflow: hidden;
        }

        /*Image*/
        .card-image {
            height: 100%;
            width: 100%;
            position: absolute;
            transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
            background: #0a3394;
            background: linear-gradient(to top, #0a3394, #714ABA);
        }

        /*Description */
        .card-description {
            display: flex;
            position: absolute;
            gap: .5em;
            flex-direction: column;
            background-color: #FFFFFF;
            color: #212121;
            height: 100%;
            bottom: 0;
            border-radius: 5px;
            transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
            padding: 1rem;
        }

        /*Text*/
        .text-title {
            font-size: 1.3rem;
            font-weight: 700;
        }

        .text-body {
            font-size: 1rem;
            line-height: 130%;
        }


        /* Hover states */
        .card:hover .card-description {
            transform: translateY(100%);
        }
    </style>
</head>

</html>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['spk-kelayakan/index']) ?>">SPK Kelayakan</a>
                    </li>
                    <li class="active">
                        Upload
                    </li>
                </ol>
            </div>
        </div>

        <div class="card-box">
            <div class="row">
                <div class="col-sm-12">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                    <?= $form->field($model, 'importFile')->widget(FileInput::className(), [
                        // 'options' => ['accept' => 'photos/*'],
                        'pluginOptions' => [
                            'showRemove' => false,
                            'showUpload' => false,
                            'showCancel' => false,
                            'browseLabel' => '',
                            'removeLabel' => '',
                            'mainClass' => 'input-group-lg',
                            'fileimageuploaded' => true,
                        ]
                    ])->label('');
                    ?>
                    <!-- <?= $form->field($model, 'importFile')->fileInput() ?> -->
                    <!-- <button type="button" class="btn btn-dropbox waves-effect waves-light">
                <span class="btn-label"><i class="fa fa-dropbox"></i> </span>Submit
            </button> -->
                    <button class="btn btn-dropbox waves-effect waves-light"><span class="btn-label"><i class="glyphicon glyphicon-download-alt"></i> </span>Submit</button>

                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>