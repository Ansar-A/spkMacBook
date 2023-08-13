<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\WelcomeAsset;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

WelcomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="widescreen">
    <?php $this->beginBody() ?>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <main>
        <?= $content ?>
    </main>
    <script>
        var resizefunc = [];
    </script>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
