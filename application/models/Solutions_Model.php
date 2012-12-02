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
			'u_id' => 0
			'inq_id' => $inq_id
		);

		return $this->db->insert('solutions', $data);
	}

}	

?>
