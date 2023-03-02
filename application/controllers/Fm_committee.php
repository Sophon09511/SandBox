<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_committee extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('committee_model');
			
	}
	public function committee()
	{
		
		$data_q_committee['q_committee']=$this->committee_model->show_committee_model();
		
		
// 		echo '<pre>';
// print_r($data_q_member . $data_q_committee);
// echo '</pre>';
// exit;

$this->load->view('mycss');
$this->load->view('templates/header');
$this->load->view('templates/sidebar');
$this->load->view('pages/dashboard/committee' , $data_q_committee);
$this->load->view('templates/footer');
$this->load->view('myjs');

	}

	public function member()
	{
		
		
		$data_q_member['q_member']=$this->committee_model->show_committee_member_model();
		
// 		echo '<pre>';
// print_r($data_q_member . $data_q_committee);
// echo '</pre>';
// exit;

$this->load->view('mycss');
$this->load->view('templates/header');
$this->load->view('templates/sidebar');
$this->load->view('pages/dashboard/committee', $data_q_member);
$this->load->view('templates/footer');
$this->load->view('myjs');

	}

	public function form_page()
	{
		
		
		
		// echo '<pre>';
		// print_r($data);
		// echo'</pre>';
		// exit;
		$this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pages/forms/forms-committee');
        $this->load->view('templates/footer');
		$this->load->view('myjs');
	}

	public function adding()
	{
		$this->committee_model->add_committee_model();

		
	}
	public function adding_member()
	{
		$this->committee_model->add_committee_member_model();

		
	}

}
