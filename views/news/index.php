<?php

/* @var $this yii\web\View */
/* @var $list */
$this->title = 'News';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php
            foreach ($list as $item) {
                ?>
                <div class="col-lg-12">
                    <h2>
                        <a href="<?= Yii::$app->urlManager->createUrl([
                            'news/view',
                            'id' => $item['id']
                        ]); ?>"><?= $item['title']; ?></a>
                    </h2>
                    <p><?= $item['content']; ?></p>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
</div>
