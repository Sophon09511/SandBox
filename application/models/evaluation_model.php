<?php
class evaluation_model extends CI_Model
{

	public function insert_evaluation_criteria_model() //sh
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
		$data = array(
			'INNOVATION_AREA_CODE' => $this->input->post('INNOVATION_AREA_CODE'),
			'CRITERIA_NAME' => $this->input->post('CRITERIA_NAME'),
			'CRITERIA_DESCRIPTION' => $this->input->post('CRITERIA_DESCRIPTION')

		);
		$query = $this->db->insert('EVALUATION_CRITERIA', $data);
		if ($query) {
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลการประกันคุณภาพด้วยตัวชี้วัดของพื้นที่!"; // กำหนดค่า success ใน session เป็น true
			header("Location: " . site_url('Fm_evaluation?page=sh2'));
			// ไปยังหน้าก่อนหน้านี้

		} else {
			echo 'false';
		}
	}
	public function insert_evaluation_criteria_level_model() //sh2
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
		$data = array(
			'CRITERIA_LEVEL_ID' => $this->input->post('CRITERIA_LEVEL_ID'),
			'CRITERIA_ID' => $this->input->post('CRITERIA_ID'),
			'LEVEL_INDEX' => $this->input->post('LEVEL_INDEX'),
			'LEVEL_NAME' => $this->input->post('LEVEL_NAME')

		);
		$query = $this->db->insert('EVALUATION_CRITERIA_LEVEL', $data);
		if ($query) {
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลองค์ประกอบตัวชี้วัด!"; // กำหนดค่า success ใน session เป็น true
			header("Location: " . site_url('Fm_evaluation/sh2?page=sh2'));
			// ไปยังหน้าก่อนหน้านี้

		} else {
			echo 'false';
		}
	}
	public function insert_evaluation_criteria_composition_model() //sh3
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
		$data = array(
			'CRITERIA_ID' => $this->input->post('CRITERIA_ID'),
			'COMPOSITION_INDEX' => $this->input->post('COMPOSITION_INDEX'),
			'COMPOSITION_NAME' => $this->input->post('COMPOSITION_NAME'),
			'COMPOSITION_WEIGHT_SCORE' => $this->input->post('COMPOSITION_WEIGHT_SCORE'),
			'COMPOSITION_GUIDELIINE' => $this->input->post('COMPOSITION_GUIDELIINE')


		);
		$query = $this->db->insert('EVALUATION_CRITERIA_COMPOSITION', $data);
		if ($query) {
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลองค์ประกอบตัวชี้วัด!"; // กำหนดค่า success ใน session เป็น true
			header("Location: " . site_url('Fm_evaluation/sh3?page=sh3'));
			// ไปยังหน้าก่อนหน้านี้

		} else {
			echo 'false';
		}
	}
	public function insert_evaluation_criteria_composition_level_model() //sh4
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
		$data = array(
			'CRITERIA_COMPOSITION_ID' => $this->input->post('CRITERIA_COMPOSITION_ID'),
			'CRITERIA_LEVEL_ID' => $this->input->post('CRITERIA_LEVEL_ID'),
			'COMPOSITION_LEVEL_DESCRIPTION' => $this->input->post('COMPOSITION_LEVEL_DESCRIPTION')


		);
		$query = $this->db->insert('EVALUATION_CRITERIA_COMPOSITION_LEVEL', $data);
		if ($query) {
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลองค์ประกอบตัวชี้วัดพื้นที่!"; // กำหนดค่า success ใน session เป็น true
			header("Location: " . site_url('Fm_evaluation/sh4?page=sh4'));
			// ไปยังหน้าก่อนหน้านี้

		} else {
			echo 'false';
		}
	}
	public function insert_school_evaluation_model() //sh5
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
		$data = array(
			'SCHOOL_ID' => $this->input->post('SCHOOL_ID'),
			'EVALUATION_NAME' => $this->input->post('EVALUATION_NAME'),
			'EVALUATION_DESCRIPTION' => $this->input->post('EVALUATION_DESCRIPTION')


		);
		$query = $this->db->insert('SCHOOL_EVALUATION', $data);
		if ($query) {
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลผลการประเมินโรงเรียน!"; // กำหนดค่า success ใน session เป็น true
			header("Location: " . site_url('Fm_evaluation/sh5?page=sh5'));
			// ไปยังหน้าก่อนหน้านี้

		} else {
			echo 'false';
		}
	}
	public function insert_sec_and_secl_model() //sh6
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
		$data1 = array(
			'SCHOOL_EVALUATION_ID' => $this->input->post('SCHOOL_EVALUATION_ID'),
			'CRITERIA_ID' => $this->input->post('CRITERIA_ID'),
			'SELF_EVALUATE_FLAG' => $this->input->post('SELF_EVALUATE_FLAG'),
			'EVALUATOR_NAME' => $this->input->post('EVALUATOR_NAME'),
			'SCHOOL_EVALUATION_CODE' => $this->input->post('SCHOOL_EVALUATION_CODE')


		);
		$data2 = array(
			'SCHOOL_EVALUATION_CRITERIA_ID' => 0,
			'CRITERIA_COMPOSITION_ID' => $this->input->post('CRITERIA_COMPOSITION_ID'),
			'LEVEL_INDEX' => $this->input->post('LEVEL_INDEX')
		);
		// เรียกใช้งานฐานข้อมูล
		$this->load->database();

		// เริ่ม transaction
		$this->db->trans_begin();

		// insert ข้อมูลลงในตารางที่ 1
		$this->db->insert('SCHOOL_EVALUATION_CRITERIA', $data1);

		// ดึงค่า primary key ของข้อมูลที่ insert เข้าไปในตารางที่ 1 ล่าสุด
		$pk = $this->db->insert_id();

		// set foreign key ให้กับข้อมูลที่ insert เข้าไปในตารางที่ 2
		$data2['SCHOOL_EVALUATION_CRITERIA_ID'] = $pk;
		// insert ข้อมูลลงในตารางที่ 2
		$this->db->insert('SCHOOL_EVALUATION_CRITERIA_LEVEL', $data2);
		// commit transaction
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลผลการประเมินโรงเรียน!"; // กำหนดค่า success ใน session เป็น true
			header("Location: " . site_url('Fm_evaluation/sh6?page=sh6'));
			// ไปยังหน้าก่อนหน้านี้
		}
		
		
	}

	public function show_evaluation_criteria()
	{
		$this->db->select('*');
		$this->db->from('EVALUATION_CRITERIA as eva_cri');
		$query = $this->db->get();
		return $query->result();
	}
	public function show_evaluation_criteria_level() //sh2
	{
		$this->db->select('*');
		$this->db->from('EVALUATION_CRITERIA_LEVEL as eva_cri');
		$query = $this->db->get();
		return $query->result();
	}
	public function show_evaluation_criteria_composition() //sh3
	{
		$this->db->select('*');
		$this->db->from('EVALUATION_CRITERIA_COMPOSITION as eva_cri');
		$query = $this->db->get();
		return $query->result();
	}
	public function show_evaluation_criteria_composition_level() //sh4
	{
		$this->db->select('*');
		$this->db->from('EVALUATION_CRITERIA_COMPOSITION_LEVEL as eva_cri');
		$query = $this->db->get();
		return $query->result();
	}
	public function show_school_evaluation_level() //sh5
	{
		$this->db->select('*');
		$this->db->from('SCHOOL_EVALUATION as eva_cri');
		$query = $this->db->get();
		return $query->result();
	}
	public function show_sec_and_secl() //sh6
	{
		$this->db->select('n.*,l.*');
		$this->db->from('SCHOOL_EVALUATION_CRITERIA as n');
		$this->db->join('SCHOOL_EVALUATION_CRITERIA_LEVEL as l', 'n.SCHOOL_EVALUATION_CRITERIA_ID=l.SCHOOL_EVALUATION_CRITERIA_ID');
		$query = $this->db->get();
		return $query->result();
	}
}
