<div class="dealsProducts view">
<h2><?php echo __('Deals Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dealsProduct['DealsProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dealsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $dealsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dealsProduct['User']['name'], array('controller' => 'users', 'action' => 'view', $dealsProduct['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dealsProduct['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $dealsProduct['Address']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($dealsProduct['DealsProduct']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dealsProduct['DealsProduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dealsProduct['DealsProduct']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($dealsProduct['DealsProduct']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deals Product'), array('action' => 'edit', $dealsProduct['DealsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deals Product'), array('action' => 'delete', $dealsProduct['DealsProduct']['id']), array(), __('Are you sure you want to delete # %s?', $dealsProduct['DealsProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
