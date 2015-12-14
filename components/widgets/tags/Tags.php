<?php
namespace app\components\widgets\tags;
use yii\helpers\Html;
class Tags extends \yii\bootstrap\Widget
{
    public $tags = [];
    protected static $tagTypeMapper = [
        'base'      => 'label-base',
        'extend'    => 'label-extend',
        'custom'    => 'label-custom'
    ];
    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        $tagsHtml = $this->buildTags();
        return implode('', $tagsHtml);
    }
    
    protected function buildTags(){
        $tagTempData = [];
        $tempTags = $this->tags;
        foreach ($tempTags as $tagData){
            $tagTempData[] = $this->buildTag($tagData['name'], $tagData['type']);
        }
        return $tagTempData;
    }
    
    protected function buildTag($tagName,$type,$link = null){
       
        $options = ['class' => 'label'];
        if (!empty($link) ){
            $options['href'] = $link;
        } 
        if (array_key_exists($type, self::$tagTypeMapper)){
            $options['class'] .= ' '.self::$tagTypeMapper[$type];
        }
        return Html::tag('a',$tagName,$options);
    }
}
