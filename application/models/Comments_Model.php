<?php

class Comments_Model extends CI_Model{
	/**
	* Model for Inqulings
	* Various db calls for different lists of inqulings
	*
	*
	**/
	public function __construct(){
		$this->load->database();
	}

	public function get_comments($sol_id, $c_start, $c_num){

	}

}

?>