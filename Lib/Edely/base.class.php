<?php
	class base{
		public $helpers=array();

		public function useHelper($name){
			if(!class_exists($name.'Helper')){
				if(file_exists(HELPER.strtolower($name).'Helper.php'))
					include HELPER.strtolower($name).'Helper.php';
				else throw new ServerErrorException(__('The Helper {name} does not exists.', array('name'=>$name)));
			}
			if(!isset($this->helpers[$name])){
				if(class_exists($name.'Helper'))eval('$this->helpers[$name]=new '.$name.'Helper();');
				else throw new ServerErrorException(__('The Helper {name} does not exists.', array('name'=>$name)));
			}
		}

		public function __get($key){
			if(isset($this->helpers[$key])){
				return $this->helpers[$key];
			}
			return null;
		}
	}