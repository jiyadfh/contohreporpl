<?php

class M_profile extends CI_Model {
		function tampil_data(){
			$this->load->model('M_profile');
			return $this->db->get('tbl_profile');
			$this->load->view('v_tampil_data_profile',$data);
		}
	}
?>