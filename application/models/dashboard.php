<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for the login db interaction
class Dashboard extends CI_Model {

//GET ALL USERS FOR DASHBOARD PAGE
	public function get_all_users()
	{
		return $this->db->query("SELECT * FROM users ORDER BY created_at DESC")->result_array();
	}

//DETERMINE IF ADMIN
	public function admin_level($id)
	{
		return $this->db->query("SELECT admin_level FROM users WHERE id = $id")->row_array();
	}

}