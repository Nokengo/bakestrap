<div class="devCompanies view">
<h2><?php echo __('Dev Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($devCompany['DevCompany']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dev'); ?></dt>
		<dd>
			<?php echo $this->Html->link($devCompany['Dev']['id'], array('controller' => 'devs', 'action' => 'view', $devCompany['Dev']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($devCompany['Company']['name'], array('controller' => 'companies', 'action' => 'view', $devCompany['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($devCompany['DevCompany']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($devCompany['DevCompany']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($devCompany['DevCompany']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Roles'); ?></dt>
		<dd>
			<?php echo h($devCompany['DevCompany']['roles']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dev Company'), array('action' => 'edit', $devCompany['DevCompany']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dev Company'), array('action' => 'delete', $devCompany['DevCompany']['id']), array(), __('Are you sure you want to delete # %s?', $devCompany['DevCompany']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dev Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dev Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devs'), array('controller' => 'devs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dev'), array('controller' => 'devs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
