<?php
require_once "task.class.php";
require_once "service.php";

$service = new Service();

if (isset($_POST['operation'])) {
	switch ($_POST['operation']) {
		case 'send':
			$service->insert(
				new Task(
					$_POST['id'],
					$_POST['name'],
					$_POST['info'],
					$_POST['value']
				)
			);
			break;
		
		default:
			# code...
			break;
	}
}


?>