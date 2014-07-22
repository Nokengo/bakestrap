<div class="tokens view">
<h2><?php echo __('Token'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($token['Token']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo h($token['Token']['key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($token['User']['name'], array('controller' => 'users', 'action' => 'view', $token['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($token['Game']['name'], array('controller' => 'games', 'action' => 'view', $token['Game']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Token'), array('action' => 'edit', $token['Token']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Token'), array('action' => 'delete', $token['Token']['id']), array(), __('Are you sure you want to delete # %s?', $token['Token']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Games'), array('controller' => 'deals_games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Game'), array('controller' => 'deals_games', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deals Games'); ?></h3>
	<?php if (!empty($token['DealsGame'])): ?>
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
	<?php foreach ($token['DealsGame'] as $dealsGame): ?>
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
