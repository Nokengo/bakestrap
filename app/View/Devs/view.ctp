<div class="devs view">
<h2><?php echo __('Dev'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dev['Dev']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dev['User']['name'], array('controller' => 'users', 'action' => 'view', $dev['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($dev['Dev']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dev['Dev']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dev['Dev']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($dev['Dev']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dev'), array('action' => 'edit', $dev['Dev']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dev'), array('action' => 'delete', $dev['Dev']['id']), array(), __('Are you sure you want to delete # %s?', $dev['Dev']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dev'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dev Companies'), array('controller' => 'dev_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dev Company'), array('controller' => 'dev_companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dev Companies'); ?></h3>
	<?php if (!empty($dev['DevCompany'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dev Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Roles'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dev['DevCompany'] as $devCompany): ?>
		<tr>
			<td><?php echo $devCompany['id']; ?></td>
			<td><?php echo $devCompany['dev_id']; ?></td>
			<td><?php echo $devCompany['company_id']; ?></td>
			<td><?php echo $devCompany['created']; ?></td>
			<td><?php echo $devCompany['modified']; ?></td>
			<td><?php echo $devCompany['status']; ?></td>
			<td><?php echo $devCompany['roles']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dev_companies', 'action' => 'view', $devCompany['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dev_companies', 'action' => 'edit', $devCompany['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dev_companies', 'action' => 'delete', $devCompany['id']), array(), __('Are you sure you want to delete # %s?', $devCompany['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dev Company'), array('controller' => 'dev_companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
