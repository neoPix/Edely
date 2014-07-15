<?php
	class TestController extends Controller{
		function __construct()
		{
			$this->cacheView = array(
				'Test' => 'daily'
			);
			$this->acl = array(
				'Test'=>array('all'),
				'Test2'=>array('all')
			);
		}

		function Test()
		{
			$this->useHelper('Html');
			if(!$this->viewInCache){
				$this->useDao('Test');
				$this->set('prenoms', $this->Test->find(array('name')));
			}
		}
		
		function Test2()
		{
			$this->useHelper('Html');
			if(!$this->viewInCache){
				$this->useDao('Test');
				$this->set('testuser', $this->Test->load(10));
			}
		}
	}