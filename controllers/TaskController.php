<?php
/**
 * Created by PhpStorm.
 * User: c205
 * Date: 28.05.2018
 * Time: 11:25
 */

namespace app\controllers;

use app\models\tables\Task;
use app\models\tables\User;
use app\models\Test;
use yii\web\Controller;

class TaskController extends Controller
{
        public function actionIndex ()
    {
        $model = new Test ();

        return $this->render('index',['title' => 'Test','content' => 'This is index']);
            }

   public function actionCreate()
   {
       $model = new Task();
       if ($model->load(\Yii::$app->request->post()) && $model->save()){
           $this->redirect(['task/index']);
       }
       return $this->render('create',['model'=>$model]);
   }

}