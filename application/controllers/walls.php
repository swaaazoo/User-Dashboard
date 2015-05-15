<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//this is for all things registration - user/new=view page, user/create= create a new user-usually move to another page
class Walls extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

//SHOW WALL VIEW PAGE WITH USER DATA AND THEIR MESSAGES
	public function show_wall($id)
	{
		$user = $this->wall->get_user($id);
		$this->load->view('wall', $user);
	}

//ADD A MESSAGE
	public function add_message()
	{
		$user = $this->input->post('user_id');
		$this->wall->add_message($this->input->post());
		redirect("/walls/show_wall/" . $user);
	}

//ADD A COMMENT TO A MESSAGE
	public function add_comment()
	{
		$user = $this->input->post('user_id');
		$this->wall->add_comment($this->input->post());
		redirect("/walls/show_wall/" . $user);
	}

}
//end of controller