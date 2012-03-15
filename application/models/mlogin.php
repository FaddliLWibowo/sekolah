<?php
class Mlogin extends CI_Model{

    private $table = 'member';

    function __construct(){
        parent::__construct();
    }

    function login($username,$password){
        $data = $this->db->where(array('username'=>$username,'password'=>md5($password)))->get($this->table);

        if($data->num_rows > 0)
        {
            $user = $data->row();

            $session = array(
                'logged_in'=>1,
                'username'=>$user->username,
//                'password'=>$user->password
            );

            $this->session->set_userdata($session);
            return true;
        }
        else
        {
            $this->session->set_userdata('notification','Username dan Password tidak cocok');
            return false;
        }
    }

    function logout(){
        $this->session->sess_destroy();
    }
}
?>