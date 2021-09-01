<?php


namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;

    public $email;

    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Your name',
            'email' => 'Your e-mail',
            'text' => 'Your message',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
        ];
    }
}