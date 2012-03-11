<?php
class Cpanellogin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index(){
        $this->load->view('backend/vpanellogin');
    }


    function cekLogin() {
        $username = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        foreach ($this->mlogin->getAll() as $r):
            if ($username == $r->username && $pass == $r->password) {
                $data = array('ID' => $r->id, 'USERNAME' => $r->username, 'PASS' => $r->password);
                $this->session->set_userdata($data);
                redirect('backend/cpageadmin');
            } else {
                $this->index();
            }
        endforeach;
    }

    function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASSWORD');
        $this->session->unset_userdata('ID');
        $this->index();
    }




}
?>