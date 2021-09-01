<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
        $this->registerJsFile('@web/js/common.js', [
                'depends' => 'yii\web\YiiAsset',
        ]);
    ?>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <p class="navbar-brand">Open Exchange Rates API</p>
        </div>
    </nav>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container main">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="<?= Url::to(['rates/index']); ?>">rates latest</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= Url::to(['rates/test-ajax']); ?>">work with ajax</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?= Url::to(['rates/test-form']); ?>">work with model</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
