<?php echo $this->Html->link('test', array(), array('class'=>array('text', 'html')))?>
<ul>
	<?php foreach($this->get('prenoms') as $prenom):?>
		<li><?php echo $prenom['name'];?></li>
	<?php endforeach;?>
</ul>
<?php echo $this->Html->image('test.jpg');?>