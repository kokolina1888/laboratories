<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		
		$this->load->model('programm_dates_model');
		$this->load->model('test_methods_model');
		$this->load->model('units_model');
		$this->load->model('methods_model');

		
		$this->output->enable_profiler(TRUE);
	}

//STARTS THE PROCESS OF ADDING TEST VALUES IN DB BY SELECTING - FIRST PROGRAM TYPE
	public function add_data_initial()
	{
		
		$data['username'] = $this->session->userdata['logged_in']['username'];
		$data['user_id'] = $this->session->userdata['logged_in']['user_id'];

		$data['program_type'] = $this->programm_dates_model->get_all_programm_dates();		

		//	make it dynamic
		$data['dynamic_view'] = 'user/select_program_type';
		$data['title_user'] = 'участник';

		$this->load->view('templates/main_template_user', $data);
		
	}//end of add_data_initial


	//CONTINUING THE PROCESS OF ADDING TEST VALUES IN DB BY SELECTING
	// - SECOND PROGRAM DATE FOR THE SELECTED PROGRAM TYPE

	public function add_data_second()
	{
		$data['username'] = $this->session->userdata['logged_in']['username'];
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$data['user_id'] = $user_id;

		$program_type_id = $this->input->post('program_type');

		$data['program_date'] = $this->user_model->get_user_programdates($user_id, $program_type_id);	
		
		$count = count($data['program_date']);
		

		if ($count === 0) 
		{
			$data['dynamic_view'] = 'user/no_program_dates';
			$data['title_user'] = 'участник';

			$this->load->view('templates/main_template_user', $data);

		}
		else 
		{
			//	make it dynamic
		$data['dynamic_view'] = 'user/select_program_date';
		$data['title_user'] = 'участник';

		$this->load->view('templates/main_template_user', $data);


		}



		
	}

	////CONTINUING/FINAL/ THE PROCESS OF ADDING TEST VALUES IN DB BY SELECTING - 
	//TESTS FOR THE SELECTED PROGRAM DATE FOR THE SELECTED PROGRAM TYPE

	public function add_data_third()
	{
		
		$user_id 				= $this->session->userdata['logged_in']['user_id'];

		$program_type_id 		= $this->input->post('program_type');

		$programm_date_id 		= $this->input->post('program_date');

		
		$data['username'] 		= $this->session->userdata['logged_in']['username'];

		$data['units']			= $this->units_model->get_all_units();

		$data['test_methods'] 	= $this->test_methods_model->get_test_methods_byprogram($program_type_id);

		$data['program_tests'] 	= $this->user_model->get_user_program($program_type_id, $programm_date_id, $user_id);		

		//	make it dynamic
		$data['dynamic_view'] 	= 'user/insert_test_values';
		$data['title_user'] 	= 'участник';

		$this->load->view('templates/main_template_user', $data);
		

	} //end add_data_third

	public function add_data_final($program_type_id, $program_date_id)
	{
		$this->lang->load('form_validation_lang', 'bulgarian');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		
		$this->form_validation->set_rules('test_value[]', 'Стойност на тест', 'trim|required');
		$this->form_validation->set_message('required', '**Въведете стойност!');


		if ($this->form_validation->run() === FALSE)
		{
			$user_id 				= $this->session->userdata['logged_in']['user_id'];

		//$program_type_id 		= $this->input->post('program_type');

		//$programm_date_id 		= $this->input->post('program_date');


			$data['username'] 		= $this->session->userdata['logged_in']['username'];

			$data['units']			= $this->units_model->get_all_units();

			$data['test_methods'] 	= $this->test_methods_model->get_test_methods_byprogram($program_type_id);

			$data['program_tests'] 	= $this->user_model->get_user_program($program_type_id, $program_date_id, $user_id);		

		//	make it dynamic
			$data['dynamic_view'] 	= 'user/insert_test_values';
			$data['title_user'] 	= 'участник';

			$this->load->view('templates/main_template_user', $data);
		}
		else
		{
			$this->user_model->add_data_final();

			$user_id 				= $this->session->userdata['logged_in']['user_id'];

			//$program_type_id 		= $this->input->post('programm_type_id');

			//$program_date_id 		= $this->input->post('programm_date_id');

			$data['units']			= $this->units_model->get_all_units();

			$data['test_methods'] 	= $this->test_methods_model->get_test_methods_byprogram($program_type_id);

			$data['program_data'] = $this->user_model->get_user_program($program_type_id, $program_date_id, $user_id);


			$data['dynamic_view'] 	= 'user/user_success_page';
			$data['title_user'] 	= 'участник';
			$this->load->view('templates/main_template_user', $data);

		}

	}//end add_ata_final

	public function update_program_data_form($programm_type_id, $programm_date_id, $user_id)
	{
		$data['program_info'] 	= $this->user_model->get_user_program($programm_type_id, $programm_date_id, $user_id);
		$data['username']		= $this->session->userdata['logged_in']['username'];
		$data['units']			= $this->units_model->get_all_units();

		$data['test_methods'] 	= $this->test_methods_model->get_test_methods_byprogram($programm_type_id);
		//$data['methods'] 	= $this->test_methods_model->get_all_test_methods();


		$data['dynamic_view'] 	= 'user/update_program_data_form';
		$data['title_user'] 	= 'участник';
		$this->load->view('templates/main_template_user', $data);


	}//end of update_program_data

	public function update_program_test_records($programm_type_id, $programm_date_id)
	{
		//$this->lang->load('form_validation_lang', 'bulgarian');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		
		$this->form_validation->set_rules('test_value[]', 'Стойност на тест', 'trim|required');
		$this->form_validation->set_message('required', '**Въведете променените стойности!');


		if ($this->form_validation->run() === FALSE)
		{
			$user_id 				= $this->session->userdata['logged_in']['user_id'];


			$data['program_info'] 	= $this->user_model->get_user_program($programm_type_id, $programm_date_id, $user_id);
			$data['username']		= $this->session->userdata['logged_in']['username'];
			$data['units']			= $this->units_model->get_all_units();

			$data['methods'] 	= $this->test_methods_model->get_all_test_methods();


			$data['dynamic_view'] 	= 'user/update_program_data_form';
			$data['title_user'] 	= 'участник';
			$this->load->view('templates/main_template_user', $data);

		}
		else
		{
			$this->user_model->update_program_test_records();

			$user_id 				= $this->session->userdata['logged_in']['user_id'];

			$program_type_id 		= $this->input->post('programm_type_id');

			$program_date_id 		= $this->input->post('programm_date_id');

			$data['units']			= $this->units_model->get_all_units();

			$data['methods'] 		= $this->test_methods_model->get_all_methods();

			$data['program_data'] 	= $this->user_model->get_user_program($program_type_id, $program_date_id, $user_id);


			$data['dynamic_view'] 	= 'user/user_success_page';
			$data['title_user'] 	= 'участник';
			$this->load->view('templates/main_template_user', $data);

		}


	}

	public function delete_program_data($programm_type_id, $programm_date_id, $user_id)
	{

		$this->user_model->delete_users_program($programm_type_id, $programm_date_id, $user_id);

		$user_id 				= $this->session->userdata['logged_in']['user_id'];

		$data['user_programs'] 	= $this->user_model->get_user_programs($user_id);

		$data['username']		= $this->session->userdata['logged_in']['username'];

		$data['dynamic_view'] 	= 'user/user_all_programs_bydates';
		$data['title_user'] 	= 'участник';
		$this->load->view('templates/main_template_user', $data);

	}//end of delete_program_data

	public function show_user_programs()
	{
		$user_id 				= $this->session->userdata['logged_in']['user_id'];

		$data['user_programs'] 	= $this->user_model->get_user_programs($user_id);

		$data['username']		= $this->session->userdata['logged_in']['username'];

		$data['dynamic_view'] 	= 'user/user_all_programs_bydates';
		$data['title_user'] 	= 'участник';
		$this->load->view('templates/main_template_user', $data);
	}
	public function error()
	{

		$data['dynamic_view'] 	= 'user/user_error';
		$data['title_user'] 	= 'участник';
		$this->load->view('templates/main_template_user', $data);
	}






}//end of User class