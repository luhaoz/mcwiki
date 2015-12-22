<?php

namespace app\controllers;
use Yii;
class LoginController extends \components\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin(){
        Yii::$app->user->logout();
        $formLogin = new \app\models\auth\LoginForm();
        $formLogin->email = 'luhaoz24@sina.com';
        $formLogin->password = '1123';
        $formLogin->login();
        var_dump(Yii::$app->user);
    }
    
    public function actionLogout(){
         var_dump(Yii::$app->user->identity);
         var_dump(Yii::$app->user->id);
    }
}
