<?php
	$page = $_GET['page']; 
	function __autoload($filename){
		include_once('site/model/'.$GLOBALS['page'].'/'.$filename.'.php');
	}	
?>