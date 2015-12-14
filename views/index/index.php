<?php
use yii\base\Widget;
use yii\data\ArrayDataProvider;
app\assets\swiper\SwiperJqueyAsset::register($this);
app\assets\TagsInputAsset::register($this);
?>
<div class="row region region-swiper">
	<div class="col-xs-9">
		<div class="panel panel-default component component-swiper">
			<div class="panel-body">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php for($i = 0;$i <= 10 ;$i++){?>
    					<div class="swiper-slide">
							<img alt=""
								src="http://www.atool.org/placeholder.png?size=816x427&text=页面<?php echo $i?>">
						</div>
					<?php }?>
				</div>
					<!-- 如果需要滚动条 -->
					<div class="swiper-scrollbar"></div>
				</div>
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
        	<?=app\components\widgets\resource\Layout::widget(['dataProvider' => $data,'itemView' => '@resourceWidget/item/long'])?>
		</div>
	</div>
</div>
<div class="row region region-mod">
	<div class="col-xs-12">
		<div class="row component component-resource-list">
    		<?=app\components\widgets\resource\Layout::widget(['dataProvider' => $data,'itemView' => '@resourceWidget/item/thumbnail'])?>
		</div>
	</div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
	data-target="#myModal">Launch demo modal</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h1>喵呜方块</h1>
			
			
			
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {
        scrollbar: '.swiper-scrollbar',
    })   
});
</script>