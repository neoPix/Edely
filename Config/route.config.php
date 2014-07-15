<?php
	/**
	 * Définition des chemins de routage
	 * Ce sont des Expressions régulières
	**/
	Router::add('/', array('controller'=>'Test', 'action'=>'Test'));
	Router::add('/test2/(?P<param1>.*)\.json', array('controller'=>'Test', 'action'=>'Test2', 'type'=>'json'));
	Router::add('/test2/(?P<param1>.*)', array('controller'=>'Test', 'action'=>'Test2'));
	Router::add('/json', array('controller'=>'Test', 'action'=>'Test', 'type'=>'json'));
	Router::add('/xml', array('controller'=>'Test', 'action'=>'Test', 'type'=>'xml'));