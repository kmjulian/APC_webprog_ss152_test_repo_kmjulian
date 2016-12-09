<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('users_model');
  }

  public function add_form(){
    $this->load->view('add.php');
  }

   public function insert_user_db(){
    $udata['first_name'] = $this->input->post('first_name');
    $udata['last_name'] = $this->input->post('last_name');
    $udata['nickname'] = $this->input->post('nickname');
    $udata['email'] = $this->input->post('email');
    $udata['user_city'] = $this->input->post('user_city');
    $udata['gender'] = $this->input->post('gender');
    $udata['mobile'] = $this->input->post('mobile');
    $udata['comment'] = $this->input->post('comment');
    $res = $this->users_model->insert_users_to_db($udata);
    if($res){
      header('location:'.base_url()."index.php/users/".$this->index());
    }
  }

}