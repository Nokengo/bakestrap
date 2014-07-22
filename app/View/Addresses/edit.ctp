<div class="row">
	<div class="addresses form col-lg-8">
	<?php echo $this->Form->create('Address'); ?>
		<fieldset>
			<legend><?php echo __('Edit Address'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('label');
		echo $this->Form->input('country');
		echo $this->Form->input('state');
		echo $this->Form->input('city');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('street');
		echo $this->Form->input('complement');
		echo $this->Form->input('obs');
		echo $this->Form->input('type');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
