<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_participant extends CI_Controller {


	public function index()
	{
		$this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pages/forms/forms-participant');
        $this->load->view('templates/footer');
		$this->load->view('myjs');
	}

 

}
