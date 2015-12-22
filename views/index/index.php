<?php
use yii\base\Widget;
use yii\data\ArrayDataProvider;
yii\widgets\PjaxAsset::register($this);
app\assets\TagsInputAsset::register($this);
app\assets\NProgressAsset::register($this);
?>
<div class="row region region-swiper">
	<div class="col-xs-9">
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
		<?= cwidget\resource\ResourceList::widget(['dataProvider' => $data,'itemView' => '@cwidget/resource/item/long'])?>
	</div>
</div>
<div class="row region region-mod">
	<div class="col-xs-12">
		<?= cwidget\resource\ResourceList::widget(['dataProvider' => $data,'itemView' => '@cwidget/resource/item/thumbnail'])?>
	</div>
</div>


<!-- Modal -->
<div class="modal fade component component-modal modal-fluid component-resource-detail"id="resource-detail" tabindex="-1" role="dialog">
	<div class="modal-dialog-toolbar-static">
		<div class="modal-dialog-block modal-dialog-toolbar" role="document">
			<div class="btn-group btn-group-vertical modal-dialog-toolbar-group" role="group">
				<button type="button" class="btn btn-default modal-dialog-tool-item">
					<i class="glyphicon glyphicon-heart"></i>
				</button>
				<button type="button" class="btn btn-default modal-dialog-tool-item">
					<i class="glyphicon glyphicon-star-empty"></i>
				</button>
				<button type="button" class="btn btn-default modal-dialog-tool-item modal-close">
					<i class="glyphicon glyphicon-remove "></i>
				</button>
			</div>
		</div>
	</div>
<div id="pjax-dialog-block-body">
</div>
</div>


<script type="text/javascript">
$(document).ready(function () {
	$('#pjax-dialog-block-body').on('pjax:complete', function() {
		$('#resource-detail').modal('show');
	});
	$('.resource-item').click(function(){
		NProgress.start();
		$url = $(this).find('.item-detail-href').attr('href');
			$.pjax({url:'<?= Yii::$app->urlManager->createUrl('resource')?>', container: '#pjax-dialog-block-body'});
		return false;
		//
	});
	/*
	$('#pjax-dialog-block-body').on('pjax:complete', function() {
		$('#resource-detail').modal('show');
	});
	$('#pjax-dialog-block-body').on('pjax:popstate', function() {
		$('#resource-detail').modal('hide');
	});
	$('.resource-item').click(function(){
		NProgress.start();
		$url = 
		return false;
		//$.pjax({url:'<?= Yii::$app->urlManager->createUrl('resource')?>', container: '#pjax-dialog-block-body'});
	});
	$('#resource-detail').on('hidden.bs.modal',function(){
		NProgress.done();
	});
	$('.modal-close').click(function(){
		$(this).parents('.modal').modal('hide');
		history.go(-1);
	});
	*/
});
</script>