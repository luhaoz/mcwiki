<?php
namespace app\components\widgets\swiper;
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
        Yii::setAlias('@widget.swiper',dirname(__DIR__).DIRECTORY_SEPARATOR.'swiper');
    }
    
    public function run()
    {
        $shlide = $this->getView()->render($this->itemView,['model' => $this->model]);
        $shlide = Html::tag('div',$shlide,['class' =>'swiper-slide']);
        return $shlide; 
    }
}