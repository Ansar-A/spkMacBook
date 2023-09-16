<?php

use common\models\JenisProduk;
use common\models\Produk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var frontend\models\ProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="post-wrapper-top">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
</section>
<!-- end post-wrapper-top -->
<section class="section1">
    <div class="container clearfix">

        <div class="content pull-right col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="padding-top: 0px;">
            <div class="card-box">
                <nav class="portfolio-filter clearfix">
                    <ul>
                        <li><label>All Works Produk</label></li>
                        <hr>
                    </ul>
                </nav>
                <div class="portfolio-centered">
                    <div class="recentitems portfolio">
                        <?=
                        ListView::widget([
                            'dataProvider' => $dataProvider,
                            'options' => [
                                'tag' => 'div',
                                'class' => 'row',
                            ],
                            'itemView' => '_list_item',
                            'itemOptions' => ['tag' => null],
                            'summary' => false,
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>