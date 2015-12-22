<?php
namespace app\controllers;

use app\models\LoginForm;

class ResourceController extends \components\BaseController
{

    public $layout = 'mainResource';

    public function actionIndex()
    {
        $model = new LoginForm();
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionSearch()
    {}
}
