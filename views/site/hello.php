<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is hello page
    </p>

    <code><?= __FILE__ ?></code>
</div>
