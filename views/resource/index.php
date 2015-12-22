<?php
use cwidget\activeForm\ActiveFormPlus;
?>
<div class="modal-dialog modal-dialog-block" role="document">
	<div class="modal-content">
		<div class="modal-body">
			<div class="panel panel-default component component-swiper">
				<div class="panel-body">
				<?= cwidget\swiper\Swiper::widget(['id' => 'home-swiper','itemView' => '@cwidget/swiper/item/baseSlide',
				    'slides' => [
    				    ['model' => ['id' => 1],'itemView' => '@cwidget/swiper/item/baseSlide'],
    				    ['model' => ['id' => 1]],
    				    ['model' => ['id' => 1]],
    				    ['model' => ['id' => 1]]
    				]
				])?>
    			</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-dialog modal-dialog-block" role="document">
	<div class="modal-content">
		<div class="modal-body">
			<h1>喵呜方块</h1>
		</div>
	</div>
</div>
<div class="modal-dialog modal-dialog-block" role="document">
	<div class="modal-content">
		<div class="modal-body">
			<h1>喵呜评论</h1>
			<div class="component component-comment">
				<div class="media">
					<div class="media-left">
						<a href="#">
							<img class="media-object comment-avatar img-circle" src="http://www.atool.org/placeholder.png?size=64x64&text=头像"/>
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading comment-name">闭眼虾米</h4>
						喵呜机真是不错~
					</div>
				</div>
				<?php $form = ActiveFormPlus::begin() ?>
					<?= $form->field($model, 'username')->widget(\yii\redactor\widgets\Redactor::className()) ?>
				<?php ActiveFormPlus::end() ?>
			</div>
		</div>
	</div>
</div>