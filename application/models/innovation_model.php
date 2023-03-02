<?php
class innovation_model extends CI_Model {

    public function add_innovation_model()
    {

       // echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;

		$data = array(
            'EDUCATION_YEAR' => $this->input->post('EDUCATION_YEAR'),
            'SEMESTER' => $this->input->post('SEMESTER'),
            'INNOVATION_NAME' => $this->input->post('INNOVATION_NAME'),
            'INNOVATION_TYPE_CODE' => $this->input->post('INNOVATION_TYPE_CODE'),
            'ABSTRACT' => $this->input->post('ABSTRACT'),
            'TEACHER_ID' => $this->input->post('TEACHER_ID'),
            'ATTACHMENT' => $this->input->post('ATTACHMENT'),
            'SOURCE' => $this->input->post('SOURCE'),
            'PUBLISH_DATE' => $this->input->post('PUBLISH_DATE')
        );
		$query=$this->db->insert('INNOVATION',$data);
		if($query){
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลนวัตกรรมการศึกษาสำเร็จ !"; // กำหนดค่า success ใน session เป็น true
			header("Location: {$_SERVER['HTTP_REFERER']}"); // ไปยังหน้าก่อนหน้านี้
			
		} else {
			echo 'false';
		}
    }
}