<div class="row">
  <div class="col-lg-10"><h3><?php echo __('Dev Companies'); ?></h3></div>
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
                      <th><?php echo $this->Paginator->sort('dev_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                      <th><?php echo $this->Paginator->sort('created'); ?></th>
                      <th><?php echo $this->Paginator->sort('modified'); ?></th>
                      <th><?php echo $this->Paginator->sort('status'); ?></th>
                      <th><?php echo $this->Paginator->sort('roles'); ?></th>
                      <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($devCompanies as $devCompany): ?>
	<tr>
		<td><?php echo h($devCompany['DevCompany']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($devCompany['Dev']['id'], array('controller' => 'devs', 'action' => 'view', $devCompany['Dev']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($devCompany['Company']['name'], array('controller' => 'companies', 'action' => 'view', $devCompany['Company']['id'])); ?>
		</td>
		<td><?php echo h($devCompany['DevCompany']['created']); ?>&nbsp;</td>
		<td><?php echo h($devCompany['DevCompany']['modified']); ?>&nbsp;</td>
		<td><?php echo h($devCompany['DevCompany']['status']); ?>&nbsp;</td>
		<td><?php echo h($devCompany['DevCompany']['roles']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $devCompany['DevCompany']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $devCompany['DevCompany']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $devCompany['DevCompany']['id']), array(), __('Are you sure you want to delete # %s?', $devCompany['DevCompany']['id'])); ?>
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
