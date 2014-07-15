<?php
	class Test extends Model{
		
		public $id=null;
		public $name=null;
		
		function __construct($id=null, $name=null){
			$this->id = $id;
			$this->name=$name;
		}
	}