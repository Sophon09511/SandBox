<?php
class best_practice_model extends CI_Model {

    public function add_best_practice_model()
    {

        // echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
        $data = array(
            'EDUCATION_YEAR' => $this->input->post('EDUCATION_YEAR'),
            'SEMESTER' => $this->input->post('SEMESTER'),
            'NAME' => $this->input->post('NAME'),
            'BEST_PRACTICE_TYPE_CODE' => $this->input->post('BEST_PRACTICE_TYPE_CODE'),
            'TEACHER_ID' => $this->input->post('TEACHER_ID'),
            // 'ORGANIZER_ORGANIZATION' => $this->input->post('ORGANIZER_ORGANIZATION'),
            'TEACHER_ID' => $this->input->post('TEACHER_ID'),
            'ABSTRACT' => $this->input->post('ABSTRACT'),
            'SEARCH_KEYWORD' => $this->input->post('SEARCH_KEYWORD'),
            'ATTACHMENT' => $this->input->post('ATTACHMENT'),
            'PRACTICE_PROCESS' => $this->input->post('PRACTICE_PROCESS'),
            'SOURCE' => $this->input->post('SOURCE'),
            'PUBLISH_DATE' => $this->input->post('PUBLISH_DATE')
        );
		$query=$this->db->insert('BEST_PRACTICE',$data);
		if($query){
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลเทคโนโลยี และสื่อการเรียนรู้สำเร็จ !"; // กำหนดค่า success ใน session เป็น true
			header("Location: {$_SERVER['HTTP_REFERER']}"); // ไปยังหน้าก่อนหน้านี้
			
		} else {
			echo 'false';
		}
    }
}