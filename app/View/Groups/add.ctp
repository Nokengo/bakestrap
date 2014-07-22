<div class="row">
	<div class="groups form col-lg-8">
	<?php echo $this->Form->create('Group'); ?>
		<fieldset>
			<legend><?php echo __('Add Group'); ?></legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
