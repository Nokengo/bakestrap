<div class="row">
	<div class="dealsProducts form col-lg-8">
	<?php echo $this->Form->create('DealsProduct'); ?>
		<fieldset>
			<legend><?php echo __('Add Deals Product'); ?></legend>
		<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('address_id');
		echo $this->Form->input('price');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
