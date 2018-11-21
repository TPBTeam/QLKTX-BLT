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
			case 'list':
				require_once "list.php";
				break;
			case 'detail':
				require_once "detail.php";
				break;
			default:
				// code...
				break;
		}
	}
?>