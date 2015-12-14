<?php
namespace app\components\widgets\resource;
use Yii;
use yii\widgets\ListView;
use yii\helpers\Html;
class Layout extends ListView
{
    public function init(){
        parent::init();
        Yii::setAlias('@resourceWidget',dirname(__DIR__).DIRECTORY_SEPARATOR.'resource');
    }
}
