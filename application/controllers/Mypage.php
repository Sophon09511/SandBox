<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {


	public function index()
	{
        $this->load->view('mycss');
		$this->load->view('mypage_view');
		$this->load->view('myjs');
		echo'';
	}
	public function page2()
	{
        $this->load->view('mycss');
		$this->load->view('mypage_view2');
		$this->load->view('mycss');
		echo'';
	}

}
