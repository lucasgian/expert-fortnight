<?php

Class Service {
	static $json_name;

	function __construct() {}

	function insert($task) {
		$fp = fopen('task.json', 'a');
		fwrite($fp, json_encode($task->array()));
		fclose($fp);
	}
}
?>