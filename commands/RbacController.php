<?php
/**
 * Created by PhpStorm.
 * User: c205
 * Date: 20.06.2018
 * Time: 13:44
 */

namespace app\commands;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionRun()
    {
       $am = \Yii::$app -> authManager;

       $admin = $am->createRole('admin');

       $am->add($admin);

       $adminModule = $am->createPermission('adminModule');

       $am->add($adminModule);


       $am->addChild($admin, $adminModule);

       $am->assign($admin, 3);

    }
}