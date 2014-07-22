<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($company['Company']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($company['Company']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($company['Company']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($company['Company']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Url'); ?></dt>
		<dd>
			<?php echo h($company['Company']['facebook_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instagram Url'); ?></dt>
		<dd>
			<?php echo h($company['Company']['instagram_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Url'); ?></dt>
		<dd>
			<?php echo h($company['Company']['twitter_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedin Url'); ?></dt>
		<dd>
			<?php echo h($company['Company']['linkedin_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($company['Company']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dev Companies'), array('controller' => 'dev_companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dev Company'), array('controller' => 'dev_companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dev Companies'); ?></h3>
	<?php if (!empty($company['DevCompany'])): ?>
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
	<?php foreach ($company['DevCompany'] as $devCompany): ?>
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
<div class="related">
	<h3><?php echo __('Related Games'); ?></h3>
	<?php if (!empty($company['Game'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Game'] as $game): ?>
		<tr>
			<td><?php echo $game['id']; ?></td>
			<td><?php echo $game['company_id']; ?></td>
			<td><?php echo $game['name']; ?></td>
			<td><?php echo $game['description']; ?></td>
			<td><?php echo $game['created']; ?></td>
			<td><?php echo $game['modified']; ?></td>
			<td><?php echo $game['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'games', 'action' => 'view', $game['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'games', 'action' => 'edit', $game['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'games', 'action' => 'delete', $game['id']), array(), __('Are you sure you want to delete # %s?', $game['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($company['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['company_id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td><?php echo $product['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array(), __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
