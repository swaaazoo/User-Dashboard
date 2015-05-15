<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//THIS IS FOR ALL THINGS DASHBOARD
class Dashboards extends CI_Controller {

//DATA FOR USER LIST ON DASHBOARD AND WHETHER LOGGED IN USER GETS ADMIN DASHBOARD OR NOT
	public function user_dashboard()
	{
		$all_users = array('users' => $this->dashboard->get_all_users());
		$isAdmin = $this->dashboard->admin_level($this->session->userdata('id'));
		if($isAdmin['admin_level'] === '0')
		{
			$this->load->view('user_dash', $all_users);
		}
		else
		{
			$this->load->view('admin_dash', $all_users);
		}		
	}

}