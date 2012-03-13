<?php
class Mlogreg extends CI_Model{
    private $table_name_register;

    function __construct(){
        parent::__construct();
        $this->table_name_register = 'member';
    }

    function data_register($dataregister){
        $this->db->insert($this->table_name_register,$dataregister);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
?>