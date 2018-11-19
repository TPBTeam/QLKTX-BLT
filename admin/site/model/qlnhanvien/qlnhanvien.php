<?php
class qlnhanvien
{
	private $__conn;
	function connect(){
		if(!$this->__conn){
			$this->__conn =  new mysqli('localhost', 'root', '', 'ooplearn');
			mysqli_set_charset($this->__conn,"utf8");
			if($this->__conn->connect_error){
				die("Loi ket noi");
			}
		}
	}

	function addnvql($table,$data){
		$this->connect();
		$field_list ='';
		$value_list ='';

		foreach ($data as $key => $value) {
			$field_list .= ",$key";
			$value_list .= ",'$value'";
		}
		$qr = 'INSERT INTO '.$table.' ('.trim($field_list,',').') VALUES ('.trim($value_list,',').') ';
		if($this->__conn->query($qr) !== TRUE){
			echo 'Lỗi rồi';
		}

	}

}

?>