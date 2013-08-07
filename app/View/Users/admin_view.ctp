<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pds'), array('controller' => 'pds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pd'), array('controller' => 'pds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pds'); ?></h3>
	<?php if (!empty($user['Pd'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Audience'); ?></th>
		<th><?php echo __('Startdate'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('Enddate'); ?></th>
		<th><?php echo __('Endtime'); ?></th>
		<th><?php echo __('Venue'); ?></th>
		<th><?php echo __('Conducted'); ?></th>
		<th><?php echo __('Attachment'); ?></th>
		<th><?php echo __('Approval'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Pd'] as $pd): ?>
		<tr>
			<td><?php echo $pd['id']; ?></td>
			<td><?php echo $pd['title']; ?></td>
			<td><?php echo $pd['description']; ?></td>
			<td><?php echo $pd['audience']; ?></td>
			<td><?php echo $pd['startdate']; ?></td>
			<td><?php echo $pd['starttime']; ?></td>
			<td><?php echo $pd['enddate']; ?></td>
			<td><?php echo $pd['endtime']; ?></td>
			<td><?php echo $pd['venue']; ?></td>
			<td><?php echo $pd['conducted']; ?></td>
			<td><?php echo $pd['attachment']; ?></td>
			<td><?php echo $pd['approval']; ?></td>
			<td><?php echo $pd['created']; ?></td>
			<td><?php echo $pd['modified']; ?></td>
			<td><?php echo $pd['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pds', 'action' => 'view', $pd['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pds', 'action' => 'edit', $pd['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pds', 'action' => 'delete', $pd['id']), null, __('Are you sure you want to delete # %s?', $pd['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pd'), array('controller' => 'pds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
