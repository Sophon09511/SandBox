<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fm_evaluation extends CI_Controller
{

	public function construct()
	{
		parent::__construct();
		$this->load->model('evaluation_model');
	}

	public function EVALUATION_CRITERIA()
	{

		$data['query']=$this->evaluation_model->show_EVALUATION_CRITERIA_model();


		// 		echo '<pre>';
		// print_r($data_q_member . $data);
		// echo '</pre>';
		// exit;

		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/evaluation');
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}


	public function EVALUATION_CRITERIA_LEVEL()
	{

		$data['query'] = $this->evaluation_model->show_EVALUATION_CRITERIA_LEVEL_model();


		// 		echo '<pre>';
		// print_r($data_q_member . $data);
		// echo '</pre>';
		// exit;

		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/evaluation', $data);
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}

	public function EVALUATION_CRITERIA_COMPOSITION()
	{

		$data['query'] = $this->evaluation_model->show_EVALUATION_CRITERIA_COMPOSITION_model();


		// 		echo '<pre>';
		// print_r($data_q_member . $data);
		// echo '</pre>';
		// exit;

		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/evaluation', $data);
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}

	public function EVALUATION_CRITERIA_COMPOSITION_LEVEL()
	{

		$data['query'] = $this->evaluation_model->show_EVALUATION_CRITERIA_COMPOSITION_LEVEL_model();


		// 		echo '<pre>';
		// print_r($data_q_member . $data);
		// echo '</pre>';
		// exit;

		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/evaluation', $data);
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}

	public function SCHOOL_EVALUATION_CRITERIA()
	{

		$data['query'] = $this->evaluation_model->show_SCHOOL_EVALUATION_CRITERIA_model();


		// 		echo '<pre>';
		// print_r($data_q_member . $data);
		// echo '</pre>';
		// exit;

		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/evaluation', $data);
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}

	public function SCHOOL_EVALUATION()
	{

		$data['query'] = $this->evaluation_model->show_SCHOOL_EVALUATION_model();


		// 		echo '<pre>';
		// print_r($data_q_member . $data);
		// echo '</pre>';
		// exit;

		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/dashboard/evaluation', $data);
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}




	public function form_page()
	{
		$this->load->view('mycss');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/forms/forms-evaluation');
		$this->load->view('templates/footer');
		$this->load->view('myjs');
	}


	public function add_EVALUATION_CRITERIA()
	{
		$this->evaluation_model->add_EVALUATION_CRITERIA_model();
	}
	public function add_EVALUATION_CRITERIA_LEVEL()
	{

		$this->evaluation_model->add_EVALUATION_CRITERIA_LEVEL_model();
	}

	public function add_EVALUATION_CRITERIA_COMPOSITION()
	{

		$this->evaluation_model->add_EVALUATION_CRITERIA_COMPOSITION_model();
	}

	public function add_EVALUATION_CRITERIA_COMPOSITION_LEVEL()
	{

		$this->evaluation_model->add_EVALUATION_CRITERIA_COMPOSITION_LEVEL_model();
	}

	public function add_SCHOOL_EVALUATION()
	{

		$this->evaluation_model->add_SCHOOL_EVALUATION_model();
	}

	public function add_SCHOOL_EVALUATION_CRITERIA()
	{

		$this->evaluation_model->add_SCHOOL_EVALUATION_CRITERIA_model();
	}
	public function add_SCHOOL_EVALUATION_CRITERIA_LEVEL()
	{

		$this->evaluation_model->add_SCHOOL_EVALUATION_CRITERIA_LEVEL_model();
	}
}
