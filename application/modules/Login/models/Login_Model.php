<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Login_Model extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function userExist($email, $password){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('user_email =', $email);
      $this->db->where('user_password =', $password);
      $result = $this->db->get();

      if ($result->num_rows() > 0) {
        return $result->row();
      }
    }
  }
?>
