<div class="row">
  <div class="col-lg-10"><h3><?php echo __('Deals Products'); ?></h3></div>
  <div class="col-lg-2">
    
  </div>
</div>

<div class="row">

	<div class="col-12">


    <hr>
    <table class="table table-bordered">
      <thead>
        <tr>
                      <th><?php echo $this->Paginator->sort('id'); ?></th>
                      <th><?php echo $this->Paginator->sort('product_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('address_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('price'); ?></th>
                      <th><?php echo $this->Paginator->sort('created'); ?></th>
                      <th><?php echo $this->Paginator->sort('modified'); ?></th>
                      <th><?php echo $this->Paginator->sort('status'); ?></th>
                      <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($dealsProducts as $dealsProduct): ?>
	<tr>
		<td><?php echo h($dealsProduct['DealsProduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dealsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $dealsProduct['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dealsProduct['User']['name'], array('controller' => 'users', 'action' => 'view', $dealsProduct['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dealsProduct['Address']['id'], array('controller' => 'addresses', 'action' => 'view', $dealsProduct['Address']['id'])); ?>
		</td>
		<td><?php echo h($dealsProduct['DealsProduct']['price']); ?>&nbsp;</td>
		<td><?php echo h($dealsProduct['DealsProduct']['created']); ?>&nbsp;</td>
		<td><?php echo h($dealsProduct['DealsProduct']['modified']); ?>&nbsp;</td>
		<td><?php echo h($dealsProduct['DealsProduct']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dealsProduct['DealsProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dealsProduct['DealsProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dealsProduct['DealsProduct']['id']), array(), __('Are you sure you want to delete # %s?', $dealsProduct['DealsProduct']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


<div class="modal fade" id="UsersModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myModalLabel">Remove user</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the user <span class="label-uname strong"></span> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
