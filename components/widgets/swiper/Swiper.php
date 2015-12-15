<?php
namespace app\components\widgets\swiper;
use yii\helpers\Html;
use yii\base\Widget;
use \yii\helpers\ArrayHelper;
class Swiper extends Widget
{   
    public $itemView = null;
    public $slides = [];
    public function init()
    {
        parent::init();
        \app\assets\swiper\SwiperJqueyAsset::register($this->getView());
    }
    
    public function run()
    {
        $this->bandJs();
        return $this->buildComponentHtml();
    }
    
    protected function buildComponentHtml(){
        $comppnentHtml = null;
        $comppnentHtml .= Html::beginTag('div',['id' => $this->getId(),'class' =>'swiper-container']);
            $comppnentHtml .= Html::beginTag('div',['class' =>'swiper-wrapper']);
                foreach ($this->slides as $slide){
                    $comppnentHtml .= Slide::widget(['itemView' => ArrayHelper::getValue($slide,'itemView',$this->itemView),'model' => ArrayHelper::getValue($slide,'data')]);
                }
            $comppnentHtml .= Html::endTag('div');
            $comppnentHtml .= Html::tag('div','',['class' =>'swiper-scrollbar']);
        $comppnentHtml .= Html::endTag('div');
        return $comppnentHtml;
    }
    
    protected function bandJs(){
        $registerJsOptions = array(
            'scrollbar' => '#'.$this->getId().' .swiper-scrollbar'
        );
        $swiperJsOptions = json_encode($registerJsOptions);
        $registerJsCode = "
             var swiperWidget = new Swiper ('#{$this->getId()}',{$swiperJsOptions})
        ";
        $this->getView()->registerJs($registerJsCode);
    }
}