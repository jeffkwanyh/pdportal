<div class="pds index">
	<h2><?php echo __('Pds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('audience'); ?></th>
			<th><?php echo $this->Paginator->sort('startdate'); ?></th>
			<th><?php echo $this->Paginator->sort('starttime'); ?></th>
			<th><?php echo $this->Paginator->sort('enddate'); ?></th>
			<th><?php echo $this->Paginator->sort('endtime'); ?></th>
			<th><?php echo $this->Paginator->sort('venue'); ?></th>
			<th><?php echo $this->Paginator->sort('conducted'); ?></th>
			<th><?php echo $this->Paginator->sort('attachment'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pds as $pd): ?>
	<tr>
		<td><?php echo h($pd['Pd']['id']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['title']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['description']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['audience']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['startdate']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['starttime']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['enddate']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['endtime']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['venue']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['conducted']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['attachment']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['approval']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['created']); ?>&nbsp;</td>
		<td><?php echo h($pd['Pd']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pd['User']['name'], array('controller' => 'users', 'action' => 'view', $pd['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pd['Pd']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pd['Pd']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pd['Pd']['id']), null, __('Are you sure you want to delete # %s?', $pd['Pd']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pd'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
