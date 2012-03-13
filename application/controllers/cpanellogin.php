<?php
class Cpanellogin extends CI_Controller{


    function __construct(){
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index(){
        $this->load->view('backend/vpanellogin');
    }

    function register(){
        $this->form_validation->set_rules('firstname', 'Nama Depan', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Nama Belakang', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }

//    function cek(){
//        $username=$this->input->post('username');
//        $password=$this->input->post('password');
//        $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
//        $this->mlogin->login($query);
//
//        if($query->num_rows() == 1)
//        {
//            $nama = $query->row()->username;
//            $this->session->set_userdata('username',$nama);
//            $data['welcome'] = "Welcome $nama";
//            $this->redirect('backend/vheader', $data);
////            $this->load->view('backend/vcontent');
////            $this->load->view('backend/vfooter');
//        }
//        else {
//            // query error
//            $data['error']='!! Wrong Username or Password !!';
//            $this->index($data);
//        }
//    }
//
//    function logout() {
//        $this->session->sess_destroy();
//        $data['logout'] = 'You have been logged out.';
//        $this->index($data);
//    }

}
?>