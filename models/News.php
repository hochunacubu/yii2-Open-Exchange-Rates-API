<?php


namespace app\models;

use yii\base\Model;

class News extends Model
{
    public function getNewsList()
    {
        $sql = 'SELECT * FROM news';

        return \Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getNewsById(int $id)
    {
        $sql = 'SELECT * FROM news WHERE id = ' . $id;

        return \Yii::$app->db->createCommand($sql)->queryOne();
    }
}