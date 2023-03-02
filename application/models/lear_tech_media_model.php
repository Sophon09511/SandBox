<?php
class lear_tech_media_model extends CI_Model {

    public function add_lear_tech_media_model()
    {

        // echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
        $data = array(
            'EDUCATION_YEAR' => $this->input->post('EDUCATION_YEAR'),
            'SEMESTER' => $this->input->post('SEMESTER'),
            'NAME' => $this->input->post('NAME'),
            'MEDIA_TYPE_CODE' => $this->input->post('MEDIA_TYPE_CODE'),
            'ORGANIZER_NAME' => $this->input->post('ORGANIZER_NAME'),
            'ORGANIZER_ORGANIZATION' => $this->input->post('ORGANIZER_ORGANIZATION'),
            'TEACHER_ID' => $this->input->post('TEACHER_ID'),
            'ABSTRACT' => $this->input->post('ABSTRACT'),
            'SEARCH_KEYBOARD' => $this->input->post('SEARCH_KEYBOARD'),
            'ATTACHMENT' => $this->input->post('ATTACHMENT'),
            'SOURCE' => $this->input->post('SOURCE'),
            'PUBLISH_DATE' => $this->input->post('PUBLISH_DATE')
        );
		$query=$this->db->insert('LEARNING_TECHNOLOGY_MEDIA',$data);
		if($query){
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลเทคโนโลยี และสื่อการเรียนรู้สำเร็จ !"; // กำหนดค่า success ใน session เป็น true
			header("Location: {$_SERVER['HTTP_REFERER']}"); // ไปยังหน้าก่อนหน้านี้
			
		} else {
			echo 'false';
		}
    }
}