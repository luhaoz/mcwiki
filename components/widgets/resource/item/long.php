<?php
use yii\helpers\Html;
?>
<div class="col-xs-12">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="media resource-item resource-type-mod">
				<div class="media-left">
					<a href="#"> <img class="media-object resource-banner"
						src="http://www.atool.org/placeholder.png?size=250x200&text=方块<?= Html::encode($model['id'])?>"
						alt="...">
					</a>
				</div>
				<div class="media-body">
					<div class="resource-header">
						<h4 class="media-heading resource-title">喵呜机</h4>
					</div>
					<div class="caption resource-body">
						<p>喵呜机mod 是一个复杂的mod 这个mod十分强大，mod本身改变了原版的规则与玩法，让许多新事物出现在mod中</p>
						<p>喵呜机mod 是一个复杂的mod 这个mod十分强大，mod本身改变了原版的规则与玩法，让许多新事物出现在mod中</p>
						<p>喵呜机mod 是一个复杂的mod 这个mod十分强大，mod本身改变了原版的规则与玩法，让许多新事物出现在mod中</p>
						<p>喵呜机mod 是一个复杂的mod 这个mod十分强大，mod本身改变了原版的规则与玩法，让许多新事物出现在mod中</p>
						<p>喵呜机mod 是一个复杂的mod 这个mod十分强大，mod本身改变了原版的规则与玩法，让许多新事物出现在mod中</p>
						<p>喵呜机mod 是一个复杂的mod 这个mod十分强大，mod本身改变了原版的规则与玩法，让许多新事物出现在mod中</p>
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
			</div>
		</div>
	</div>
</div>