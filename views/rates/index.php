<?php

/* @var $this yii\web\View */
/* @var \app\dto\RatesLatestDto $ratesLatest */

use yii\helpers\Html;

$this->title = 'Index';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
            echo '<pre>', print_r($ratesLatest), '</pre>';
        ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
