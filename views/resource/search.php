<div class="modal-dialog modal-dialog-block" role="document">
	<div class="modal-content">
		<div class="modal-body">
			<div class="panel panel-default component component-swiper">
				<div class="panel-body">
					<?=app\components\widgets\swiper\Swiper::widget(['id' => 'detail-swiper','itemView' => '@widget.swiper/item/baseSlide','slides' => [['model' => ['id' => 1],'itemView' => '@widget.swiper/item/detailSlide'],['model' => ['id' => 1]],['model' => ['id' => 1]],['model' => ['id' => 1]]]])?>
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
		</div>
	</div>
</div>
