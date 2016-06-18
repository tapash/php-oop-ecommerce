<?php
class Application {

	public $db;

	public function __construct(Dbase $db) {
		$this->db = $db;
	}

}
