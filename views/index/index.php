<?php
use yii\base\Widget;
use yii\data\ArrayDataProvider;
app\assets\TagsInputAsset::register($this);
?>
<div class="row region region-swiper">
	<div class="col-xs-9">
		<div class="panel panel-default component component-swiper">
			<div class="panel-body">
				<?= app\components\widgets\swiper\Swiper::widget([
				    'id' => 'home-swiper',
				    'itemView' => '@widget.swiper/item/baseSlide',
                    'slides' => [
                        ['model' => ['id' => 1],'itemView' => '@widget.swiper/item/detailSlide'],
                        ['model' => ['id' => 1]],
                        ['model' => ['id' => 1]],
                        ['model' => ['id' => 1]],
				    ]
				])?>
			</div>
		</div>
	</div>
	<div class="col-xs-3 component component-resource-list">
		<div class="thumbnail resource-item">
			<div class="resource-header">
				<img data-src="holder.js/100%x200" alt="100%x200"
					src="http://www.atool.org/placeholder.png?size=100x200&text=方块t"
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
				<a href="#" class="btn btn-primary" role="button">Button</a> <a
					href="#" class="btn btn-default" role="button">Button</a>
			</div>
		</div>
	</div>
</div>
<?php
$data = new ArrayDataProvider([
    'allModels' => [
        [
            'id' => 1,
            'title' => '喵呜方块'
        ],
        [
            'id' => 2,
            'title' => '喵呜方块'
        ],
        [
            'id' => 3,
            'title' => '喵呜方块'
        ],
        [
            'id' => 4,
            'title' => '喵呜方块'
        ],
        [
            'id' => 5,
            'title' => '喵呜方块'
        ],
        [
            'id' => 6,
            'title' => '喵呜方块'
        ],
        [
            'id' => 7,
            'title' => '喵呜方块'
        ],
        [
            'id' => 8,
            'title' => '喵呜方块'
        ]
    ]
]);
?>

<div class="row region region-mod">
	<div class="col-xs-12">
		<div class="row component component-resource-list">
        	<?=app\components\widgets\resource\ResourceList::widget(['dataProvider' => $data,'itemView' => '@widget.resource/item/long'])?>
		</div>
	</div>
</div>
<div class="row region region-mod">
	<div class="col-xs-12">
		<div class="row component component-resource-list">
    		<?=app\components\widgets\resource\ResourceList::widget(['dataProvider' => $data,'itemView' => '@widget.resource/item/thumbnail'])?>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade component component-modal modal-fluid component-resource-detail " id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-block modal-dialog-toolbar" role="document">
		<div class="btn-group modal-dialog-tool-group " role="group" aria-label="...">
          <button type="button" class="btn btn-default modal-dialog-tool-item"><i class="glyphicon glyphicon-heart"></i></button>
          <button type="button" class="btn btn-default modal-dialog-tool-item"><i class="glyphicon glyphicon-star-empty"></i></button>
          <button type="button" class="btn btn-default modal-dialog-tool-item"><i class="glyphicon glyphicon-remove"></i></button>
        </div>
	</div>
	<div class="modal-dialog modal-dialog-block" role="document">
    		<div class="modal-content">
    			<div class="modal-body">
    				<div class="panel panel-default component component-swiper">
                			<div class="panel-body">
                				<?= app\components\widgets\swiper\Swiper::widget([
                				    'id' => 'detail-swiper',
                				    'itemView' => '@widget.swiper/item/baseSlide',
                                    'slides' => [
                                        ['model' => ['id' => 1],'itemView' => '@widget.swiper/item/detailSlide'],
                                        ['model' => ['id' => 1]],
                                        ['model' => ['id' => 1]],
                                        ['model' => ['id' => 1]],
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
    			</div>
    		</div>
    	</div>
</div>


<script type="text/javascript">
$(document).ready(function () {
	$('.resource-item').click(function(){
		$('#myModal').modal('show');
	});
});
</script>