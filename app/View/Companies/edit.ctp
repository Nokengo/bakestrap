<div class="row">
	<div class="companies form col-lg-8">
	<?php echo $this->Form->create('Company'); ?>
		<fieldset>
			<legend><?php echo __('Edit Company'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('cnpj');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('facebook_url');
		echo $this->Form->input('instagram_url');
		echo $this->Form->input('twitter_url');
		echo $this->Form->input('linkedin_url');
		echo $this->Form->input('status');
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
