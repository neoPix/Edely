<prenoms>
	<?php foreach($this->get('prenoms') as $prenom):?>
		<prenom><?php echo $prenom['name'];?></prenom>
	<?php endforeach;?>
</prenoms>