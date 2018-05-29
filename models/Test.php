<?php
/**
 * Created by PhpStorm.
 * User: c205
 * Date: 29.05.2018
 * Time: 14:13
 */

namespace app\models;


use yii\base\Model;

class Test extends Model
{
    public $title;
    public $content;


    public function rules()
    {
        return [
            [['title','content'], 'safe'],

        ];
    }

}