<div class="row">
	<div class="dealsGames form col-lg-8">
	<?php echo $this->Form->create('DealsGame'); ?>
		<fieldset>
			<legend><?php echo __('Edit Deals Game'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('game_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('price');
		echo $this->Form->input('token_id');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
