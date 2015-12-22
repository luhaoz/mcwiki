<?php

namespace app\controllers;
class IndexController extends \components\BaseController
{
    public function actionIndex()
    {   
        return $this->render('index');
    }

}
