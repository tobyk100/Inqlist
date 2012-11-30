<?php

class Solutions_model extends CI_Model{
	/**
	* Model for Solutions
	**/
	public function __construct(){
		$this->load->database();
	}

	public function get_solutions($inq_id, $sol_start = 0, $sol_num = 3){
		$query = $this->db->order_by('rating', DESC);
		$query = $this->db->get_where('solutions', array('inqID' => $inqID), $sol_num, $sol_start);
		return $query->result_array();
	}

	public function create_solution($body, $inq_id){

		$data = array(			
			'body' => $solution,
			'up_votes' => 1,
			'down_votes' => 0,
			'inapp_flag' => false,
			'date_created' => date_create(),
			'u_id' => 0,
			'inq_id' => $inq_id
		);

		return $this->db->insert('solutions', $data);
	}

	public function add_vote($v_id){
		$query = $this->db->get_where('solutions', array('id' => $v_id));
		$solution = $query->row_array();

		$solution['up_votes']++;

		$this->db->where('id', $v_id);
		$this->db->update('votes', $solution);
	}

	public function sub_vote($v_id){
		$query = $this->db->get_where('solutions', array('id' => $v_id));
		$solution = $query->row_array();

		$solution['down_votes']++;

		$this->db->where('id', $v_id);
		$this->db->update('votes', $solution);
	}

	public function solution_ratio($v_id){
		$query = $this->db->get_where('solutions', array('id' => $v_id));
		$solution = $query->row_array();

		return $solution['upvote']/$solution['downvote'];
	}
}	

?>
