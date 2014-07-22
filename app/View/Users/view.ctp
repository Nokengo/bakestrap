<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hash Change Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['hash_change_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Games'), array('controller' => 'deals_games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Game'), array('controller' => 'deals_games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Products'), array('controller' => 'deals_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Product'), array('controller' => 'deals_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devs'), array('controller' => 'devs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dev'), array('controller' => 'devs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Addresses'); ?></h3>
	<?php if (!empty($user['Address'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Label'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Complement'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Address'] as $address): ?>
		<tr>
			<td><?php echo $address['id']; ?></td>
			<td><?php echo $address['user_id']; ?></td>
			<td><?php echo $address['label']; ?></td>
			<td><?php echo $address['country']; ?></td>
			<td><?php echo $address['state']; ?></td>
			<td><?php echo $address['city']; ?></td>
			<td><?php echo $address['zipcode']; ?></td>
			<td><?php echo $address['street']; ?></td>
			<td><?php echo $address['complement']; ?></td>
			<td><?php echo $address['obs']; ?></td>
			<td><?php echo $address['type']; ?></td>
			<td><?php echo $address['created']; ?></td>
			<td><?php echo $address['modified']; ?></td>
			<td><?php echo $address['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'addresses', 'action' => 'view', $address['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'addresses', 'action' => 'edit', $address['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'addresses', 'action' => 'delete', $address['id']), array(), __('Are you sure you want to delete # %s?', $address['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Deals Games'); ?></h3>
	<?php if (!empty($user['DealsGame'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Token Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['DealsGame'] as $dealsGame): ?>
		<tr>
			<td><?php echo $dealsGame['id']; ?></td>
			<td><?php echo $dealsGame['game_id']; ?></td>
			<td><?php echo $dealsGame['user_id']; ?></td>
			<td><?php echo $dealsGame['price']; ?></td>
			<td><?php echo $dealsGame['token_id']; ?></td>
			<td><?php echo $dealsGame['created']; ?></td>
			<td><?php echo $dealsGame['modified']; ?></td>
			<td><?php echo $dealsGame['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deals_games', 'action' => 'view', $dealsGame['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deals_games', 'action' => 'edit', $dealsGame['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deals_games', 'action' => 'delete', $dealsGame['id']), array(), __('Are you sure you want to delete # %s?', $dealsGame['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Deals Game'), array('controller' => 'deals_games', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Deals Products'); ?></h3>
	<?php if (!empty($user['DealsProduct'])): ?>
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
	<?php foreach ($user['DealsProduct'] as $dealsProduct): ?>
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
<div class="related">
	<h3><?php echo __('Related Devs'); ?></h3>
	<?php if (!empty($user['Dev'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Dev'] as $dev): ?>
		<tr>
			<td><?php echo $dev['id']; ?></td>
			<td><?php echo $dev['user_id']; ?></td>
			<td><?php echo $dev['cpf']; ?></td>
			<td><?php echo $dev['created']; ?></td>
			<td><?php echo $dev['modified']; ?></td>
			<td><?php echo $dev['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devs', 'action' => 'view', $dev['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devs', 'action' => 'edit', $dev['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devs', 'action' => 'delete', $dev['id']), array(), __('Are you sure you want to delete # %s?', $dev['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dev'), array('controller' => 'devs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($user['Log'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Controller'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['user_id']; ?></td>
			<td><?php echo $log['controller']; ?></td>
			<td><?php echo $log['action']; ?></td>
			<td><?php echo $log['description']; ?></td>
			<td><?php echo $log['created']; ?></td>
			<td><?php echo $log['modified']; ?></td>
			<td><?php echo $log['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'logs', 'action' => 'delete', $log['id']), array(), __('Are you sure you want to delete # %s?', $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tokens'); ?></h3>
	<?php if (!empty($user['Token'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Key'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Token'] as $token): ?>
		<tr>
			<td><?php echo $token['id']; ?></td>
			<td><?php echo $token['key']; ?></td>
			<td><?php echo $token['user_id']; ?></td>
			<td><?php echo $token['game_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tokens', 'action' => 'view', $token['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tokens', 'action' => 'edit', $token['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tokens', 'action' => 'delete', $token['id']), array(), __('Are you sure you want to delete # %s?', $token['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
