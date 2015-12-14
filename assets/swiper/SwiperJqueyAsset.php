<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace app\assets\swiper;

use yii\web\AssetBundle;

/**
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SwiperJqueyAsset extends AssetBundle
{

    public $sourcePath = '@bower/Swiper/dist';

    public $css = [
        'css/swiper.min.css'
    ];

    public $js = [
        'js/swiper.jquery.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
