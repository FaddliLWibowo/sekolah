<?php
class Cpageadmin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mpost');
    }
    function index(){

        $data['title']="Panel Admin";
        $this->load->view('backend/element/vheader',$data);
        $this->load->view('backend/element/vcontent');
        $this->load->view('backend/element/vfooter');
    }

    function create() //untuk menambah data cd
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'pelajaran' => $this->input->post('pelajaran'),
            'jabatan' => $this->input->post('jabatan')
        );
        $this->mpost->create_data($data);
        $this->index();
    }

}
?>