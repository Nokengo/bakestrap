<div class="dealsGames view">
<h2><?php echo __('Deals Game'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dealsGame['DealsGame']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dealsGame['Game']['name'], array('controller' => 'games', 'action' => 'view', $dealsGame['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dealsGame['User']['name'], array('controller' => 'users', 'action' => 'view', $dealsGame['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($dealsGame['DealsGame']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dealsGame['Token']['id'], array('controller' => 'tokens', 'action' => 'view', $dealsGame['Token']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dealsGame['DealsGame']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dealsGame['DealsGame']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($dealsGame['DealsGame']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deals Game'), array('action' => 'edit', $dealsGame['DealsGame']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deals Game'), array('action' => 'delete', $dealsGame['DealsGame']['id']), array(), __('Are you sure you want to delete # %s?', $dealsGame['DealsGame']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals Games'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deals Game'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
