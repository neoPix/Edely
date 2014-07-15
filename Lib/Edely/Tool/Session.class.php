<?php
    class Session{
	public static function init(){
	    session_start();
	}
	
	public static function read($k){
		$ks = explode('.', $k);
		$elm = &$_SESSION['session'];
		for($i=0;$i<count($ks);$i++){
			if(isset($elm[$ks[$i]]))
				$elm = &$elm[$ks[$i]];
			else
				return null;
		}
		return $elm;
	}
	
	public static function write($key, $value){
		$ks = explode('.',$key);
		$elm = &$_SESSION['session'];
		for($i=0;$i<count($ks);$i++)
		{
			if(!isset($elm[$ks[$i]]))
				$elm[$ks[$i]] = array();
			$elm = &$elm[$ks[$i]];
		}
		$elm = $value;
	}
	
	public static function remove($k){
		$ks = explode('.', $k);
		$elm = '$_SESSION[\'session\']';
		for($i=0;$i<count($ks);$i++){
		    $elm.='[\''.$ks[$i].'\']';
		}
		eval('unset('.$elm.');');
	}
    }
    
    Session::init();