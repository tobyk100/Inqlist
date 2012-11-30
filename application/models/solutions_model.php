<?php

class Solutions_model extends CI_Model{
	/**
	* Model for Solutions
	**/
	public function __construct(){
		$this->load->database();
	}

	public function get_solutions($inq_id, $sol_start = 0, $sol_num = 3){
		$query = $this->db->select('id, body');
		$query = $this->db->order_by('up_votes', 'DESC');		
		$query = $this->db->get_where('solutions', array('inq_id' => $inq_id), $sol_num, $sol_start);
		$results = $query->result_array();
		return $results;
	}

	public function create_solution($body, $inq_id){

		$data = array(			
			'body' => $body,
			'up_votes' => 1,
			'down_votes' => 0,
			'inapp_flag' => false,
			'date_created' => date_create(),
			'u_id' => 1,
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
		return "Vote successful";
	}

	public function sub_vote($v_id){
		$query = $this->db->get_where('solutions', array('id' => $v_id));
		$solution = $query->row_array();

		$solution['down_votes']++;

		$this->db->where('id', $v_id);
		$this->db->update('votes', $solution);
		return "Vote successful";
	}

	public function solution_ratio($v_id){
		$query = $this->db->get_where('solutions', array('id' => $v_id));
		$solution = $query->row_array();

		return $solution['upvote']/$solution['downvote'];
	}
}	

?>
