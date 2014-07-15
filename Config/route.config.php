<?php
	/**
	 * Définition des chemins de routage
	 * Ce sont des Expressions régulières
	**/
	Rooter::add('/', array('controller'=>'Test', 'action'=>'Test'));
	Rooter::add('/test2/(?P<param1>.*)\.json', array('controller'=>'Test', 'action'=>'Test2', 'type'=>'json'));
	Rooter::add('/test2/(?P<param1>.*)', array('controller'=>'Test', 'action'=>'Test2'));
	Rooter::add('/json', array('controller'=>'Test', 'action'=>'Test', 'type'=>'json'));
	Rooter::add('/xml', array('controller'=>'Test', 'action'=>'Test', 'type'=>'xml'));