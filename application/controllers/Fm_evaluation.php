<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fm_evaluation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evaluation_model');
    }
    public function index()
    {
        $data['query']=$this->evaluation_model->show_evaluation_criteria();

        // 		echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard/evaluation',$data);
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
    public function sh2()
    {
        $data['query']=$this->evaluation_model->show_evaluation_criteria_level();//sh2

        // 		echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard/evaluation',$data);
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }

    public function sh3()
    {
        $data['query']=$this->evaluation_model->show_evaluation_criteria_composition();//sh3

        // 		echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard/evaluation',$data);
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
    public function sh4()
    {
        $data['query']=$this->evaluation_model->show_evaluation_criteria_composition_level();//sh4

        // 		echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard/evaluation',$data);
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
    public function sh5()
    {
        $data['query']=$this->evaluation_model->show_school_evaluation_level();//sh4

        // 		echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard/evaluation',$data);
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
    public function sh6()
    {
        $data['query']=$this->evaluation_model->show_sec_and_secl();//sh6

        // 		echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('mycss');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard/evaluation',$data);
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
        $this->load->view('pages/forms/forms-evaluation');
        $this->load->view('templates/footer');
        $this->load->view('myjs');
    }
    
    public function insert_evaluation_criteria()
    {
        $this->evaluation_model->insert_evaluation_criteria_model();
    }
    public function insert_evaluation_criteria_level()//sh2
    {
        $this->evaluation_model->insert_evaluation_criteria_level_model();
    }
    public function insert_evaluation_criteria_composition()//sh3
    {
        $this->evaluation_model->insert_evaluation_criteria_composition_model();
    }
    public function insert_evaluation_criteria_composition_level()//sh4
    {
        $this->evaluation_model->insert_evaluation_criteria_composition_level_model();
    }
    public function insert_school_evaluation()//sh5
    {
        $this->evaluation_model->insert_school_evaluation_model();
    }
    public function insert_sec_and_secl()//sh6
    {
        $this->evaluation_model->insert_sec_and_secl_model();
    }
    

}
