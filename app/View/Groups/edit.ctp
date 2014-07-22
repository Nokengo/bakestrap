<div class="row">
	<div class="groups form col-lg-8">
	<?php echo $this->Form->create('Group'); ?>
		<fieldset>
			<legend><?php echo __('Edit Group'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
