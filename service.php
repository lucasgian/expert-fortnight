<?php

Class Service {
	static $json_name;

	function __construct() {}

	function post($task) {
		$file_container = $this->open_file('task.json');
		array_push($file_container, $task->array());

		$this->write_w('task.json', $file_container);
	}
	function get($id) {
		$json = $this->open_file('task.json');
		
		foreach($json as $register):
		    if($id == $register->id):
		    	echo $register->id;
		    	return  $register;
		    endif;
		endforeach;
	}
	function put($id, $data) {
		$json = $this->open_file('task.json');
		$update_json = array();

		foreach($json as $register):
		    if($id == $register->id):
		    	$register = $data;
		    endif;
			array_push($update_json, $register);
		endforeach;	

		$this->write_w('task.json', $update_json);
	}
	function delete($id) {
		$json = $this->open_file('task.json');
		$update_json = array();

		foreach($json as $register):
		    if($id != $register->id):
		    	array_push($update_json, $register);
		    endif;
		endforeach;	

		$this->write_w('task.json', $update_json);
	}
	function open_file($file_name) {
		return json_decode(file_get_contents($file_name));
	}
	function write_w($file_name, $data) {
		$fp = fopen($file_name, 'w');
		fwrite($fp, json_encode($data));
		fclose($fp);
	}
}
?>