<?php
class User extends MY_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('User_Model');
    if ($this->session->userdata('user_role') != 'Administrator') {
      die('you have no access on this page......go away');
    }
  }

  public function addUserPage(){
    $data['content_view'] = 'User/add-user-view';
    $this->templates->admin($data);
  }

  public function viewUserPage(){
    $data = null;
    $data['get_all_user'] = $this->User_Model->getAllUser($data);
    $data['get_all_senior'] = $this->User_Model->getAllSenior($data);
    $data['content_view'] = 'User/all-user-view';
    $this->templates->admin($data);
  }

  public function makeUserSeniorPage(){
    $data = null;
    $data['get_all_user'] = $this->User_Model->getAllUser($data);
    $data['content_view'] = 'User/make-user-senior-view';
    $this->templates->admin($data);
  }

  public function addUser(){
    $this->form_validation->set_rules('user_name', 'Employee Name', 'required');
    $this->form_validation->set_rules('user_role', 'Employee Role', 'required');
    $this->form_validation->set_rules('user_email', 'Email address', 'required');
    $this->form_validation->set_rules('user_password', 'Password', 'required');

    if ($this->form_validation->run()) {
      $data = $this->input->post();
      $data['user_password'] = md5($this->input->post('user_password'));

      if ($this->User_Model->addUserQuery($data)) {
        $this->session->set_flashdata('message', 'Your Submission Saved Succesfully into the Database');

      } else {
        $this->session->set_flashdata('message', 'Your Submission Not Saved Successfull');
      }
      return redirect('User/addUserPage');
    } else{
      $this->addUserPage();
    }
  }


  public function makeUserSenior(){
    $data['senior_id'] = $this->input->post('senior_id');
    $datajunior = $this->input->post('junior_id');


    $countJunior = count($datajunior);
    //print_r($this->User_Model->makeUserSeniorQuery($data));

    for ($i=0; $i < $countJunior; $i++) {
      $chkSenior = $this->input->post('senior_id');;
      $checkJunior = $datajunior[$i];
      $chkExistence = $this->User_Model->seniorJuniorExist($chkSenior, $checkJunior);

      if($chkExistence){
        $this->session->set_flashdata('errmessage', 'Your Submission Not Saved Succesfully into the Database');
        return redirect('User/makeUserSeniorPage');
      }else{
        for ($i=0; $i < $countJunior; $i++) {
          $data['junior_id'] = $datajunior[$i];
          $this->User_Model->makeUserSeniorQuery($data);
        }
      }
    }



    // for ($i=0; $i < $countJunior; $i++) {
    //   $data['junior_id'] = $datajunior[$i];
    //   $this->User_Model->makeUserSeniorQuery($data);
    // }

     $this->session->set_flashdata('message', 'Your Submission Saved Succesfully into the Database');
     return redirect('User/makeUserSeniorPage');

    // if ($this->User_Model->makeUserSeniorQuery($data)) {
    //   $this->session->set_flashdata('message', 'Your Submission Saved Succesfully into the Database');
    // }
    //return redirect('User/makeUserSeniorPage');


  }
}
?>
