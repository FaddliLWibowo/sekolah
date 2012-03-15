<?php
class Cpanellogin extends CI_Controller{


    function __construct(){
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index(){
        $this->load->view('backend/vpanellogin');
    }


    function cek(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]|max_length[40]|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]|max_length[40]|md5');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
            $this->mlogin->login($query);

            if($query->num_rows() == 1)
            {
                $nama = $query->row()->username;
                $this->session->set_userdata('username',$nama);
                $data['welcome'] = "Welcome $nama";
                $this->redirect('backend/vheader', $data);
            }
            else {
                // query error
                $data['error']='!! Wrong Username or Password !!';
                $this->index($data);
            }
        }
    }




    function logout() {
        $this->session->sess_destroy();
        $data['logout'] = 'You have been logged out.';
        $this->index($data);
    }

}
?>