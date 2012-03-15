<?php
class Cprofil extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="Profil SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/page/vprofil');
        $this->load->view('frontend/element/vfooter');
    }
}
?>