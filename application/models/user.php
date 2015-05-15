<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for the registration db interaction
class User extends CI_Model {


	public function create_reg($add)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, admin_level, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
		$values = array($add['first_name'], $add['last_name'], $add['email'], $add['password'], $add['level']);
		return $this->db->query($query, $values);
	}

}