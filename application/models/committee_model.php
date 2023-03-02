<?php
class committee_model extends CI_Model {

    public function add_committee_model()
    {

        // echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
        $data = array(
            'PROVINCE_CODE' => $this->input->post('PROVINCE_CODE'),
            'APPOINTMENT_NO' => $this->input->post('APPOINTMENT_NO'),
            'APPOINTMENT_ATTACHMENT' => $this->input->post('APPOINTMENT_ATTACHMENT')
          
        );
		$query=$this->db->insert('COMMITTEE',$data);
		if($query){
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลเทคโนโลยี และสื่อการเรียนรู้สำเร็จ !"; // กำหนดค่า success ใน session เป็น true
			header("Location: {$_SERVER['HTTP_REFERER']}"); // ไปยังหน้าก่อนหน้านี้
			
		} else {
			echo 'false';
		}
    }
    public function add_committee_member_model()
    {

        // echo '<pre>';
		// print_r($_POST);
		// echo'</pre>';
		// exit;
        $data = array(
            'COMMITTEE_ID' => $this->input->post('COMMITTEE_ID'),
            'PREFIX_CODE' => $this->input->post('PREFIX_CODE'),
            'NAME_TH' => $this->input->post('NAME_TH'),
            'MIDDLE_NAME_TH' => $this->input->post('MIDDLE_NAME_TH'),
            'LAST_NAME_TH' => $this->input->post('LAST_NAME_TH'),
            'NAME_EN' => $this->input->post('NAME_EN'),
            'MIDDLE_NAME_EN' => $this->input->post('MIDDLE_NAME_EN'),
            'LAST_NAME_EN' => $this->input->post('LAST_NAME_EN'),
            'INNOVATION_COMMITTEE_POSITION_CODE' => $this->input->post('INNOVATION_COMMITTEE_POSITION_CODE'),
            'TERM_START_DATE' => $this->input->post('TERM_START_DATE'),
            'TERM_END_DATE' => $this->input->post('TERM_END_DATE')
          
        );
		$query=$this->db->insert('COMMITTEE_MEMBER',$data);
		if($query){
			session_start(); // เริ่มต้น session
			$_SESSION['success'] = "เพิ่มข้อมูลเทคโนโลยี และสื่อการเรียนรู้สำเร็จ !"; // กำหนดค่า success ใน session เป็น true
			header("Location: {$_SERVER['HTTP_REFERER']}"); // ไปยังหน้าก่อนหน้านี้
			
		} else {
			echo 'false';
		}
    }
    public function show_committee_member_model()
        {
                $query = $this->db->get('COMMITTEE_MEMBER');
                return $query->result();
        }

        public function show_committee_model()
        {
                $query = $this->db->get('COMMITTEE');
                return $query->result();
        }
}