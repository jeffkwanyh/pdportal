<div class="pds view">
<h2><?php echo __('Pd'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Audience'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['audience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Startdate'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['startdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starttime'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['starttime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enddate'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['enddate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endtime'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['endtime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['venue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conducted'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['conducted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attachment'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['attachment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pd['Pd']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pd['User']['name'], array('controller' => 'users', 'action' => 'view', $pd['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pd'), array('action' => 'edit', $pd['Pd']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pd'), array('action' => 'delete', $pd['Pd']['id']), null, __('Are you sure you want to delete # %s?', $pd['Pd']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pd'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
