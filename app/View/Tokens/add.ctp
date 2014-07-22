<div class="row">
	<div class="tokens form col-lg-8">
	<?php echo $this->Form->create('Token'); ?>
		<fieldset>
			<legend><?php echo __('Add Token'); ?></legend>
		<?php
		echo $this->Form->input('key');
		echo $this->Form->input('user_id');
		echo $this->Form->input('game_id');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
