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
        $userId = \Yii::$app->user->getId();
        $calendar = array_fill_keys(range(1, date("t")), []);

        foreach (Task::getByCurrentMonth($userId) as $task) {
            $date = \DateTime::createFromFormat("Y-m-d H:i:s", $task->date);
            $calendar[$date->format("j")][] = $task;
        }

        return $this->render('index',['calendar' => $calendar]);
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