<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_best_practice extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('best_practice_model');
	}
	public function index()
	{
		$data['query']=$this->best_practice_model->show_best_practice();
		$this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/best_practice',$data);
        $this->load->view('templates/footer');
		$this->load->view('myjs');
	}
	public function forms()
    {
        
        // 		echo '<pre>';
        // print_r($data_q_member . $data_q_committee);
        // echo '</pre>';
        // exit;
        
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pages/forms/forms-best_practice');
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
	public function adding()
	{
		$this->best_practice_model->add_best_practice_model();

		
	}


}
