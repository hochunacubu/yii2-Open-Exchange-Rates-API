<?php


namespace app\controllers;

use yii\web\Controller;
use Yii;
use yii\helpers\VarDumper;
use app\models\News;

class NewsController extends Controller
{
    //public $layout = 'baseApi';

    public function actionIndex()
    {
        $list = News::getNewsList();

        return $this->render('index', compact('list'));
    }

    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $item = News::getNewsById($id);

        return $this->render('view', compact('item'));
    }
}