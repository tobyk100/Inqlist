<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('inqling_model');
  }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');		
		$this->load->view('footer');
	}
  public function get_inqlings() {
    $inqlings = $this->inqling_model->get_inqling();
    print_r($inqlings);
    return json_encode($inqlings);
  }
  public function create_inqling() {
    $body = "hi";//$this->input->post(NULL);
    $new_inqling = $this->inqling_model->create_inqling($body);
    return $body;
  }
}
