<?php 
class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function form()
	{
		$this->load->view('users/login_form');

	}


	public function login() 
	{
		$this->load->library('form_validation');
		$this->form_validation->set_message('required', 'Полето %s е задължително');

		/*$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');*/

		
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			echo $username;
			echo $password;


			//setting the id of the loggedin user 

			/*$user_id = $this->user_model->login_user();*/


			var_dump($user_id);
			

			if($user_id) {

				$user_data = array(
					'user_id' => $user_id,
					'username'=> 'admin',
					'logged_in'=> TRUE);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are now logged in');

			//redirect('index');

				$data['main_view'] = 'admin_home'; 
				
				$this->load->view('layouts/main', $data);

			} else {


				$this->session->set_flashdata('login_failed', 'Sorry, you are not logged in');
				redirect('home/index');
			}

		



		}//end of login



	/*public function logout()
	{

		$this->session->sess_destroy();
		redirect('home/index');

	}//end of logout
}

}*/
}//end of User class