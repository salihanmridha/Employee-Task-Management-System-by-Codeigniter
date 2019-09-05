<?php
class Dashboard extends MY_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User/User_Model');
  }

  public function index(){
    $data = null;
    $data['get_all_user'] = $this->User_Model->getAllUser($data);
    $data['get_all_senior'] = $this->User_Model->getAllSenior($data);
    $data['content_view'] = 'Dashboard/dashboard-view';
    $this->templates->admin($data);
  }
}
?>
