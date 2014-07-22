<div class="games view">
<h2><?php echo __('Game'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($game['Game']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($game['Company']['name'], array('controller' => 'companies', 'action' => 'view', $game['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($game['Game']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($game['Game']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($game['Game']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($game['Game']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($game['Game']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Game'), array('action' => 'edit', $game['Game']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Game'), array('action' => 'delete', $game['Game']['id']), array(), __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Games'), array('controller' => 'deals_games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Game'), array('controller' => 'deals_games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deals Games'); ?></h3>
	<?php if (!empty($game['DealsGame'])): ?>
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
	<?php foreach ($game['DealsGame'] as $dealsGame): ?>
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
	<h3><?php echo __('Related Tokens'); ?></h3>
	<?php if (!empty($game['Token'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Key'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Game Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($game['Token'] as $token): ?>
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
