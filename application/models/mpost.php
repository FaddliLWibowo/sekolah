<?php
class Mpost extends CI_Model{

    private $table_name;
    private $table_name_siswa;
    private $table_name_alumni;
    private $table_name_infosekolah;
    private $table_name_materiajar;
    private $table_name_artikel;

    public function __construct(){
        parent::__construct();
        $this->table_name = 'guru';
        $this->table_name_siswa = 'siswa';
        $this->table_name_alumni='alumni';
        $this->table_name_infosekolah='infosekolah';
        $this->table_name_materiajar='materiajar';
        $this->table_name_artikel='artikel';
    }

    function create_data($data){
        $this->db->insert($this->table_name,$data);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    function create_data_siswa($datasiswa){
        $this->db->insert($this->table_name_siswa,$datasiswa);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    function create_data_alumni($dataalumni){
        $this->db->insert($this->table_name_alumni,$dataalumni);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    function create_data_infosekolah($datainfo){
        $this->db->insert($this->table_name_infosekolah,$datainfo);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }
    function create_data_materiajar($datamateri){
        $this->db->insert($this->table_name_materiajar,$datamateri);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

    function create_data_artikel($dataartikel){
        $this->db->insert($this->table_name_artikel,$dataartikel);
        if($this->db->affected_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }

//read data---------------------------------------------------

    function read_data(){
        $sql = $this->db->get($this->table_name);
        if($sql->num_rows()>0){
            foreach($sql->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }
    function read_data_materiajar(){
        $sql = $this->db->get($this->table_name_materiajar);
        if($sql->num_rows()>0){
            foreach($sql->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }

    function read_data_infosekolah(){
        $sql = $this->db->get($this->table_name_infosekolah);
        if($sql->num_rows()>0){
            foreach($sql->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }

    function read_data_guru(){
        $sql = $this->db->get($this->table_name);
        if($sql->num_rows()>0){
            foreach($sql->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }

    function read_data_siswa(){
        $sql = $this->db->get($this->table_name_siswa);
        if($sql->num_rows()>0){
            foreach($sql->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }

    function read_data_alumni(){
        $sql = $this->db->get($this->table_name_alumni);
        if($sql->num_rows()>0){
            foreach($sql->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }



    //update ---------------------------------------------------------------------------
    function update_data($id,$data){
        $this->db->where('id',$id);
        $this->db->update($this->table_name,$data);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }

    function delete_data($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table_name);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //get field tabel

    function get_data($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table_name);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        else{
            return null;
        }
    }

    function get_data_materiajar($id){
        $this->db->where('id_materi',$id);
        $query = $this->db->get($this->table_name_materiajar);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        else{
            return null;
        }
    }

    function get_data_infosekolah($id){
        $this->db->where('id_info',$id);
        $query = $this->db->get($this->table_name_infosekolah);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        else{
            return null;
        }
    }

    function get_data_guru($id){
        $this->db->where('id_guru',$id);
        $query = $this->db->get($this->table_name);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        else{
            return null;
        }
    }

    function get_data_siswa($id){
        $this->db->where('id_siswa',$id);
        $query = $this->db->get($this->table_name_siswa);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        else{
            return null;
        }
    }

    function get_data_alumni($id){
        $this->db->where('id_alumni',$id);
        $query = $this->db->get($this->table_name_alumni);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        else{
            return null;
        }
    }



}
?>