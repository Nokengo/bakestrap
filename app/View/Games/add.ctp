<div class="row">
	<div class="games form col-lg-8">
	<?php echo $this->Form->create('Game'); ?>
		<fieldset>
			<legend><?php echo __('Add Game'); ?></legend>
		<?php
		echo $this->Form->input('company_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
