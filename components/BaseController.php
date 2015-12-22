<?php
namespace components;

use Yii;

class BaseController extends \yii\web\Controller
{

    public function init()
    {
        parent::init();
        if (Yii::$app->request->isPjax) {
            $this->layout = false;
        }
    }
}
