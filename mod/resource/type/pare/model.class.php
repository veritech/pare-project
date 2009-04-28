<?php
class model {
	
	private $table = 'test';
	
	public function read($id = null) {
		//global $CFG,$db;

		
		if( $id == null ){
			$dbdata = get_records($this->table, 1, 1,'id ASC');
		}
		else{
			$dbdata = get_record($this->table, "id", $id);
		}
		
		return $dbdata;
		
	}

	public function create($data) {
		$data = array("id" => "1", "name" => "carp", "tel" => "022077455");
		$dbdata = insert_record($this->table,$data);
		return $dbdata;
	}
	

	public function delete($id) {
		$dbdata = delete_records($this_table, "id", $id);
		return $dbdata;
	}
	

	public function update($data) {
		$data = array("name" => "dascarp", "tel" => "022077600");
		$dbdata = update_record($this->table,$data);
		return $dbdata;
	}
	
	////////////////////////////////////////////////////////
	
	public function setTable($table) {
		$this->table = $table;
	}
	
	
}





?>