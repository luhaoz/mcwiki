<?php
namespace app\components\widgets\resource;
use Yii;
use yii\widgets\ListView;
use yii\helpers\Html;
class ResourceList extends ListView
{
    public function init(){
        parent::init();
        Yii::setAlias('@widget.resource',dirname(__DIR__).DIRECTORY_SEPARATOR.'resource');
    }
}
