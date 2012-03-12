<?php
class Mlogin extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function login($user='',$pass=''){
        $this->db->select();
        $this->db->where(
            array(
                'username'=>$user,
                'password'=>$pass
            )
        );
        $query = $this->db->get('admin');
        if($query->num_rows()==1)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
//
//    function login($user='',$pass='') {
//        $this->db->select();
//        $this->db->where(array('username'=>$user,'password'=>$pass));
//
//        $query = $this->db->get('users');
//        if ($query->num_rows() == 1) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
}
?>