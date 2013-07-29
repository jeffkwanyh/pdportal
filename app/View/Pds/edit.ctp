<!-- File: /app/View/Pds/edit.ctp -->

<h3>Edit PDs</h3>
<?php echo $this->Form->create('Pd'); ?>
    <ul data-role="listview" data-inset="true">
        <li data-role="fieldcontain">
            <?php echo $this->Form->input('title', array('data-clear-btn' => 'true', 'label' => 'Title :')); ?>
        </li>
        <li data-role="fieldcontain">
            <?php echo $this->Form->input('description', array('rows' => '3', 'label' => 'Synopsis :')); ?>
        </li>
        
        <!-- This is the section to hardcode the Intended Audience information. On the TO-DO list ... ... -->
        <li data-role="fieldcontain">
            <?php 
                $options = array(
                                array('name' => 'Personal', 'value' => 'Personal'),
                                array('name' => 'All Staff', 'value' => 'All Staff'),
                                array('name' => 'All Teachers', 'value' => 'All Teachers'),
                                array('name' => 'International Teachers', 'value' => 'International Teachers'),
                                array('name' => 'Integrated Teachers', 'value' => 'Integrated Teachers'),
                                array('name' => 'Teaching Assistants', 'value' => 'Teaching Assistants'),
                                array('name' => 'Prep & K1K2 Teachers', 'value' => 'Prep & K1K2 Teachers'),
                                array('name' => 'Y1 - Y4 Teachers', 'value' => 'Y1 - Y4 Teachers'),
                                array('name' => 'Y5 - Y9 Teachers', 'value' => 'Y5 - Y9 Teachers'),
                                array('name' => 'High School Teachers', 'value' => 'High School Teachers'),
                                array('name' => 'Office Staff', 'value' => 'Office Staff')
                );
                echo $this->Form->input('audience', array('data-native-menu' => 'false',
                                                        'multiple="multiple"',
                                                        'label' => 'Intended Audience :',
                                                        'options' => '$options',
                                                        'options' => $options,
                                                        'type' => 'select',
                                                        'empty' => 'Make your selection/s :')); 
            ?>
        </li>
        
        <!-- This is the section to hardcode the venues information. On the TO-DO list ... ... -->
        <li data-role="fieldcontain">
            <?php echo $this->Form->input('venue',  array('data-native-menu' => 'false', 
                                                    'label' => 'Venue :', 
                                                    'options' => array('ICT Lab A', 
                                                                'ICT Lab B', 
                                                                'Hall', 
                                                                'Library'), 
                                                    'empty' => 'Choose one ...'));
            ?>
        </li>
        
        <li data-role="fieldcontain">
            <?php echo $this->Form->label('startdate', 'Start Date : ', array('required' => 'required')); ?>
            <?php echo $this->Form->text('startdate', array('type' => 'date')); ?>
        </li>
        <li data-role="fieldcontain">
            <?php echo $this->Form->label('starttime', 'Start Time : '); ?>
            <?php echo $this->Form->text('starttime', array('label' => 'Start Time :', 'type' => 'time')); ?>
        </li>
        <li data-role="fieldcontain">
            <?php echo $this->Form->label('enddate', 'End Date : '); ?>
            <?php echo $this->Form->text('enddate', array('type' => 'date')); ?>
        </li>
        <li data-role="fieldcontain"> 
            <?php echo $this->Form->label('endtime', 'End Time : '); ?>
            <?php echo $this->Form->text('endtime', array('type' => 'time')); ?>
        </li>
        <li data-role="fieldcontain">    
            <?php echo $this->Form->input('conducted', array('label' => 'Conducted By :')); ?>
        </li>
        <li data-role="fieldcontain">
            <?php echo $this->Form->input('attachment', array('type' => 'file', 'label' => 'File Attachment :')); ?>
            <?php echo $this->Form->label('attachment', '<small>Please note that certain file attachments may not work with mobile devices. Results will vary.</small>'); ?>
        </li>
    </ul>
    <?php echo $this->Form->end('Update PD'); ?>
    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>