<?php
class Cpanellogin extends CI_Controller{


    function __construct(){
        parent::__construct();
        $this->load->model('mlogin');
    }
    function index(){
        $this->load->view('backend/vpanellogin');
    }

    function login(){
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required|md5');

        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {


            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->mlogin->login($username,$password);

            $data['welcome'] = "Welcome $username";

            redirect(base_url().'index.php/backend/cpageadmin',$data);
        }


    }

//    function login()
//    {
//        $form_data = $this->input->post('data');
//        if (!empty($form_data))
//        {
//            if ($this->account_model->login($form_data['username'], $form_data['password']))
//            {
//                redirect('member/index');
//            }
//            else
//            {
//                redirect('member/login');
//            }
//        }
//        $this->load->view('login');
//    }
}
?>