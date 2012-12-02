<?php

class Votes_model extends CI_Model{
	/**
	* Model for Votes
	**/
	public function __construct(){
		$this->load->database();
	}

	public function get_votes($inq_id, $v_start = 0, $v_num = 5){
		$query = $this->db->order_by('date', "DESC");
		$query = $this->db->get_where('votes', array('inqID' => $inqID), $v_num, $v_start);
		return $query->result_array();
	}

	public function calculate_rating($inq_id){
		$votes = get_votes($inq_id);
		$sol_total = 0;
		$urg_total = 0;

		if(count($votes) === 0){
			return sqrt(5000); //Default value
		}else{

			foreach($votes as $vote){
				$sol_total += $vote['solution'];
				$urg_total += $vote['urgency'];
			}

			$sol_avg = $sol_total / count($votes);
			$urg_avg = $urg_total / count($votes);

			return sqrt(pow(100 - $sol_total,2) + pow(100 - $urg_total,2));
		}
	}

	public function calculate_public_rating($inq_id){
		$pub_rating = $calculate_rating($inq_id) / (10 * sqrt(2));
		return round($pub_rating, 1);
	}

	public function create_vote($s_num, $u_num, $inq_id){
		$data = array(
			'solution' => $s_num,
			'urgency' => $u_num,
			'date_created' => date_create(),
			'u_id' => 0, //Placeholder
			'inq_id' => $inq_id
		);

		$this->db->insert('votes', $data);
		update_rating($inq_id);
	}

	private function update_rating($inq_id){
		$data = array(
			'rating' => calculate_rating($inq_id),
			'pub_rating' => calculate_public_rating($inq_id)
		);

		$this->db->where('id', $inq_id);
		$this->db->update('inqlings', $data);
	}

}	

?>
