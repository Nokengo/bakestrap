<div class="row">
	<div class="users form col-lg-8">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend><?php echo __('Add User'); ?></legend>
		<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('role', array('options'=>$ListUsersRolers));
	?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
</div>
