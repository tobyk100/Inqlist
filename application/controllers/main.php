<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('inqling_model');
    $this->load->model('solution_model');
    $this->load->model('comment_model');
  }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');		
		$this->load->view('footer');
	}
  public function get_inqlings() {
    $inqlings = $this->inqling_model->get_inqling();
    return json_encode($inqlings);
  }
  public function create_inqling() {
    $body = $this->input->post('body');
    $new_inqling = $this->inqling_model->create_inqling($body);
    $this->output->set_output(json_encode($new_inqling));
  }
  public function create_solution() {
    $body = $this->input->post('body');
    $inqling_id = $this->input->post('inqling');
    $new_solution = $this->->solution_model->create_solution($body, $inqling_id);
    $this->output->set_output(json_encode($new_solution));
  }
  public function create_comment() {
    $body = $this->input->post('body');
    $inqling_id = $this->input->post('inqling');
    $new_solution = $this->->solution_model->create_solution($body, $inqling_id);
    $this->output->set_output(json_encode($new_solution));
  }
}
