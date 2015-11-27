<?php 

/**
* 
*/
class Tests extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('tests_model');
	}

	//ALL PROGRAMM TYPES

	public function show_all_tests() 
	{
		$data['title_admin'] 	= 'админ';
		$data['dynamic_view'] 	= 'tests/show_all_tests';
		$data['all_tests'] 		= $this->tests_model->get_all_tests();
		$this->load->view('templates/main_template_admin', $data);
	}//end show_all_units


	public function add_tests()
	{ 		
		$this->load->library('form_validation');

		$this->form_validation->set_message('required', 'Не сте попълнили %s');		
		$this->form_validation->set_message('greater_than', 'Въведената стойност в {field} трябва да е по-голяма от {param}');
		$this->form_validation->set_message('less_than', 'Въведената стойност в {field} не трябва да е по-голяма от {param}');		
		$this->form_validation->set_message('numeric', 'Въведете число за {field}');


		$this->form_validation->set_rules('programm_type', 'Програма', 'required');
		$this->form_validation->set_rules('test', 'Изследване', 'required|trim');
		$this->form_validation->set_rules('d_percent', 'd%', 'required|trim|numeric|greater_than[0]|less_than[100]');
		$this->form_validation->set_rules('unit', 'Мерни единици', 'required');

		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_tests_form();
			
		} 
		else 
		{
			
			$this->tests_model->add_tests();
			$this->show_all_tests();
			
		}


	}//end add_tests


	//
	//LOADS FORM TO ADD NEW PROGRAMM TYPE
	//

	public function add_tests_form() 
	{
		$data['all_units'] = $this->tests_model->get_all_units();
		$data['all_programm_types'] = $this->tests_model->get_all_program_types();

		$data['title_admin'] 	= 'админ';
		$data['dynamic_view'] 	= 'tests/add_tests_form';
		
		$this->load->view('templates/main_template_admin', $data);
		

		
	}//end add_unit_form



	//UPDATE PROGRAMM TYPE

	public function update_test($id)
	{

		$this->load->library('form_validation');

		$this->form_validation->set_message('required', 'Не сте попълнили %s');		
		$this->form_validation->set_message('greater_than', 'Въведената стойност в {field} трябва да е по-голяма от {param}');
		$this->form_validation->set_message('less_than', 'Въведената стойност в {field} не трябва да е по-голяма от {param}');		
		$this->form_validation->set_message('numeric', 'Въведете число за {field}');


		$this->form_validation->set_rules('programm_type', 'Програма', 'required');
		$this->form_validation->set_rules('test', 'Изследване', 'required|trim');
		$this->form_validation->set_rules('d_percent', 'd%', 'required|trim|numeric|greater_than[0]|less_than[100]');
		$this->form_validation->set_rules('unit', 'Мерни единици', 'required');

		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_tests_form($id);
			
		} 
		else 
		{
			
			$this->tests_model->update_tests($id);
			$this->show_all_tests();	
		}		

	}//end of update_test


//LOADS FORM TO UPDATE TEST
	
	public function update_tests_form($test_id)
	{
		
		$data['test_data'] = $this->tests_model->get_tests($test_id);

		$data['all_units'] = $this->tests_model->get_all_units();
		$data['all_programm_types'] = $this->tests_model->get_all_program_types();
		$data['title_admin'] 	= 'админ';
		$data['dynamic_view'] 	= 'tests/update_test_form';
		
		$this->load->view('templates/main_template_admin', $data);
		
		}//update_programm_types_form

	//LOADS FORM TO UPDATE UNITS

	//DELETE PROGRAMM TYPE

		public function delete_test($id)
		{
			$data['data_test'] = $this->tests_model->get_tests($id);
			$this->tests_model->delete_tests($id);
			$this->show_all_tests();


	}//end of delete_units
	

	

}