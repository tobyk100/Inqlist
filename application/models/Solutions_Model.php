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

	public function create_solution($inqID, $solution){

		$data = array(
			'id' => $inqID,
			'body' => $solution
		);

		return $this->db->insert('solutions', $data);
	}

}	

?>
