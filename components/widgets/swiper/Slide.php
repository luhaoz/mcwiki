<?php
namespace cwidget\swiper;
use Yii;
use yii\helpers\Html;
use yii\base\Widget;
class Slide extends Widget
{   
    public $itemView = null;
    public $model = [];
    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        $shlide = $this->getView()->render($this->itemView,['model' => $this->model]);
        $shlide = Html::tag('div',$shlide,['class' =>'swiper-slide']);
        return $shlide; 
    }
}