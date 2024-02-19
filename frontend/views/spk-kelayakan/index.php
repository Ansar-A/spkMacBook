<?php

use yii\widgets\LinkPager;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var frontend\models\SpkKelayakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Spk Kelayakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>

<head>
    <style>
        .custom-pagination-container {
            text-align: center;
            /* Sesuaikan dengan jumlah padding yang diinginkan */
        }
    </style>
</head>

</html>
<section class="post-wrapper-top">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right" style="padding-top: 15px;">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
</section>
<section class="section1">
    <div class="container clearfix">
        <div class="content pull-right col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="padding-top: 0px;">
            <div class="card-box">
                <div class="general-title text-center">
                    <p>All item from SPK MacBook</p>
                    <hr>
                </div>
                <div class="portfolio-centered">
                    <div class="recentitems portfolio">
                        <?=
                        ListView::widget([
                            'dataProvider' => $dataProvider,
                            'options' => [
                                'tag' => 'div',
                                'class' => 'row',
                            ],
                            'layout' => '{items}',
                            // 'options' => ['class' => 'custom-pagination-container'],
                            'itemView' => '_list_item',
                            'itemOptions' => ['tag' => null],
                            'summary' => true,
                        ]);
                        ?>
                    </div>
                    <div class="custom-pagination-container">
                        <?php echo LinkPager::widget([
                            'pagination' => $dataProvider->getPagination(),
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>