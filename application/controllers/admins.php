<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

//PROFILE TAKES ADMIN TO USER PROFILE FOR EDITING
	public function user_profile($id)
	{
		$result = $this->profile->profile_data($id);
		$user = array('user' => $result);
		$this->load->view('admin_edit', $user);
	}


//ADMIN EDIT of user profiles
	public function edit_acct($id)
		{
			$this->profile->user_edit($this->input->post(), $id);
			redirect('/admins/user_profile/' . $id);
		}

	public function edit_password($id)
	{
		$this->form_validation->set_rules("password", "Password", "min_length[2]|required");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "min_length[2]|matches[password]|required");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/admins/user_profile/' . $id);
		}
			$this->profile->user_edit_password($this->input->post(), $id);
			redirect('/admins/user_profile/' . $id);
	}

//ADMIN - DELETE USER - add a confirm delete next
	public function remove_user($id)
		{
			$this->profile->delete_user($id);
			redirect('/dashboard');
		}
//END ADMIN EDIT

	//TAKES ADMIN TO ADD USER VIEW
		public function add_view()
		{
			$this->load->view('admin_add');
		}

		//ADMIN ADD USER
		public function add_user()
		{
			$this->form_validation->set_rules("first_name", "First Name", "trim|required");
			$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
			$this->form_validation->set_rules("email", "Email", "valid_email|is_unique[users.email]|required"); 
			$this->form_validation->set_rules("password", "Password", "min_length[2]|required");
			$this->form_validation->set_rules("confirm_password", "Confirm Password", "min_length[2]|matches[password]|required");
			if($this->form_validation->run() === FALSE)
			{
				$this->session->set_flashdata('errors', validation_errors());
				redirect('/admins/add_view');
			}
			else
			{
				$user = $this->input->post();
				if ($user['level'] == 'normal')
				{
					$user['level'] = 0;
				}
				else
				{
					$user['level'] = 1;
				}
				$results = $this->user->create_reg($user);
				redirect('/dashboard');
			}
		}

}
//end of controller