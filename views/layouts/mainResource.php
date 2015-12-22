<?php $this->beginContent('@app/views/layouts/main.php');?>
<div class="modal fade in component component-modal modal-fluid component-resource-detail modal-static" tabindex="-1" role="dialog">
	<div class="modal-dialog-block-body">
		<?= $content?>
	</div>
</div>
<?php $this->endContent();?>