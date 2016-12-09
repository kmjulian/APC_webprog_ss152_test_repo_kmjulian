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

}