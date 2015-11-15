<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Home_admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		if ($this->session->userdata('logged_in')) 
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('admin/home_admin_view', $data);
		}
		else
		{
			//if no session, redirect to login page
			redirect('login/login_view');
		}

	}//end of index

	public function logout()
	{
		$this->session->unset_userdata('logged_in');

		//
		redirect('login');

	}//end of logout


}//end of Home_admin