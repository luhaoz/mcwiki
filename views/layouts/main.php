<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'MC Wiki',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav nav'],
        'items' => [
            ['label' => '精选消息', 'url' => ['/site/index']],
            ['label' => 'Mod', 'url' => ['/site/about']],
            ['label' => '文章', 'url' => ['/site/contact']],
        ],
    ]);
    
    echo Html::beginForm(['resource/search'], 'get', ['class' => 'navbar-form navbar-right' ,'role' => 'search']);
        echo Html::beginTag('div',['class' => 'form-group has-feedback']);
            echo Html::textInput('search-resource','',['class' =>'form-control','data-role' => 'tagsinput']);
            echo Html::tag('span','',['class' => 'glyphicon glyphicon-search form-control-feedback','aria-hidden' => true]);
        echo Html::endTag('div');
    echo Html::endForm();
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p> 
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
