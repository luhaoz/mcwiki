
<?php 
yii\widgets\PjaxAsset::register($this);
use yii\helpers\Html;
?>
<div id="test">
    <?= Html::a("Show Time", ['site/time'], ['class' => 'btn btn-lg btn-primary']) ?>
    <?= Html::a("Show Date", ['site/date'], ['class' => 'btn btn-lg btn-success']) ?>
</div>
<div id="testBody">
</div>
<script type="text/javascript">


jQuery(document).ready(function () {
	jQuery(document).pjax("#test a", "#testBody", {"push":true,"replace":false,"timeout":1000,"scrollTo":false});
});
</script>