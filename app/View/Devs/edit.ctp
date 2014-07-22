<div class="row">
	<div class="devs form col-lg-8">
	<?php echo $this->Form->create('Dev'); ?>
		<fieldset>
			<legend><?php echo __('Edit Dev'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('cpf');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
