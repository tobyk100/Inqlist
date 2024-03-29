<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('inqling_model');
    $this->load->model('solutions_model');
    $this->load->model('comments_model');
    $this->load->model('votes_model');
  }
	public function index()
	{
		$this->load->view('header');

    $data['inqlings'] = $this->inqling_model->get_new_inqlings();


		$this->load->view('welcome_message', $data);		
		$this->load->view('footer');
	}
  public function get_inqlings() {
    $inqlings = $this->inqling_model->get_inqling();
    return $inqlings;
  }
  public function create_inqling() {
    $body = $this->input->post('body');
    $new_inqling = $this->inqling_model->create_inqling($body);
    $this->output->set_output(json_encode($new_inqling));
  }

  public function submit_vote(){
    $sol_num = $this->input->post('sol_num');
    $urg_num = $this->input->post('urg_num');
    $inq_id = $this->input->post('id');
    $this->votes_model->create_vote($sol_num, $urg_num, $inq_id);
  }

  public function get_solutions() {
    $inq_id = $this->input->post('id');
    $solutions = $this->solutions_model->get_solutions($inq_id);
    $this->output->set_output(json_encode($solutions));
  }

  public function upvote_solution(){
    $s_id = $this->input->post('id');
    $out = $this->solutions_model->add_vote($s_id);
    $this->output->set_output(json_encode($out));
  }

  public function downvote_solution(){
    $s_id = $this->input->post('id');
    $out = $this->solutions_model->sub_vote($s_id);
    $this->output->set_output(json_encode($out));
  }
  
  public function create_solution() {
    $body = $this->input->post('body');
    $inqling_id = $this->input->post('inqling');
    $new_solution = $this->solution_model->create_solution($body, $inqling_id);
    $this->output->set_output(json_encode($new_solution));
  }
  public function create_comment() {
    $body = $this->input->post('body');
    $inqling_id = $this->input->post('inqling');
    $new_solution = $this->solution_model->create_solution($body, $inqling_id);
    $this->output->set_output(json_encode($new_solution));
  }
}
