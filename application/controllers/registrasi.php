<?php
class Registrasi extends CI_Controller{

    public function index(){

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required|matches[password_1]');
        $this->form_validation->set_rules('password_1','password','required|matches[password]');

        if ($this->form_validation->run()==FALSE){
 
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else{
            $data = array(
                'id'    => '',
                'nama'  => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
                'role_id'   => 2,
            );
            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
    }
}