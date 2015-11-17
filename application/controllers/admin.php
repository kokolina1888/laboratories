<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', '', TRUE);
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

	public function programs_requests()
	{
		$data['dynamic_view'] = 'admin/complex_info_form';
		$data['title_admin'] = 'Програми';
		$data['complex_info'] = $this->user_model->get_complex_info();
		$data['all_users'] = $this->user_model->get_all_users();
		
		$this->load->view('templates/main_template_admin', $data);
	}//programs_requests

	public function add()
	{
		$data['dynamic_view'] = 'admin/add';
		$data['title_admin'] = 'Добави';
		$this->load->view('templates/main_template_admin', $data);

	}//end of add

		public function show_all_users()
	{
		$data['all_users'] = $this->user_model->get_all_users();
		$this->load->view('admin/show_all_users', $data);

	}//end of show all users

	public function add_new_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_message('required', 'Полето %s е задължително');

		$this->form_validation->set_rules('username', 'потребителско име', 'required');
		$this->form_validation->set_rules('password', 'парола', 'required');
		$this->form_validation->set_rules('password_confirm', 'повторете паролата', 'required');
		$this->form_validation->set_rules('lab_name', 'Име на лабораторията', 'required');
		$this->form_validation->set_rules('address', 'Адрес на лабораторията', 'required');
		
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_new_user_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->user_model->add_new_user();
			echo "Успешен запис!";
			
		}

	}//end of add_new_user

	public function add_new_user_form()
	{
		$this->load->library('form_validation');
		$this->load->view('admin/add_new_user_form');
	}//end of add_new_user_form


	public function update_user()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_message('required', 'Полето %s е задължително');

		$this->form_validation->set_rules('username', 'потребителско име', 'required');
		$this->form_validation->set_rules('password', 'парола', 'required');
		$this->form_validation->set_rules('password_confirm', 'повторете паролата', 'required');
		$this->form_validation->set_rules('lab_name', 'Име на лабораторията', 'required');
		$this->form_validation->set_rules('address', 'Адрес на лабораторията', 'required');
		
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_user_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->user_model->update_user();
			echo "Успешен запис!";
			
		}

	}//end of update_user

	public function update_user_form($user_id)
	{
		
	$data['user_data'] = $this->user_model->get_user($user_id);

	$this->load->view('admin\update_user_form', $data);

	}//update_user_form


	public function delete_user($user_id)
		{
			$data['user_info'] = $this->user_model->get_user($user_id);
			$this->user_model->delete_user($id);
			$this->show_all_users();
		}//end of delete user

	

	public function add_complex_info()
	{
		
		$user_id = $this->input->post('username');
		$programm_type_id = $this->input->post('programm_type');

		$this->user_model->add_user_programm();

		$data['user_id'] = $user_id;
		$data['programm_type_id'] = $programm_type_id;

		$data['user_data'] = $this->user_model->get_user($user_id);

		$data['additional_complex_info'] = $this->user_model->get_additional_info($programm_type_id);

		$data['dynamic_view'] = 'admin/aditional_complex_info_form';
		$data['title_admin'] = 'Програми';
		
		
		$this->load->view('templates/main_template_admin', $data);
		

		/*$data['dynamic_view'] = 'admin/complex_info_form';
		$data['title_admin'] = 'Програми';
		$this->load->view('templates/main_template_admin', $data);*/

	/*	от модела инфо за

		ВЪВЕДЕНИТЕ ВЕЧЕ ПОТРЕБИТЕЛИ

		СЪЩЕСТВУВАЩИТЕ ДАТИ ЗА ПРОГРАМИ И НОМЕРА НА РАЗЛИЧНИТЕ ПРОБИ АКО ИМА ТАКИВА

		ТЕСТОВЕТЕ, КОИТО МОГАТ ДА СЕ ИЗСЛЕДВАТ ПО СЪОТВЕТНАТА ПРОГРАМА
		СЪОТВЕТНО ТР ДА ЛОАДНЕШ МОДЕЛИТЕ ЗА user_model, programm_dates_model, test_model ЗА ДА ИЗПОЛЗВАШ ФУНКЦИИТЕ ЗА 
		ИНФО ЗА ВСИЧКИ ПОТРЕБИТЕЛИ ПРОГРАМИ ТЕСТОВЕ ... КЪДЕТО Е УДАЧНО ИЗПОЛЗВАЙ WHERE ...
		ДАЛИ ЩЕ ТРЯБВА JOIN? ОЩЕ В НАЧАЛОТО, ТОГАВА МОЖЕ БИ НЯМА ДА ИМА НУЖДА ОТ ЛОДВАНЕ НА ВС МОДЕЛИ?!*/


	}//end add_comlex_info
	public function aditional_complex_info()
	{
				echo "it is working";
	}

	public function update_complex_info()
	{
		//UPDATES THE COMPLEX INFO INSERTED IN THE DB FOR A USER


		$data['complex_info'] = $this->user_model->get_complex_info();
	}

}//end of Admin class