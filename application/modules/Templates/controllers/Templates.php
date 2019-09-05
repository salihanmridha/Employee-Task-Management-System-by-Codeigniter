<?php
  class Templates extends MY_Controller{
    public function __construct(){
      parent::__construct();
    }

    public function admin($data = null){
      $this->load->helper('html');
      if ($this->session->userdata('user_id')) {
        $this->load->view('main-view.php', $data);
      } else {
        redirect($_SERVER['HTTP_REFERER']);
      }

    }

    public function login($data = null){
      $this->load->helper('html');
      $this->load->view('main-login.php', $data);
    }
  }
?>
