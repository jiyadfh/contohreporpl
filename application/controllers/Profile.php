<?php
    class Profile extends CI_Controller{
        function index(){
            $this->load->view ('v_profile');
        }
        
        function biodata($data1,$data2,$data3,$data4)
        {
            $data = [
                'nama'  => $data1,
                'kls'   => $data2,
                'alm'   => $data3,
                'jbt'   => $data4,
            ];
            $this->load->view ('v_biodata',$data);
        }
        function tambah_data(){
            $this->load->view('v_tambah_data');
        }
        function action_tambah_data()
        {
            $add = [
                'nama_depan'              => $this->input->post('nama_depan'),
                'nama_belakang'           => $this->input->post('nama_belakang'),
                'tempat_lahir'            => $this->input->post('tempat_lahir'),
                'tanggal_lahir'           => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'           => $this->input->post('jenis_kelamin'),
                'alamat'                  => $this->input->post('alamat'),
                'jenjang_pendidikan'      => $this->input->post('jenjang_pendidikan'),
            ];
            $this->db->insert('tbl_profile',$add);
            redirect('../profile/tampil_data');
        }
        function tampil_data(){
            $this->load->model('M_profile');
            $data['profile'] = $this->M_profile->tampil_data()->result();
            $this->load->view('v_tampil_data_profile', $data);
        }
        function update_data($id){
            
        }
    }
?>