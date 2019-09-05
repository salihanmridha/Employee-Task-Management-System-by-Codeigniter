<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class User_Model extends CI_Model{
    public function __construct(){
      parent::__construct();
    }
    //add user to database query
    public function addUserQuery($data){
      return $this->db->insert('users', $data);
    }

    public function makeUserSeniorQuery($data){
      return $this->db->insert('senior', $data);
    }

    public function seniorJuniorExist($chkSenior, $checkJunior){
      $this->db->select('*');
      $this->db->from('senior');
      $this->db->where('senior_id =', $chkSenior);
      $this->db->where('junior_id =', $checkJunior);

      $this->db->or_where('senior_id =', $checkJunior);
      $this->db->where('junior_id =', $chkSenior);

      $result = $this->db->get();

      if ($result->num_rows() > 0) {
        return $result->row();
      }
    }

    public function getAllUser(){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('user_role !=', 'Administrator');
      $result = $this->db->get();
      return $result->result_array();
    }

    public function getAllSenior(){
      $this->db->select('*');
      $this->db->from('senior');
      $result = $this->db->get();
      return $result->result_array();
    }
  }
?>
