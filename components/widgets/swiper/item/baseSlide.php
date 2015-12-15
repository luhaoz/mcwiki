<?php
use \yii\helpers\ArrayHelper;
?>
<div class="thumbnail resource-item">
	<div class="resource-header">
		<img class="resource-banner" data-src="holder.js/100%x200"
			alt="100%x200"
			src="http://www.atool.org/placeholder.png?size=250x200&text=方块<?= ArrayHelper::getValue($model,'id')?>"
			data-holder-rendered="true"
			style="height: 200px; width: 100%; display: block;">
		<h3 class="resource-title">Thumbnail label</h3>
	</div>
	<div class="caption resource-body">

		<p>
			测试本本<br> 测试本本<br> 测试本本<br> 测试本本<br>
		</p>
		<p></p>
	</div>
	<div class="resource-footer">
		<div class="resource-tags">
			<?=app\components\widgets\tags\Tags::widget(['tags' =>[
			    ['name' => '机械 ','type' => 'base'],
			    ['name' => '生态群落 ','type' =>'base'],
			    ['name' => '矿物字典 ','type' =>'base'],
			    ['name' => 'IC:扩展 ','type' =>'extend'],
			    ['name' => 'TE:扩展 ','type' =>'extend'],
			    ['name' => '喵呜级好好玩~ ','type' =>'custom'],
			]])?>
		</div>
	</div>
</div>