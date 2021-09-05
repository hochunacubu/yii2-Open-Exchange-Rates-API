<?php


namespace app\controllers;


use phpDocumentor\Reflection\Types\Void_;
use yii\web\Controller;
use app\components\RatesApiComponent;
use Yii;
use yii\helpers\VarDumper;
use app\models\TestForm;

class RatesController extends Controller
{
    public $layout = 'baseApi';

    public function actionIndex()
    {
        $ratesLatest = Yii::$app->ratesApi::getRatesLatest();
        return $this->render('index', ['ratesLatest' => $ratesLatest]);
    }

    public function actionTestAjax()
    {
        if (Yii::$app->request->isAjax) {
            dump(Yii::$app->request->post());
            return 'ajax';
        }

        return $this->render('testAjax');
    }

    public function actionTestForm()
    {
        $modelForm = new TestForm();
        if ($modelForm->load(Yii::$app->request->post())) {
            if ($modelForm->validate()) {
                Yii::$app->session->setFlash('success', 'data was load');
            } else {
                Yii::$app->session->setFlash('error', 'form has errors');
            }
        }

        return $this->render('testForm', compact('modelForm'));
    }
}