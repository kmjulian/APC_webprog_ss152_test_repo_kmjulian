<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert_users_to_db($data){
		return $this->db->insert('users', $data);
	}
}
?>