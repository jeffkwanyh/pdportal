<div class="pds form">
<?php echo $this->Form->create('Pd'); ?>
	<fieldset>
		<legend><?php echo __('Add Pd'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('audience');
		echo $this->Form->input('startdate');
		echo $this->Form->input('starttime');
		echo $this->Form->input('enddate');
		echo $this->Form->input('endtime');
		echo $this->Form->input('venue');
		echo $this->Form->input('conducted');
		echo $this->Form->input('attachment');
		echo $this->Form->input('approval');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
