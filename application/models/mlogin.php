<?php
class Mlogin extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    function getAll(){
        return $this->db->get('admin')->result();
    }
}
?>


<!--class Model_login extends Ci_Model{-->
<!--//put your code here-->
<!--public function __construct() {-->
<!--parent::__construct();-->
<!--}-->
<!---->
<!--function getAll() {-->
<!--return $this->db->get('admin')->result();-->
<!--}-->
<!---->
<!--function editAdmin($id,$data){-->
<!--$this->db->where('idadmin', $id);-->
<!--$update = $this->db->update('admin',$data);-->
<!--return $update;-->
<!--}-->
<!--}-->
<!---->
