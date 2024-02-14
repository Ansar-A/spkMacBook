<?php

use common\models\Produk;
use common\models\SpkKelayakan;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use common\models\User;
use kartik\editable\Editable;
use kartik\grid\EditableColumn;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var backend\models\SpkKelayakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$totalServicer = User::find()->count();
$totalProduk = SpkKelayakan::find()->count();
$this->title = 'Spk Kelayakans';
$this->params['breadcrumbs'][] = $this->title;
if (\Yii::$app->user->can('Administrator')) {
    $totalProduk = SpkKelayakan::find()->count();
} else {
    $totalProduk = SpkKelayakan::find()->where(['id_servicer' => Yii::$app->user->identity->id]);
}
?>
<html>

<head>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 49%;
            left: 46%;
            transform: translate(-1%, -10%);
            z-index: 1;
            width: auto;
            max-width: 50%;
            max-height: 50vh;
            overflow: auto;
            background-color: #fefefe;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-content {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }


        .e-card {
            /* margin: 100px auto; */
            background: transparent;
            box-shadow: 0px 8px 28px -9px rgba(0, 0, 0, 0.45);
            position: relative;
            width: 100%px;
            margin-top: 10px;
            height: 350px;
            border-radius: 5px;
            overflow: hidden;
        }

        .wave {
            position: absolute;
            width: 540px;
            height: 700px;
            opacity: 0.6;
            left: 0;
            top: 0;
            margin-left: -50%;
            margin-top: -70%;
            background: linear-gradient(744deg, #af40ff, #5b42f3 60%, #00ddeb);
        }

        .icon {
            width: 3em;
            margin-top: -1em;
            padding-bottom: 1em;
        }

        .infotop {
            text-align: center;
            font-size: 20px;
            position: absolute;
            top: 3.8em;
            left: 0;
            right: 0;
            color: rgb(255, 255, 255);
            font-weight: 600;
        }

        .name {
            font-size: 14px;
            font-weight: 100;
            position: relative;
            top: 1em;
            text-transform: lowercase;
        }

        .wave:nth-child(2),
        .wave:nth-child(3) {
            top: 210px;
        }

        .playing .wave {
            border-radius: 40%;
            animation: wave 3000ms infinite linear;
        }

        .wave {
            border-radius: 40%;
            animation: wave 55s infinite linear;
        }

        .playing .wave:nth-child(2) {
            animation-duration: 4000ms;
        }

        .wave:nth-child(2) {
            animation-duration: 50s;
        }

        .playing .wave:nth-child(3) {
            animation-duration: 5000ms;
        }

        .wave:nth-child(3) {
            animation-duration: 45s;
        }

        @keyframes wave {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .card {
            height: 157px;
            width: 230px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
            border-radius: 5px;
            box-shadow: 0 0 20px 8px #DBDBDBBB;
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
    <?php
    $script = <<< JS
    $(document).ready(function(){
        // Function to center the modal
        function centerModal() {
            var modal = $('#previewModal');
            modal.css('margin-top', -modal.height() / 2);
            modal.css('margin-left', -modal.width() / 2);
        }

        // Event handler for clicking on an image
        $('body').on('click', '.previewImage', function(){
            var imagePath = $(this).attr('src');
            var modalHtml = '<div id="previewModal" class="modal"><span class="close">&times;</span><img class="modal-content" src="'+imagePath+'"></div>';
            
            // Append the modal HTML to the body
            $('body').append(modalHtml);
            
            // Show the modal
            $('#previewModal').css('display', 'block');

            // Center the modal
            centerModal();
            
            // Close the modal when clicking on the close button or outside the image
            $('.close, #previewModal').click(function() {
                $('#previewModal').remove();
            });

            // Recenter the modal on window resize
            $(window).on('resize', centerModal);
        });
    });
JS;
    // Register the script
    $this->registerJs($script);
    ?>


    <div class="container">
        <div class="row">
            <?php if (Yii::$app->session->hasFlash('success')) : ?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i>Success!</h4>
                    <?= Yii::$app->session->getFlash('success') ?>
                </div>
            <?php endif; ?>
            <div class="col-sm-12">
                <?php if (Yii::$app->session->hasFlash('error')) : ?>
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i>Access!</h4>
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-desktop"></i></a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['spk-kelayakan/index']) ?>">SPK Kelayakan</a>
                    </li>
                    <li class="active">
                        Index
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="spk-kelayakan-index">
                        <p class="text-right">
                        <div class="row">
                            <div class="col-sm-4 pull-right">
                                <?php if (\Yii::$app->user->can('Administrator')) : ?>
                                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                                <?php else : ?>
                                <?php endif ?>
                            </div>
                            <div class="col-sm-7">
                                <?= Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                        </p>
                        <p></p>

                        <?php if (\Yii::$app->user->can('Administrator')) : ?>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                // 'filterModel' => $searchModel,
                                //'responsive' => true,
                                'headerRowOptions' => ['class' => 'table m-0'],
                                'filterRowOptions' => ['class' => 'table m-0'],
                                'striped' => false,
                                'hover' => true,
                                'resizableColumns' => true,
                                'persistResize' => true,
                                'floatHeader' => true,
                                //'bootstrap' => true,
                                //'bordered' => false,
                                //'condensed' => false,
                                //'responsiveWrap' => false,
                                //'containerOptions' => false,
                                //'perfectScrollbar' => false,
                                //'summary' => '',
                                //'showPageSummary' => true,
                                //'summary' => 'Showing <b>{begin}-{end}</b> of <b>{totalCount}</b> Pengguna',
                                //'summaryOptions' => ['class' => 'summary'],
                                //'showPageSummary' => true,
                                'columns' => [
                                    [
                                        'class' => 'yii\grid\SerialColumn',
                                        'header' => 'No',
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                    ],
                                    [
                                        'attribute' =>  'get_produk',
                                        'label'  => 'ID Mac',
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                        'value' => function ($model) {
                                            return $model->produk->id;
                                        }
                                    ],
                                    [
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'get_produk',
                                        'label' => 'Photo',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $imagePath = '@web/' . $model->produk->photo;
                                            $uniqueId = 'previewImage_' . $model->id_kelayakan; // Gunakan ID dinamis yang unik
                                            return Html::img($imagePath, ['style' => 'max-width:100px; max-height:100px; border-radius: 5%;', 'class' => 'previewImage', 'data-id' => $uniqueId]);
                                        }
                                    ],
                                    [
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'produk.user.username',
                                        'label' => 'Toko',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    [
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        // 'attribute' => 'get_produk',
                                        'attribute' => 'produk.nama_produk',
                                        'label'  => 'Produk',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search Produk...',
                                        ],
                                        // 'value' => function ($model) {
                                        //     return $model->produk->nama_produk;
                                        // },

                                    ],

                                    // [
                                    //     'contentOptions' => ['style' => 'text-align:center'],
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //     'attribute' => 'dataR',
                                    //     'label' => 'R Square',
                                    //     'filterInputOptions' => [
                                    //         'class'       => 'form-control',
                                    //         'placeholder' => 'Search...',
                                    //     ],
                                    // ],


                                    [
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'dataR',
                                        'label' => 'R Square',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],

                                    // [
                                    //     'contentOptions' => ['style' => 'text-align:center'],
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //     'attribute' => 'dataF',
                                    //     'label' => 'F',
                                    //     'filterInputOptions' => [
                                    //         'class'       => 'form-control',
                                    //         'placeholder' => 'Search...',
                                    //     ],
                                    // ],
                                    // [
                                    //     'attribute' => 'produk.user.role',
                                    //     'contentOptions' => ['style' => 'text-align:center'],
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //     'label' => 'Role User'
                                    // ],
                                    // [
                                    //     'contentOptions' => ['style' => 'text-align:center'],
                                    //     'headerOptions' => ['class' => 'text-center'],
                                    //     'attribute' => 'produk.status_produk',
                                    //     'label' => 'Status SPK',
                                    //     'filterInputOptions' => [
                                    //         'class'       => 'form-control',
                                    //         'placeholder' => 'Search...',
                                    //     ],
                                    // ],

                                    [
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'label' => 'Nilai',
                                        'format' => 'raw',
                                        'value' => function ($model) {
                                            $pdfUrl = Yii::getAlias('@web/' . $model->nilai);
                                            return Html::a(
                                                '<span class="label label-table label-info">Lihat PDF</span>',
                                                $pdfUrl,
                                                ['target' => '_blank']
                                            );
                                        }
                                    ],
                                    // ubah juga di Produk
                                    [
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center; vertical-align: middle;'],
                                        'attribute' => 'status_produk',
                                        'format' => 'raw',
                                        'label' => 'Status',
                                        'filter' => ['Finish' => "Finish", 'Unprocessed' => "Unprocessed"],
                                        'value' => function ($data, $key, $index, $column) {
                                            if ($data->produk->status_produk == 'Finish') {
                                                return '<span class="label label-table label-success">Finish</span>';
                                            } elseif ($data->produk->status_produk == 'Unprocessed') {
                                                return '<span class="label label-table label-danger">Unprocessed</span>';
                                            }
                                        },
                                    ],
                                    [
                                        'class' => '\kartik\grid\ActionColumn',
                                        'template' => '{view} {update}',
                                        'header' => 'Action',
                                        //'contentOptions' => ['style' => 'max-width:20px;'],
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'id_kelayakan' => $model->id_kelayakan], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            'update' => function ($url, $model) {

                                                return Html::a('', ['update', 'id_kelayakan' => $model->id_kelayakan], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'id_kelayakan' => $model->id_kelayakan], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                    'data' => [
                                                        'confirm' => 'Yakin ingin menghapus item ini?',
                                                        'method' => 'post',
                                                    ],
                                                ]);
                                            },
                                        ],
                                    ],
                                ],
                                'toolbar' => [
                                    // Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-success']),
                                    Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
                                    // '{export}',
                                    '{toggleData}',
                                    // Html::a('<i class="md md-person-add"></i>', ['create'], [
                                    //     'type' => 'button',
                                    //     'class' => 'btn btn-success'
                                    // ]),
                                    // [
                                    //     'content' =>
                                    //     Html::button('<i class="md md-my-library-add"></i>', [
                                    //         'type' => 'button',
                                    //         'class' => 'btn btn-success'
                                    //     ]) . ' ' .
                                    //         Html::a('<i class="md md-redo"></i>', ['grid-demo'], [
                                    //             'class' => 'btn btn-secondary btn-default',
                                    //         ]),
                                    // ],

                                ],
                                'panel' => [
                                    'heading' => false,
                                    //'heading' => '<div class="portlet-heading portlet-default"><i class="md-folder-shared"></i></div>',
                                    'type' => 'default',
                                    // 'before' => Html::a('<i class="md-add-box"></i> Add SPK', ['create'], ['class' => 'btn btn-primary waves-effect waves-light']),
                                    //'before' => Html::a('<i class="glyphicon glyphicon-import"></i> Import', ['upload'], ['class' => 'btn btn-primary waves-effect waves-light']),
                                    // 'after' => Html::a('<i class="fas fa-redo"></i> Info Adjusted R Square', ['index'], ['class' => 'btn btn-info']),
                                    // 'footer' => false
                                ],
                            ]); ?>
                        <?php else : ?>
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                // 'filterModel' => $searchModel,
                                //'responsive' => true,
                                'headerRowOptions' => ['class' => 'table m-0'],
                                'filterRowOptions' => ['class' => 'table m-0'],
                                'striped' => false,
                                'hover' => true,
                                'resizableColumns' => true,
                                'persistResize' => true,
                                'floatHeader' => true,
                                //'bootstrap' => true,
                                //'bordered' => false,
                                //'condensed' => false,
                                //'responsiveWrap' => false,
                                //'containerOptions' => false,
                                //'perfectScrollbar' => false,
                                //'summary' => '',
                                //'showPageSummary' => true,
                                //'summary' => 'Showing <b>{begin}-{end}</b> of <b>{totalCount}</b> Pengguna',
                                //'summaryOptions' => ['class' => 'summary'],
                                //'showPageSummary' => true,
                                'columns' => [
                                    [
                                        'class' => '\kartik\grid\ActionColumn',
                                        'template' => '{view} {update}',
                                        'header' => 'Action',
                                        //'contentOptions' => ['style' => 'max-width:20px;'],
                                        'buttons' => [
                                            'class' => 'btn btn-primary dropdown-toggle',
                                            'view' => function ($url, $model) {
                                                return Html::a('', ['view', 'id_kelayakan' => $model->id_kelayakan], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-info btn-sm glyphicon glyphicon-eye-open'
                                                ]);
                                            },
                                            'update' => function ($url, $model) {

                                                return Html::a('', ['update', 'id_kelayakan' => $model->id_kelayakan], ['class' => 'btn btn-icon waves-effect waves-light btn-primary btn-sm glyphicon glyphicon-pencil']);
                                            },
                                            'delete' => function ($url, $model) {

                                                return Html::a('', ['delete', 'id_kelayakan' => $model->id_kelayakan], [
                                                    'class' => 'btn btn-icon waves-effect waves-light btn-danger btn-sm glyphicon glyphicon-trash',
                                                    'data' => [
                                                        'confirm' => 'Yakin ingin menghapus item ini?',
                                                        'method' => 'post',
                                                    ],
                                                ]);
                                            },
                                        ],
                                    ],
                                    //['class' => 'yii\grid\SerialColumn'],

                                    [
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'produk.nama_produk',
                                        'label' => 'Produk',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    [
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'produk.id',
                                        'label' => 'Produk ID',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],

                                    [
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'dataR',
                                        'label' => 'R Square',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    [
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'Rsquare',
                                        // 'format' => ['formattedNilaiFloat', 2],
                                        'label' => 'Adjusted R Square',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    [
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'headerOptions' => ['class' => 'text-center'],
                                        'attribute' => 'dataF',
                                        'label' => 'F',
                                        'filterInputOptions' => [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Search...',
                                        ],
                                    ],
                                    [
                                        'headerOptions' => ['class' => 'text-center'],
                                        'contentOptions' => ['style' => 'text-align:center'],
                                        'attribute' => 'status_produk',
                                        'format' => 'raw',
                                        'label' => 'Status',
                                        'filter' => ['Finish' => "Finish", 'Unprocessed' => "Unprocessed"],
                                        'value' => function ($data) {
                                            if (isset($data->produk) && $data->produk !== 'Finish') {
                                                return '<span class="label label-table label-success">Finish</span>';
                                            } else {
                                                return '<span class="label label-table label-danger">Unprocessed</span>';
                                            }
                                        },
                                    ],
                                ],
                                'toolbar' => [
                                    Html::a('<i class="md-add-box"></i> Add Data', ['create'], ['class' => 'btn btn-success']),
                                    Html::a('<i class="ion-load-a"></i>', ['index'], ['class' => 'btn btn-default']),
                                    '{export}',
                                    '{toggleData}',

                                ],
                                'panel' => [
                                    'heading' => false,
                                    'type' => 'default',
                                    'before' => Html::a('<i class="glyphicon glyphicon-import"></i> Import', ['upload'], ['class' => 'btn btn-primary waves-effect waves-light']),

                                ],
                            ]); ?>
                        <?php endif  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>