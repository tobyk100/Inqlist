<?php

class Comments_model extends CI_Model{
	/**
	* Model for comments
	**/
	public function __construct(){
		$this->load->database();
	}

	public function get_comments($sol_id, $c_start, $c_num){
		$query = $this->db->order_by('date', DESC);
		$query = $this->db->get_where('comments', array('s_id' => $sol_id), $c_num, $c_start);
	}

	public function create_comment($body, $sol_id){

		$data = array(
			'body' => $body,
			'date_created' => date_create(),
			's_id' => $sol_id,
			'u_id' => 0
		)
	}

}

?>