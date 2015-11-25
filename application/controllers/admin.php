<?php
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', '', TRUE);
		//$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$data['dynamic_view'] = 'admin/admin';
		$data['title_admin'] = 'Админ';
		$this->load->view('templates/main_template_admin', $data);
	}//end of index


	public function messages()
	{
		$data['dynamic_view'] = 'admin/messages';
		$data['title_admin'] = 'Съобщения';
		$this->load->view('templates/main_template_admin', $data);
		$this->load->helper('form');
	} //end of messages

	
	public function add()
	{
		$data['dynamic_view'] = 'admin/add';
		$data['title_admin'] = 'Добави';
		$this->load->view('templates/main_template_admin', $data);

	}//end of add

	public function show_all_users()
	{
		$data['all_users'] = $this->user_model->get_all_users();
		$data['dynamic_view'] = 'admin/show_all_users';
		$data['title_admin'] = 'админ';
		$this->load->view('templates/main_template_admin', $data);

	}//end of show all users

	public function add_new_user()
	{
		$this->load->library('form_validation');
		//-------------?DO I NEED THIS?
		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', 'Полето е задължително');
		$this->form_validation->set_message('min_length', 'Полето {field} трябва да е по-дълго от {param} знака');
		$this->form_validation->set_message('max_length', 'Полето {field} не трябва да е по-дълго от 12 знака');
		
		$this->form_validation->set_message('matches', 'Полето {field} не съвпада с полето {param}');


		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');


		//-----------SETTING CUSTOM FORM VALIDATION RULES

		$this->form_validation->set_rules('username', 'потребителско име', 'trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('password', 'парола', 'trim|required|min_length[8]|matches[password_confirm]|md5');
		$this->form_validation->set_rules('password_confirm', 'повторете паролата', 'trim|required');
		$this->form_validation->set_rules('lab_name', 'Име на лабораторията', 'required');
		$this->form_validation->set_rules('address', 'Адрес на лабораторията', 'required');
		
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_new_user_form();
		
		} 
		else 
		{
			
			
			$this->user_model->add_new_user();
			$username = $this->input->post('username');
			$data['user_info'] = $this->user_model->get_user_byusername($username);
			$data['title_admin'] = 'админ';
			
			
			$data['dynamic_view'] = 'admin/show_user_info';
			
			
			$this->load->view('templates/main_template_admin', $data);
	
			
			
		}

	}//end of add_new_user

	public function add_new_user_form()
	{
		$this->load->library('form_validation');
		$data['title_admin'] = 'админ';
		$data['dynamic_view']= 'admin/add_new_user_form';
		$this->load->view('templates/main_template_admin', $data);
	}//end of add_new_user_form


	public function update_user($user_id)
	{
		$this->load->library('form_validation');
		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', 'Полето е задължително');
		$this->form_validation->set_message('min_length', 'Полето {field} трябва да е по-дълго от {param} знака');
		$this->form_validation->set_message('max_length', 'Полето {field} не трябва да е по-дълго от 12 знака');
		
		$this->form_validation->set_message('matches', 'Полето {field} не съвпада с полето {param}');


		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');


		//-----------SETTING CUSTOM FORM VALIDATION RULES

		$this->form_validation->set_rules('username', 'потребителско име', 'trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('password', 'парола', 'trim|required|min_length[8]|matches[password_confirm]|md5');
		$this->form_validation->set_rules('password_confirm', 'повторете паролата', 'trim|required');
		$this->form_validation->set_rules('lab_name', 'Име на лабораторията', 'required');
		$this->form_validation->set_rules('address', 'Адрес на лабораторията', 'required');
		
		

		if ($this->form_validation->run() === FALSE) 
		{
			
			$this->update_user_form($user_id);
			
		} 
		else 
		{
			
			$this->user_model->update_user($user_id);
			echo "Успешен запис!";
			$data['dynamic_view'] = 'admin/show_all_users';
			$data['all_users'] = $this->user_model->get_all_users();

			$data['title_admin'] = 'админ';
			$this->load->view('templates/main_template_admin', $data);
			
		}

	}//end of update_user

	public function update_user_form($user_id)
	{
		
		$data['user_data'] = $this->user_model->get_user($user_id);
		$data['dynamic_view'] = 'admin\update_user_form';
		$data['title_admin'] = 'админ';

		$this->load->view('templates/main_template_admin', $data);

	}//update_user_form


	public function delete_user($user_id)
	{
		$data['user_info'] = $this->user_model->get_user($user_id);
		$this->user_model->delete_user($user_id);
		$this->show_all_users();
		}//end of delete user

		public function programs_requests()
		{
			$data['dynamic_view'] = 'admin/complex_info_form';
			$data['title_admin'] = 'Програми';

			//WHAT DATA THERE IS IN DB
			$data['complex_info'] = $this->user_model->get_complex_info();
			$data['all_users'] = $this->user_model->get_all_users();

			$this->load->view('templates/main_template_admin', $data);

	}//programs_requests


	public function add_complex_info()
	{

		$user_id = $this->input->post('username');
		$programm_type_id = $this->input->post('programm_type');

		//$this->user_model->add_user_programm();

		$data['user_id'] = $user_id;

		$data['programm_type_id'] = $programm_type_id;

		$data['user_data'] = $this->user_model->get_user($user_id);

		$data['additional_complex_info'] = $this->user_model->get_additional_info($programm_type_id);

		$data['dynamic_view'] = 'admin/aditional_complex_info_form';
		
		$data['title_admin'] = 'Програми';


		$this->load->view('templates/main_template_admin', $data);


	}//end add_complex_info


	public function add_aditional_complex_info()

	{
		
		//RECEIVED FROM FORM AS HIDDEN INPUT TYPE
		$user_id = $this->input->post('user_id');
		$username = $this->input->post('username');
		$programm_type_id = $this->input->post('programm_type_id');	
		$programm_type = $this->input->post('programm_type');
		$programm_date_id = $this->input->post('programm_date');

		//RECEIVED FROM FORM AS SELECTED
		$programm_date_id = $this->input->post('programm_date');

		//GET THE CORRESPONDING PROGRAMM DATE AND THE TESTS FOR THE CERTAIN PROGRAMM TYPE 
		//FROM PROGRAMM DATES TABLE AND TESTS TABLE, LOAD THE MODEL - PROGRAMM_DATES_MODEL AND TESTS_MODEL

		$this->load->model('programm_dates_model');

		//RETRIEVES CERTAIN PROGRAMM DATE BY ITS ID

		$data['programm_date'] =  $this->programm_dates_model->get_programm_date($programm_date_id);		

		$this->load->model('tests_model');

		$data['tests'] = $this->tests_model->get_program_tests($programm_type_id);

		//$this->user_model->add_user_programm_additional_info($user_id, $programm_type_id);

		//LOADING VIEW
		

		$data['user_id'] = $user_id;
		$data['username'] = $username;
		$data['programm_type_id'] = $programm_type_id;
		$data['programm_type'] = $programm_type;
		

		$data['dynamic_view'] = 'admin/select_test';
		$data['title_admin'] = 'Програми';


		$this->load->view('templates/main_template_admin', $data);



	}//end of add_aditional_complex_info

	public function final_complex_info()
	{

		//INSERTS IN THE DB ALL INFO GATHERED FOR THE PROGRAM REQUEST

		$this->user_model->final_complex_info();
		$data['dynamic_view'] = 'admin/admin_success_page';
		$data['title_admin'] = 'Администратор';


		$this->load->view('templates/main_template_admin', $data);

		
		
	}//end of final_complex_info

	public function show()
	{
		$data['dynamic_view'] = 'admin/show';
		$data['title_admin'] = 'Прегледай';
		$this->load->view('templates/main_template_admin', $data);
	}

	public function choose()

	{
		$data['dynamic_view'] = 'admin/choose';
		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/main_template_admin', $data);
	}


	public function show_program_dates()
	{
		//SELECTS A PROGRAMM DATE AND DISPLAYS ALL USERS REGISTERED FOR THIS DATE
		//INFO IS GATHERED FROM THE LAST TABLE IN THE DB
		$this->load->model('programm_dates_model');
		$this->load->model('program_types_model');
		$data['programm_dates'] = $this->programm_dates_model->get_all_programm_dates();
		$data['programm_types'] = $this->program_types_model->get_all_program_types();
		$data['dynamic_view'] = 'admin/select_program_date';
		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/main_template_admin', $data);



	}

	public function show_users_bydates()
	{

		//DISPLAYS USERS ACCORDING THE DATES AND PROGRAMMS CHOSEN IN THE PREVIOUS METHOD

		$program_date_id		= 	$this->input->post('program_date');
		
		$programm_type_id 		=	$this->input->post('program_type');

		
		//TO DO  to get the program name and cicle use models to get info from the db
		$this->load->model('programm_dates_model');
		$this->load->model('program_types_model');

		$data['cicle'] 			= $this->programm_dates_model->get_programm_date($program_date_id); 
		$data['program_type'] 	= $this->program_types_model->get_program_type($programm_type_id);

		$data['user_info'] = $this->user_model->get_users_programs($program_date_id, $programm_type_id);
		$data['dynamic_view'] = 'admin/show_users_bydates';

		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/main_template_admin', $data);

	}//end of show_users_bydates

	public function show_programs_byuser()
	{

		//DISPLAYS FORM TO SELECT THE USER WHOSE PROGRAM TO CHANGE OR DLETE

		$data['all_users'] = $this->user_model->get_all_users();

		$data['dynamic_view'] = 'admin/select_users_to_programcheck';

		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/main_template_admin', $data);


	}//end of show_programs_byuser

	public function check_user_programs($user_id)
	{
		
		$data['program_requests'] = $this->user_model->get_user_programs($user_id); 
		
		$data['user_info'] = $this->user_model->get_user($user_id);

		$data['dynamic_view'] = 'admin/update_user_program';

		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/main_template_admin', $data);

	}//end of check_user_program

	//'admin/update_user_program').'">Промени</a>';
		//echo '<a href="'.base_url('admin/delete_user_program'


//LOADS FORM TO UPDATE USER`S PROGRAM, ONLY UPDATES THE CHOSEN TESTS

	public function update_user_program_user($programm_type_id, $programm_date_id, $user_id)
	{
		
		$this->load->model('tests_model');

		$data['tests'] = $this->tests_model->get_program_tests($programm_type_id);

		$data['update_program'] = $this->user_model->get_user_program($programm_type_id, $programm_date_id, $user_id);

		$data['dynamic_view'] = 'admin/update_user_program_user_form';

		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/main_template_admin', $data);

	}//end of update_user_program_user

//UPDATES USER`S PROGRAM, ONLY UPDATES THE CHOSEN TESTS

	public function final_update()

	{

		$this->user_model->final_update();
		//SEE LAB`S PROGRAM-DATE-TYPE-TEST
	}

	public function delete_user_program_user($programm_type_id, $programm_date_id, $user_id)
	{
		
		$this->user_model->delete_users_program($programm_type_id, $programm_date_id, $user_id);

		//TO DO FIX GO TO WHERE????
		//SEE LAB`S PROGRAM-DATE-TYPE-TEST

	}//end of update_user_program_user

}//end of Admin class