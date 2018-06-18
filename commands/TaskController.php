<?php

namespace app\commands;
use app\models\tables\Task;
use yii\console\Controller;

class TaskController extends Controller
{

    public function actionTime()
    {
        if (!$models = Task::find()->
        where(['between', 'day(date)', (date('d') - 1), date('d')])
            ->andWhere(['year(date)' => date('Y')])-> andWhere(['month(date)' => date('m')])
            ->all()) {
            return Controller::EXIT_CODE_ERROR;
        }
        foreach ($models as $model) {
            echo "Task: {$model->id}
                 Period: {$model->date}. 
                 User: {$model->user->username}. 
                 email: {$model->user->email}. \n";
        }
        return Controller::EXIT_CODE_NORMAL;
    }
}