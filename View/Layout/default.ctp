<html>
	<head>
		<title></title>
		<?php echo $this->Html->style('test.css');?>
		<?php echo $this->Html->script('test.js');?>
		<?php echo $this->Html->meta('description', 'ma superbe description');?>
	</head>
	<body>
		<div>
			<h1><?php echo __('My web site');?></h1>
			<?php echo $this->get('content_for_layout')?>
		</div>
	</body>
</html>