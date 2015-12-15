<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace app\assets;

use yii\web\AssetBundle;

/**
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class StickUpAsset extends AssetBundle
{

    public $sourcePath = '@bower/stickUp';

    public $css = [
    ];

    public $js = [
        'stickUp.min.js'
    ];

    public $jsOptions = [
        'position'=>\yii\web\View::POS_HEAD,
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
