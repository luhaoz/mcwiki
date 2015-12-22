<?php
namespace cwidget\resource;
use Yii;
use yii\widgets\ListView;
use yii\helpers\Html;
class ResourceList extends ListView
{
    public function init(){
        parent::init();
        $this->options['class'] .= ' row component component-resource-list';
        $this->itemOptions['tag'] = false;
        $this->summary = false;
    }
}
