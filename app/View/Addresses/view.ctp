<div class="addresses view">
<h2><?php echo __('Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($address['Address']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($address['User']['name'], array('controller' => 'users', 'action' => 'view', $address['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($address['Address']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($address['Address']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($address['Address']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($address['Address']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($address['Address']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($address['Address']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complement'); ?></dt>
		<dd>
			<?php echo h($address['Address']['complement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($address['Address']['obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($address['Address']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($address['Address']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($address['Address']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($address['Address']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address'), array('action' => 'edit', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address'), array('action' => 'delete', $address['Address']['id']), array(), __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Products'), array('controller' => 'deals_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Product'), array('controller' => 'deals_products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deals Products'); ?></h3>
	<?php if (!empty($address['DealsProduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($address['DealsProduct'] as $dealsProduct): ?>
		<tr>
			<td><?php echo $dealsProduct['id']; ?></td>
			<td><?php echo $dealsProduct['product_id']; ?></td>
			<td><?php echo $dealsProduct['user_id']; ?></td>
			<td><?php echo $dealsProduct['address_id']; ?></td>
			<td><?php echo $dealsProduct['price']; ?></td>
			<td><?php echo $dealsProduct['created']; ?></td>
			<td><?php echo $dealsProduct['modified']; ?></td>
			<td><?php echo $dealsProduct['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deals_products', 'action' => 'view', $dealsProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deals_products', 'action' => 'edit', $dealsProduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deals_products', 'action' => 'delete', $dealsProduct['id']), array(), __('Are you sure you want to delete # %s?', $dealsProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Deals Product'), array('controller' => 'deals_products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
