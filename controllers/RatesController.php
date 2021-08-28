<?php


namespace app\controllers;


use yii\web\Controller;
use app\components\RatesApiComponent;

class RatesController extends Controller
{
    public function actionIndex()
    {
        $ratesLatest = \Yii::$app->ratesApi::getRatesLatest();
        return $this->render('index', ['ratesLatest' => $ratesLatest]);
    }
}