<div class="row">
  <div class="col-lg-10"><h3><?php echo __('Addresses'); ?></h3></div>
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
                      <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('label'); ?></th>
                      <th><?php echo $this->Paginator->sort('country'); ?></th>
                      <th><?php echo $this->Paginator->sort('state'); ?></th>
                      <th><?php echo $this->Paginator->sort('city'); ?></th>
                      <th><?php echo $this->Paginator->sort('zipcode'); ?></th>
                      <th><?php echo $this->Paginator->sort('street'); ?></th>
                      <th><?php echo $this->Paginator->sort('complement'); ?></th>
                      <th><?php echo $this->Paginator->sort('obs'); ?></th>
                      <th><?php echo $this->Paginator->sort('type'); ?></th>
                      <th><?php echo $this->Paginator->sort('created'); ?></th>
                      <th><?php echo $this->Paginator->sort('modified'); ?></th>
                      <th><?php echo $this->Paginator->sort('status'); ?></th>
                      <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($addresses as $address): ?>
	<tr>
		<td><?php echo h($address['Address']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($address['User']['name'], array('controller' => 'users', 'action' => 'view', $address['User']['id'])); ?>
		</td>
		<td><?php echo h($address['Address']['label']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['country']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['state']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['city']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['street']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['complement']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['obs']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['type']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['created']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['modified']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $address['Address']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $address['Address']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $address['Address']['id']), array(), __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?>
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
