<div class="row">
  <div class="col-lg-10"><h3><?php echo __('Companies'); ?></h3></div>
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
                      <th><?php echo $this->Paginator->sort('name'); ?></th>
                      <th><?php echo $this->Paginator->sort('description'); ?></th>
                      <th><?php echo $this->Paginator->sort('cnpj'); ?></th>
                      <th><?php echo $this->Paginator->sort('email'); ?></th>
                      <th><?php echo $this->Paginator->sort('website'); ?></th>
                      <th><?php echo $this->Paginator->sort('facebook_url'); ?></th>
                      <th><?php echo $this->Paginator->sort('instagram_url'); ?></th>
                      <th><?php echo $this->Paginator->sort('twitter_url'); ?></th>
                      <th><?php echo $this->Paginator->sort('linkedin_url'); ?></th>
                      <th><?php echo $this->Paginator->sort('created'); ?></th>
                      <th><?php echo $this->Paginator->sort('modified'); ?></th>
                      <th><?php echo $this->Paginator->sort('status'); ?></th>
                      <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['description']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['cnpj']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['email']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['website']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['facebook_url']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['instagram_url']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['twitter_url']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['linkedin_url']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['created']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['modified']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
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
