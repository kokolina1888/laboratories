<?php 

class Test_methods extends CI_controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('test_methods_model');
	}

	//shows all availabale methods

	public function show_all_tests_methods()
	{

		$data['all_tests_methods'] = $this->test_methods_model->get_all_test_methods();

		$this->load->view('tests_methods/show_all_tests_methods', $data);

	}//end of show_all_test_methods


//displays the methods for a single test by id
	public function show_single_test_methods($test_id)

	{

		$data['single_test_methods'] = $this->test_methods_model->get_single_test_methods($test_id);

		$this->load->view('tests_methods/show_single_test_methods', $data);

	}//end of show_single_test_methods

	public function add_test_method()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('test', 'Тест', 'required');
		$this->form_validation->set_rules('method', 'Метод', 'required');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_test_method_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->test_methods_model->add_test_method();
			echo "Успешен запис!";
			
		}

	}//end of add_test_method

	public function add_test_method_form()
	{
		$data['tests_options'] = $this->test_methods_model->get_all_tests();
		$data['methods_options'] = $this->test_methods_model->get_all_methods();
		$this->load->library('form_validation');
		$this->load->view('tests_methods/add_test_method_form', $data);

	}

	public function update_test_method_form($test_method_id)

	{
		$data['all_methods'] = $this->test_methods_model->get_all_methods();
		$data['test_method'] = $this->test_methods_model->get_test_method($test_method_id);

		$this->load->view('tests_methods\update_test_method_form', $data);		

	}//end of add_test_method

	public function update_test_method()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('test', 'Тест', 'required');
		$this->form_validation->set_rules('method', 'Метод', 'required');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_test_method_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->test_methods_model->update_test_method();
			echo "Успешен запис!";
			
		}

		

	}//end of update_test_method

	//deleting methods of singular tests

	public function delete_test_method($test_method_id)
	{

		$data['data_test_method'] = $this->test_methods_model->get_single_info_test($test_method_id);
		$this->test_methods_model->delete_test_method($test_method_id);

		$this->show_all_tests_methods();

	}



}