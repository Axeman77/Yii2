<?php
/**
 * Created by PhpStorm.
 * User: c205
 * Date: 28.05.2018
 * Time: 11:25
 */

namespace app\controllers;


use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex ()
    {
            return $this->render(index);
    }

}