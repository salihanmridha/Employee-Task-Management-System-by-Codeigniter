<?php
class Login extends MY_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Login_Model');

    if ($this->session->userdata('user_id')) {
      //return redirect('Dashboard');
    }

  }

  public function index(){
    $data['content_view'] = 'Login/login-view';
    $this->templates->login($data);
  }

  public function checkLogin(){
    $this->form_validation->set_rules('user_email', 'User Email', 'required');
    $this->form_validation->set_rules('user_password', 'Password', 'required');

    if ($this->form_validation->run()) {
      $email = $this->input->post('user_email');
      $password = md5($this->input->post('user_password'));

      $userData = $this->Login_Model->userExist($email, $password);
      if ($userData) {
        $userSessionData = [
          'user_id' => $userData->user_id,
          'user_name' => $userData->user_name,
          'user_email' => $userData->user_email,
          'user_role' => $userData->user_role,
        ];

        $this->session->set_userdata($userSessionData);
        return redirect('Dashboard');
      } else {
        $this->session->set_flashdata('message', 'Your Credentials are not correct');
        $this->index();
      }

    } else{
      $this->index();
    }
  }

  public function userLogout(){
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('user_name');
    $this->session->unset_userdata('user_email');
    $this->session->unset_userdata('user_role');

    return redirect('Login/index');

    //$this->index();
  }
}
?>
