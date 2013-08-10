<div class="pds view">
<h2><?php echo h($pd['Pd']['title']); ?></h2>
	<dl>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intended Audience'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['audience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start date'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['startdate']); ?>@<?php echo h($pd['Pd']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End date'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['enddate']); ?>@<?php echo h($pd['Pd']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['venue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conducted By'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['conducted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attachment'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['attachment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created on'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['created']); ?>
			<?php echo __('by'); ?>
			<?php echo $this->Html->link($pd['User']['name'], array('controller' => 'users', 'action' => 'view', $pd['User']['id'])); ?>
		</dd>
		<dt><?php echo __('Last Modified'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit This Pd'), array('action' => 'edit', $pd['Pd']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete This Pd'), array('action' => 'delete', $pd['Pd']['id']), null, __('Are you sure you want to delete # %s?', $pd['Pd']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List All Pds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Create A New Pd'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List All Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Create A New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
