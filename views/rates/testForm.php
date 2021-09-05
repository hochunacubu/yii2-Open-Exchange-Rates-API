<?php

/* @var $this yii\web\View */
/* @var \app\dto\RatesLatestDto $ratesLatest */
/* @var \app\models\TestForm $modelForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;

$this->title = 'Work with model';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div>
        <?php
            //dump($modelForm);
            if (Yii::$app->session->hasFlash('success')) {
                echo Yii::$app->session->getFlash('success');
            }

            if (Yii::$app->session->hasFlash('error')) {
                echo Yii::$app->session->getFlash('error');
            }
        ?>
        <?php
            $form = ActiveForm::begin();
            echo $form->field($modelForm, 'name');
            echo $form->field($modelForm, 'email')->input('email');
            echo $form->field($modelForm, 'text')->textarea(['rows' => 5]);
            echo Html::submitButton('Send', ['class' => 'btn btn-success']);
            ActiveForm::end();
        ?>
    </div>
    <code><?= __FILE__ ?></code>
</div>
