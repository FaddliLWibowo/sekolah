<?php
class Cpanellogin extends CI_Controller{


    function __construct(){
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index(){
        $this->load->view('backend/vpanellogin');
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