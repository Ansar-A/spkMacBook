<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\VerifyEmailAsset;
use yii\helpers\Html;


VerifyEmailAsset::register($this);
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

<body>
    <?php $this->beginBody() ?>
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
