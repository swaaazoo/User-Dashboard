<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for the edit pages
class Profile extends CI_Model {

//GET LOGGED IN USER'S DATA
	public function profile_data($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = $id")->row_array();
	}

//EDIT LOGGED IN USER'S DATA
	public function user_edit($post, $id)
	{
		$query = "UPDATE users SET email = ?, first_name = ?, last_name = ?, admin_level = ?, updated_at = NOW() WHERE id = ?";
		$values = array($post['email'], $post['first_name'], $post['last_name'], $post['level'], intval($id));
		return $this->db->query($query, $values);
	}

//EDIT LOGGED IN USER'S PASSWORD
	public function user_edit_password($post, $id)
	{
		$query = "UPDATE users SET password = ?, updated_at = NOW() WHERE id = ?";
		$values = array($post['password'], intval($id));
		return $this->db->query($query, $values);
	}

//EDIT LOGGED IN USER'S DESCRIPTION
	public function user_edit_desc($post, $id)
	{
		$query = "UPDATE users SET description = ?, updated_at = NOW() WHERE id = ?";
		$values = array($post['description'], intval($id));
		return $this->db->query($query, $values);
	}

	public function delete_user($id)
  	{
  		$this->db->query("DELETE FROM users WHERE id = ?", array($id));
  	}

}