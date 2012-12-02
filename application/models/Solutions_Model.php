<?php

class Solutions_Model extends CI_Model{
	/**
	* Model for Solutions
	* Various db calls for different lists of inqulings
	*
	*
	**/
	public function __construct(){
		$this->load->database();
	}

	public function get_solutions($inqID, $sol_start = 0, $sol_num = 3){
		$query = $this->db->order_by('rating', DESC);
		$query = $this->db->get_where(/*solution table*/, array('inqID' => $inqID), $sol_num, $sol_start);
		return $query->result_array();
	}

	public function create_solution($inqID, $solution, $user){

		$data = array(
			'inq_id' => $inqID,
			'body' => $solution,
			'up_votes' => 1,
			'down_votes' => 0,
			'u_id' => $user,
			'inapp_flag' => false

		);

		return $this->db->insert('solutions', $data);
	}

}	

?>
