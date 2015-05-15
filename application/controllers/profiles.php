<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profiles extends CI_Controller {

//PROFILE TAKES YOU TO LOGGED IN USER PROFILE FOR EDITING- ADMIN OR NOT
	public function user_profile()
	{
		$result = $this->profile->profile_data($this->session->userdata('id'));
		$user = array('user' => $result);
		$this->load->view('user_edit', $user);
	}

//EDIT USER'S OWN PROFILE
	public function user_edit_acct()
	{
		$id = $this->session->userdata('id');
		$this->profile->user_edit($this->input->post(), $id);
		redirect('/profile');
	}

	public function user_edit_password()
	{
		$this->form_validation->set_rules("password", "Password", "min_length[2]|required");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "min_length[2]|matches[password]|required");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/profile');
		}
		$id = $this->session->userdata('id');
		$this->profile->user_edit_password($this->input->post(), $id);
		redirect('/profile');
	}

	public function user_edit_desc()
	{
		$id = $this->session->userdata('id');
		$this->profile->user_edit_desc($this->input->post(), $id);
		redirect('/profile');
	}
//END EDIT USER'S OWN ACCOUNT

}
//end of controller