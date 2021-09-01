<?php

namespace app\controllers\admin;

use yii\web\Controller;
use yii\helpers;

class UserController extends Controller
{
    public function actionUserList()
    {
        return $this->render('userList');
    }
}