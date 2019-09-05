<?php
class ToDo extends MY_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('ToDo_Model');
  }

  //add my todo view page
  public function addToDoPage(){
    $data['content_view'] = 'ToDo/add-todo-view';
    $this->templates->admin($data);
  }

  public function addToDoJuniorPage(){
    $this->load->model('User/User_Model');
    $data = null;
    $data['get_all_user'] = $this->User_Model->getAllUser($data);

    $user = $this->session->userdata('user_id');
    $data['get_junior'] = $this->ToDo_Model->getJuniorQuery($user);
    $data['content_view'] = 'ToDo/add-todo-junior-view';
    $this->templates->admin($data);
  }

  public function addJuniorToDo(){
    $this->form_validation->set_rules('todo_name', 'ToDo Name', 'required');

    if ($this->form_validation->run()) {
      $data['todo_name'] = $this->input->post('todo_name');
      $data['todo_status'] = 0;
      $data['todo_date'] = date("Y/m/d");
      $data['assign_to'] = $this->input->post('assign_to');
      $data['assign_from'] = $this->session->userdata('user_id');
      if (! empty($this->input->post('todo_comment'))) {
        $data['todo_comment'] = $this->input->post('todo_comment');
      }

      if ($this->ToDo_Model->addJuniorToDoQuery($data)) {
        $this->session->set_flashdata('message', 'Your Submission Saved Succesfully into the Database');
      }

      return redirect('ToDo/addToDoPage');
    } else{
      $this->addToDoPage();
    }
  }

  //insert my todo data to database method
  public function addMyToDo(){
      $this->form_validation->set_rules('todo_name', 'ToDo Name', 'required');

      if ($this->form_validation->run()) {
        $data['todo_name'] = $this->input->post('todo_name');
        $data['todo_status'] = 0;
        $data['todo_date'] = date("Y/m/d");
        $data['assign_to'] = $this->session->userdata('user_id');
        $data['assign_from'] = $this->session->userdata('user_id');
        if (! empty($this->input->post('todo_comment'))) {
          $data['todo_comment'] = $this->input->post('todo_comment');
        }

        if ($this->ToDo_Model->addMyToDoQuery($data)) {
          $this->session->set_flashdata('message', 'Your Submission Saved Succesfully into the Database');
        }

        return redirect('ToDo/addToDoPage');
      } else{
        $this->addToDoPage();
      }
  }

  public function viewMyToDo(){
    $user = $this->session->userdata('user_id');
    $data['get_my_todo_data'] = $this->ToDo_Model->getMyToDo($user);
    $data['content_view'] = 'ToDo/my-todo-view';
    $this->templates->admin($data);
  }

  public function viewMyJuniorToDo(){
    $this->load->model('User/User_Model');
    $user = $this->session->userdata('user_id');
    $data = null;
    $data['get_all_user'] = $this->User_Model->getAllUser($data);
    $data['get_my_junior_todo_data'] = $this->ToDo_Model->getJuniorToDoQuery($user);
    $data['content_view'] = 'ToDo/my-junior-todo-view';
    $this->templates->admin($data);
  }

  public function updateMyToDo(){
      $data['todo_status'] = 1;
      $todoid = $this->input->post('todoid');
      if (! empty($this->input->post('todo_comment'))) {
        $data['todo_comment'] = $this->input->post('todo_comment');
      }

      if ($this->ToDo_Model->updateMyToDoQuery($data, $todoid)) {
        $this->session->set_flashdata('message', 'Your Submission Saved Succesfully into the Database');
      }

      return redirect('ToDo/viewMyToDo');

  }
}
