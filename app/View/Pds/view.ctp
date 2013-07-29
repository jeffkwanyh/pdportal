<!-- File: /app/View/Pds/view.ctp -->

<h3><?php echo h($pd['Pd']['title']); ?></h3>

<div><small>Created on : <?php echo $pd['Pd']['created']; ?> by <?php echo $pd['Pd']['createdby']; ?></small></div>

<div><p><strong>PD Synopsis :</strong> <br /><?php echo ($pd['Pd']['description']); ?></p></div>

<div><p><strong>Targeted Audience :</strong> <?php echo ($pd['Pd']['audience']); ?></p></div>

<div><p><strong>Venue :</strong> <?php echo ($pd['Pd']['venue']); ?></p></div>

<div><p><strong>Starting Date/Time :</strong> <?php echo ($pd['Pd']['startdate']); ?> @ <?php echo ($pd['Pd']['starttime']); ?></p></div>

<div><p><strong>End Date/Time :</strong> <?php echo ($pd['Pd']['enddate']); ?> @ <?php echo ($pd['Pd']['endtime']); ?></p></div>

<div><p><strong>Conducted by :</strong> <?php echo ($pd['Pd']['conducted']); ?></p></div>

<div><p><strong>Attachment :</strong> <?php echo ($pd['Pd']['attachment']); ?></p></div>

<div><?php echo $this->Html->link('Edit', array('action' => 'edit', $pd['Pd']['id'])); ?></div>
<div><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $pd['Pd']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
</div>