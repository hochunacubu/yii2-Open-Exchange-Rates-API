<?php

/* @var $this yii\web\View */
/* @var $item */

use yii\helpers\Url;

$this->title = 'News';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2><?= $item['title']; ?></h2>
                <p><?= $item['content']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo Url::to(['news/']); ?>" class="btn btn-info">Back</a>
            </div>
        </div>

    </div>
</div>
