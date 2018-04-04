<?php
class Task {
	public $id;
	public $name;
	public $info;
	public $value;

	function __construct($id, $name, $info, $value) {
		$this->id = $id;
		$this->name =$name;
		$this->info = $info;
		$this->value = $value;
	}

	public function array() {
		return [
			"id" => $this->id,
			"name" => $this->name,
			"info" => $this->info,
			"value" => $this->value
		];
	}
}

?>