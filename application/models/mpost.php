<?php
class Mpost extends CI_Model{

    private $table_name;

    public function __construct(){
        parent::__construct();
        $this->table_name = 'guru';
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



}
?>