<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for all things registration - user/new=view page, user/create= create a new user-usually move to another page
class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function new_reg()
	{
		$this->load->view('register');
	}

	public function create_reg()
	{
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "valid_email|is_unique[users.email]|required"); 
		$this->form_validation->set_rules("password", "Password", "min_length[2]|required");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "min_length[2]|matches[password]|required");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/register');
		}
		else
		{
			$results = $this->user->create_reg($this->input->post());
			$this->session->set_userdata('id', $this->db->insert_id());
			redirect('/dashboard');
		}
	}

}
//end of controller