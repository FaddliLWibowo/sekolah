<?php
class Calumni extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="Alumni SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/page/valumni');
        $this->load->view('frontend/element/vfooter');
    }
}
?>