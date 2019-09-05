<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class ToDo_Model extends CI_Model{
    public function __construct(){
      parent::__construct();
    }

    public function addMyToDoQuery($data){
      return $this->db->insert('todo', $data);
    }

    public function addJuniorToDoQuery($data){
      return $this->db->insert('todo', $data);
    }

    public function getMyToDo($user){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('todo', 'users.user_id = todo.assign_from');
      $this->db->where('todo.assign_to', $user);

      $result = $this->db->get();
      return $result->result_array();
    }

    public function getJuniorToDoQuery($user){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('todo', 'users.user_id = todo.assign_from');
      $this->db->where('todo.assign_from', $user);
      $this->db->where('todo.assign_to !=', $user);

      $result = $this->db->get();
      return $result->result_array();
    }

    public function updateMyToDoQuery($data, $todoid){
      $this->db->where('todo_id', $todoid);
      $this->db->update('todo', $data);
    }

    public function getJuniorQuery($user){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('senior', 'users.user_id = senior.junior_id');
      $this->db->where('senior.senior_id', $user);

      $result = $this->db->get();
      return $result->result_array();
    }


  }
?>
