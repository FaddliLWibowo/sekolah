<?php
class Cguru extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="Guru SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/page/vguru');
        $this->load->view('frontend/element/vfooter');
    }
}
?>