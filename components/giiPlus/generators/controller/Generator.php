<?php
namespace components\giiPlus\generators\controller;

class Generator extends \yii\gii\generators\controller\Generator
{

    public $baseClass = 'components\Controller';

    public function formView()
    {
        return '@yii/gii/generators/controller/form.php';
    }

    public function defaultTemplate()
    {
        return '@yii/gii/generators/controller/default';
    }
}
