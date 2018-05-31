<?php
/**
 * Created by PhpStorm.
 * User: c205
 * Date: 28.05.2018
 * Time: 11:25
 */

namespace app\controllers;

use app\models\tables\User;
use app\models\Test;
use yii\web\Controller;

class TaskController extends Controller
{
        public function actionIndex ()
    {
        $model = new Test ();

        $model->attributes = ['title'=>'Test', 'content'=>'Test',];

        var_dump($model->validate());
        var_dump($model->getErrors());
        exit;
    }

    public function actionArUser ()
    {
          /*$user = new User();
          $user->login = "Dog";
          $user->password = md5("123456");
          $user->first_name = "Пес";
          $user->last_name = "Шариков";
          $user->email = "dog@mail.ru";
          $user->save();*/

          /*$res = User::find()
              ->select('login')
              ->where(['login = Dog']);
              var_dump($res);*/

//          var_dump(User::getUser());
    }

}