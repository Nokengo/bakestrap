<div class="row">
	<div class="devCompanies form col-lg-8">
	<?php echo $this->Form->create('DevCompany'); ?>
		<fieldset>
			<legend><?php echo __('Edit Dev Company'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dev_id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('status');
		echo $this->Form->input('roles');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
