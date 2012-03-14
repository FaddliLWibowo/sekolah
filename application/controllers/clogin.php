<?php
class Clogin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mlogreg');
    }

    function index(){

    }

    function gagal_login(){
        $data['title']="Gagal Login";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/logreg/vgagal_login');
        $this->load->view('frontend/element/vfooter');
    }

    function homepage(){
        $nama = '';
        $data['title']="welcome $nama";
        $this->load->view('frontend/element/vheader',$data);

        $this->load->view('frontend/element/vfooter');
    }

    function proses_login(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]|max_length[10]');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run()==FALSE)
        {
            $this->gagal_login();
        }
        else
        {
            //masih salah
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $passwordx = md5($password);
            $query = $this->db->query("SELECT * FROM member WHERE username='$username' AND password='$passwordx'");
            $this->mlogreg->get_data_login($query);
            return true;
            if($query->num_rows() ==1)
            {
                $nama = $query->row()->username;
                $this->session->set_userdata('username',$nama);
                $this->load->view('frontend/element/vcontent');
            }
            else
            {
                $this->gagal_login();
            }


        }
    }
}
?>