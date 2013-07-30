<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'PD Portal - SIS@SS');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('notices');
        echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- <link rel="stylesheet" href="app/webroot/js/jquery.mobile-1.3.1.min.css" />
	<script src="app/webroot/js/jquery-1.9.1.min.js"></script>
	<script src="app/webroot/js/jquery.mobile-1.3.1.min.js"></script> -->
</head>
<body>
<!-- Start of Page -->
	<div data-role="page" id="container">
	
		<div data-role="panel" id="mypanel" data-position="left" data-position-fixed="true" data-display="push">
				<!-- panel content goes here -->
				<ul data-role="listview" data-divider-theme="a" data-inset="true">
					<li data-role="list-divider">Navigation</li>
					<li><a href="/pdportal/pds">List All PDs</a></li>
					<li><?php echo $this->Html->link("Create a PD", array('action' => 'add')); ?></li>
					<li><a href="#registeredPD">View Registered PDs</a></li>
					<li><a href="#conductedPD">View Conducted PDs</a></li>
					<li><a href="#attendedPD">View Attended PDs</a></li>
					<li><a href="#profile">Personal Profile</a></li>
				</ul>
				<div id="login_info">You are logged in as : SOME_USER.</div>
			
			<p><a href="#myheader" data-role="button" data-rel="close" >Close panel</a></p>
		</div><!-- /panel -->
	
	<!-- Header -->
		<div data-role="header" id="header" data-position="fixed">
			<a href="#mypanel" data-role="button" data-inline="true" data-icon="bars">Go to Page ...</a>
			<h1><?php echo $this->Html->link($cakeDescription, ''); ?></h1>
		</div>
		
	<!-- Content -->
		<div data-role="content" id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
	<!-- Footer -->
	<!--
		<div data-role="footer" id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	-->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
