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
		$data['all_methods'] 	= $this->methods_model->get_all_methods();
		$data['dynamic_view'] 	= 'methods/show_all_methods';
		$data['title_admin']	= 'админ';
		$this->load->view('templates/main_template_admin', $data);
	}//end of show_all_methods


	public function add_method()
	{
		$this->load->library('form_validation');

		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', 'Не сте въвели новата стойност за метод');

		$this->form_validation->set_rules('method', 'Методи за изследване', 'trim|required');
		
		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_method_form();
			
		} 
		else 
		{
			
			$this->methods_model->add_method();		
			$data['all_methods']	= $this->methods_model->get_all_methods();	
			
			$data['dynamic_view'] 	= 'methods/show_all_methods';
			$data['title_admin'] 	= 'админ';
			
			$this->load->view('templates/main_template_admin', $data);
		}

		}//end of add_method

		public function add_method_form()
		{
			$data['dynamic_view'] 	= 'methods/add_method_form';
			$data['title_admin']	= 'админ';
			$this->load->view('templates/main_template_admin',$data);
	}//end add_method_form

	public function update_method($id)

	{
		$this->load->library('form_validation');

		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', 'Не сте въвели новата стойност за метод');

		$this->form_validation->set_rules('method', 'Методи за изследване', 'trim|required');
		
		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');


		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_method_form($id);
			
		} 
		else 
		{
			
			$this->methods_model->update_method($id);
			$data['all_methods'] 	= $this->methods_model->get_all_methods();

			$data['title_admin'] 	= 'админ';
			$data['dynamic_view']	= 'methods/show_all_methods';

			$this->load->view('templates/main_template_admin', $data);
			
		}
		}//end of update_method


		public function update_method_form($id) 
		{
			$data['method_info'] 	= $this->methods_model->get_method($id);
			
			$data['dynamic_view'] 	= 'methods/update_method_form';
			$data['title_admin']	= 'админ';
			$this->load->view('templates/main_template_admin', $data);

		}//end of update_method_form

		public function delete_method($id)
		{
			$data['method_info'] = $this->methods_model->get_method($id);
			$this->methods_model->delete_method($id);
			$this->show_all_methods();
		}
	}