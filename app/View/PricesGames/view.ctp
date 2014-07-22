<div class="pricesGames view">
<h2><?php echo __('Prices Game'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pricesGame['PricesGame']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($pricesGame['PricesGame']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pricesGame['Game']['name'], array('controller' => 'games', 'action' => 'view', $pricesGame['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($pricesGame['PricesGame']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pricesGame['PricesGame']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pricesGame['PricesGame']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($pricesGame['PricesGame']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prices Game'), array('action' => 'edit', $pricesGame['PricesGame']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prices Game'), array('action' => 'delete', $pricesGame['PricesGame']['id']), array(), __('Are you sure you want to delete # %s?', $pricesGame['PricesGame']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prices Games'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prices Game'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
