<?php
/**
 * Created by PhpStorm.
 * User: c205
 * Date: 28.05.2018
 * Time: 11:25
 */

namespace app\controllers;

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

}