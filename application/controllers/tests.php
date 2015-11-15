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
		
		$data['all_tests'] = $this->tests_model->get_all_tests();
		$this->load->view('tests/show_all_tests', $data);
	}//end show_all_units


	public function add_tests()
	{ 		
		$this->load->library('form_validation');

		$this->form_validation->set_message('required', 'Полето %s е задължително');

		$this->form_validation->set_rules('programm_type', 'Програма', 'required');
		$this->form_validation->set_rules('test', 'Изследване', 'required|trim');
		$this->form_validation->set_rules('d_percent', 'd%', 'required|trim');
		$this->form_validation->set_rules('unit', 'Мерни единици', 'required');

		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_tests_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->tests_model->add_tests();
			echo "Успешен запис!";
			
		}


	}//end add_tests


	//
	//LOADS FORM TO ADD NEW PROGRAMM TYPE
	//

	public function add_tests_form() 
	{
		$this->load->library('form_validation');
		$data['all_units'] = $this->tests_model->get_all_units();
		$data['all_programm_types'] = $this->tests_model->get_all_program_types();
		$this->load->view('tests/add_tests_form', $data);

		
	}//end add_unit_form



	//UPDATE PROGRAMM TYPE

	public function update_test()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('programm_type', 'Програма', 'required|trim');
		$this->form_validation->set_rules('test', 'Изследване', 'required|trim');
		$this->form_validation->set_rules('d_percent', 'd%', 'required|trim');
		$this->form_validation->set_rules('unit', 'Мерни единици', 'required|trim');

		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_tests_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->tests_model->update_tests();
			echo "Успешен запис!";	
		}		

	}//end of update_test


//LOADS FORM TO UPDATE TEST
	
	public function update_tests_form($test_id)
	{
		
		$data['test_data'] = $this->tests_model->get_tests($test_id);

	$data['all_units'] = $this->tests_model->get_all_units();
	$data['all_programm_types'] = $this->tests_model->get_all_program_types();
	$this->load->view('tests\update_test_form', $data);

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