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

    function create_siswa() //untuk menambah data cd
    {

        $datasiswa = array(
            'nis'=>$this->input->post('nis'),
            'nama'=>$this->input->post('nama'),
            'kelas'=>$this->input->post('kelas')
        );
        $this->mpost->create_data_siswa($datasiswa);
        $this->index();
    }

    function create_alumni() //untuk menambah data cd
    {

        $dataalumni = array(
            'nama_alumni'=>$this->input->post('nama_alumni'),
            'angkatan'=>$this->input->post('angkatan'),
            'email'=>$this->input->post('email')
        );
        $this->mpost->create_data_alumni($dataalumni);
        $this->index();
    }
    function create_infosekolah() //untuk menambah data cd
    {

        $datainfo = array(
            'title_info'=>$this->input->post('title_info'),
            'note_info'=>$this->input->post('note_info')

        );
        $this->mpost->create_data_infosekolah($datainfo);
        $this->index();
    }

    function create_materiajar() //untuk menambah data cd
    {

        $datamateri = array(
            'title_materiajar'=>$this->input->post('title_materiajar'),
            'note_materiajar'=>$this->input->post('note_materiajar')

        );
        $this->mpost->create_data_materiajar($datamateri);
        $this->index();
    }

    function create_artikel() //untuk menambah data cd
    {

        $dataartikel = array(
            'title_artikel'=>$this->input->post('title_artikel'),
            'note_artikel'=>$this->input->post('note_artikel')

        );
        $this->mpost->create_data_artikel($dataartikel);
        $this->index();
    }



}
?>