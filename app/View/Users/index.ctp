<div class="row">
  <div class="col-lg-10"><h3><?php echo __('Users'); ?></h3></div>
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
                      <th><?php echo $this->Paginator->sort('username'); ?></th>
                      <th><?php echo $this->Paginator->sort('password'); ?></th>
                      <th><?php echo $this->Paginator->sort('email'); ?></th>
                      <th><?php echo $this->Paginator->sort('name'); ?></th>
                      <th><?php echo $this->Paginator->sort('role'); ?></th>
                      <th><?php echo $this->Paginator->sort('hash_change_password'); ?></th>
                      <th><?php echo $this->Paginator->sort('created'); ?></th>
                      <th><?php echo $this->Paginator->sort('modified'); ?></th>
                      <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['hash_change_password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
