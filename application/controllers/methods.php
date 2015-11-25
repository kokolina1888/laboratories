<?php 

/**
* 
*/
class Methods extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('methods_model');
		$this->load->helper('url_helper');
	}

	public function show_all_methods()
	{
		$data['all_methods'] = $this->methods_model->get_all_methods();
		$this->load->view('methods/show_all_methods', $data);
	}//end of show_all_methods


	public function add_method()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('method', 'Методи за изследване', 'required|trim');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_method_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->methods_model->add_method();			
			
			$data['dynamic_view'] = 'methods/add';
			$data['title_admin'] = 'Добави';
			
			$this->load->view('templates/main_template_admin', $data);
		}

		}//end of add_method

		public function add_method_form()
		{
			$this->load->library('form_validation');
			$this->load->view('methods/add_method_form');
	}//end add_units
	public function update_method()

	{
		$this->load->library('form_validation');


		$this->form_validation->set_rules('method', 'Методи за изследване', 'required|trim');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_method_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->methods_model->update_method();
			echo "Успешен запис!";
		}
		}//end of update_method


		public function update_method_form($id) 
		{
			
			$data['method_info'] = $this->methods_model->get_method($id);
			$this->load->view('methods/update_method_form', $data);

		}//end of update_method_form

		public function delete_method($id)
		{
			$data['method_info'] = $this->methods_model->get_method($id);
			$this->methods_model->delete_method($id);
			$this->show_all_methods();
		}
	}