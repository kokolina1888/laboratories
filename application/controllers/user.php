<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		
		$this->load->model('programm_dates_model');
		$this->load->model('test_methods_model');
		$this->load->model('units_model');

		
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


	//CONTINUING THE PROCESS OF ADDING TEST VALUES IN DB BY SELECTING - SECOND PROGRAM DATE FOR THE SELECTED PROGRAM TYPE

	public function add_data_second()
	{
		$data['username'] = $this->session->userdata['logged_in']['username'];
		$data['user_id'] = $this->session->userdata['logged_in']['user_id'];

		$program_type_id = $this->input->post('program_type');

		var_dump($program_type_id);

		$data['program_date'] = $this->programm_dates_model->get_programm_dates($program_type_id);		

		//	make it dynamic
		$data['dynamic_view'] = 'user/select_program_date';
		$data['title_user'] = 'участник';

		$this->load->view('templates/main_template_user', $data);
	
	}

	////CONTINUING/FINAL/ THE PROCESS OF ADDING TEST VALUES IN DB BY SELECTING - 
	//TESTS FOR THE SELECTED PROGRAM DATE FOR THE SELECTED PROGRAM TYPE

	public function add_data_third()
	{
		
		$user_id 				= $this->session->userdata['logged_in']['user_id'];

		$program_type_id 		= $this->input->post('program_type');

		$programm_date_id 		= $this->input->post('program_date');

		echo $user_id.'/'.$program_type_id.'/'.$programm_date_id;

		$data['username'] 		= $this->session->userdata['logged_in']['username'];

		$data['units']			= $this->units_model->get_all_units();

		$data['test_methods'] 	= $this->test_methods_model->get_test_methods_byprogram($program_type_id);

		$data['program_tests'] 	= $this->user_model->get_user_program($program_type_id, $programm_date_id, $user_id);		

		//	make it dynamic
		$data['dynamic_view'] 	= 'user/insert_test_values';
		$data['title_user'] 	= 'участник';

		$this->load->view('templates/main_template_user', $data);
		

	} //end add_data_third

	public function add_data_final()
	{
		echo "Working!";
	}

	


	



	


}//end of User class