<?php
require "libs/connect.php";
class qlkhu{
	function add($table,$data){
		$field_list ='';
		$value_list ='';

		foreach ($data as $key => $value) {
			$field_list .= ','.$key.'';
			$value_list .= ",'$value'";
		}
		$sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
		return $this->__conn->query($sql);
	}
}
?>