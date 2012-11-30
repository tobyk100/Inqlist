<?php

class Inqling_model extends CI_Model{
	/**
	* Model for Inqlings
	* Various db calls for different lists of inqulings
	*
	*
	**/
	public function __construct(){
		$this->load->database();
	}


	//Gets all or a particular inquling
	public function get_inqling($inq_id = -1){
		if($inq_id === -1){
			$query = $this->db->get('inqlings');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('inqlings',array('inqID' => $inq_id));
		}
	}

	//Get ranked inqulings based on algorithm that we do not know
	//Less urgent
	public function get_rank_inqlings($inq_start = 0, $inq_num = 10){
		#Urgency 0-50, Solution 0-100
		#overall rating = urgency * solution
		$query = $this->db->order_by("overall_rating", ASC);
		$query = $this->db->get('inqlings',$inq_num, $inq_start);
		return $query->result_array();			
	}

	//Gets new inquling based on date
	public function get_new_inqulings($inq_start = 0, $inq_num = 10){
		$query = $this->db->order_by("date", ASC);
		$query = $this->db->get('inqlings',$inq_num, $inq_start);
		return $query->result_array();		
	}

	//Gets top inqulings based on algorithm that we do not know
	public function get_top_inqlings($inq_start = 0, $inq_num = 10){
		#Urgency 0-50, Solution 0-100
		#overall rating = urgency * solution
		$query = $this->db->order_by("overall_rating", ASC);
		$query = $this->db->get('inqlings',$inq_num, $inq_start);
		return $query->result_array();			
	}

	//Gets trendign inqulings based on algo that we don't know either
	public function get_trending_inqlings($inq_id = -1){
		$query = $this->db->get_where('votes',2,0);
		foreach($query->result_array as $row){
			//do magic
		}
	}

	public function create_inqling($body){
    $date_created = date_format(date_create(), 'Y-m-d H:i:sP');
		$data = array(
			'body' => $body,
			'rating' => sqrt(5000),
			'date_created' => $date_created,
			'url' =>  '/assets/images/something.jpg',
			'u_id' => 1
		);

		return $this->db->insert('inqlings', $data);
	}
}

?>
