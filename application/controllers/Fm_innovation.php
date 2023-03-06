<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_innovation extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model('innovation_model');
	}

	public function index()
	{
		$data['query']=$this->innovation_model->show_innovation();
		$this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/innovation',$data);
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
        $this->load->view('pages/forms/forms-innovation');
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
	public function adding()
	{
		$this->innovation_model->add_innovation_model();
	}

}
