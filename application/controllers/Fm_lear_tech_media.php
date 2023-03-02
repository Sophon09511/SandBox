<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_lear_tech_media extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			$this->load->model('lear_tech_media_model');
	}

	public function index()
	{
		$this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pages/forms/forms-learning_technology_media');
        $this->load->view('templates/footer');
		$this->load->view('myjs');
	}

	public function adding()
	{
		$this->lear_tech_media_model->add_lear_tech_media_model();

		
	}

}
