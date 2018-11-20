<?php 
	if(isset($_GET["act"])){
		switch ($_GET["act"]) {
			case 'add':
				require_once "add.php";
				break;
			case 'delete':
				require_once "delete.php";
				break;
			case 'edit':
				require_once "edit.php";
				break;
			default:
				// code...
				break;
		}
	}
?>