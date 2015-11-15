<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//this may be unnessesary
		$this->load->helper(array('form'));

		$this->load->view('login/login_view');

	}//end of index
}