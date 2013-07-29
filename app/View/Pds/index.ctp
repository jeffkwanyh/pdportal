<!-- File: /app/View/Pds/index.ctp -->

<h3>List All PDs</h3>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <ul data-role="listview" data-filter="true" data-filter-placeholder="Search for PDs ..." data-inset="true">
    	<li data-role="list-divider">All PDs ...</li>
        <?php foreach ($pds as $pd): ?>
            <li><?php echo $this->Html->link($pd['Pd']['title'], array('action' => 'view', $pd['Pd']['id'])); ?></li>
        <?php endforeach; ?>
        <?php unset($pd); ?>
    </ul>