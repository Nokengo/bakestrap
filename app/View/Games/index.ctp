<div class="row">
  <div class="col-lg-10"><h3><?php echo __('Games'); ?></h3></div>
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
                      <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('name'); ?></th>
                      <th><?php echo $this->Paginator->sort('description'); ?></th>
                      <th><?php echo $this->Paginator->sort('created'); ?></th>
                      <th><?php echo $this->Paginator->sort('modified'); ?></th>
                      <th><?php echo $this->Paginator->sort('status'); ?></th>
                      <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($games as $game): ?>
	<tr>
		<td><?php echo h($game['Game']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($game['Company']['name'], array('controller' => 'companies', 'action' => 'view', $game['Company']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['name']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['description']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['created']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['modified']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $game['Game']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $game['Game']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $game['Game']['id']), array(), __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?>
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
