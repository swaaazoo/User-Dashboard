<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for all things login - session/new=view page, session/create= login a user-usually move to another page
class Logins extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function new_login()
	{
		$this->load->view('login');
	}

	public function create_login()
	{
		if($this->input->post())
		{
			$login = $this->login->get_user_by_email($this->input->post());
			
			if($login == TRUE) // SUCCESSFUL LOGIN - SEND to dashboards controller
			{
				$this->session->set_userdata('id', $login['id']);
				redirect('/dashboard');
			}
			else // FAILED LOGIN
			{
				$this->session->set_flashdata('login_error', "Invalid email or password.");
				redirect('/login');
			}
		}
	}

	public function destroy_login()
		{
			$this->session->sess_destroy();
			redirect('/');
		}

}

//end of controller