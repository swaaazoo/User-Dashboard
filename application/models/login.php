<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for the login db interaction
class Login extends CI_Model {

	public function get_user_by_email($post)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array($post['email'], $post['password']);
		return $this->db->query($query, $values)->row_array();
	}

}