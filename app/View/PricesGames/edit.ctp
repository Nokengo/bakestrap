<div class="row">
	<div class="pricesGames form col-lg-8">
	<?php echo $this->Form->create('PricesGame'); ?>
		<fieldset>
			<legend><?php echo __('Edit Prices Game'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('label');
		echo $this->Form->input('game_id');
		echo $this->Form->input('price');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
