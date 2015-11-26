<?php 

class Units extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('units_model');
		$this->load->helper('url_helper');

	}

	public function show_all_units() 
	{
		
		$data['all_units'] 		= $this->units_model->get_all_units();
		$data['dynamic_view']	= 'units\show_all_units';
		$data['title_admin']	= 'админ';

		$this->load->view('templates/main_template_admin', $data);

	}//end show_all_units


	public function add_units()
	{
		$this->load->library('form_validation');

		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', 'Не сте въвели стойност за единици');

		$this->form_validation->set_rules('unit', 'Методи за изследване', 'trim|required');
		
		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_units_form();
			
		} 
		else 
		{
			
			$this->units_model->add_units();
			$data['all_units']	= $this->units_model->get_all_units();	
			
			$data['dynamic_view'] 	= 'units/show_all_units';
			$data['title_admin'] 	= 'админ';
			
			$this->load->view('templates/main_template_admin', $data);

			
		}
	}//end add_units


	//
	//LOADS FORM TO ADD NEW UNIT
	//

	public function add_units_form() 
	{

		$data['all_units']	= $this->units_model->get_all_units();	

		$data['dynamic_view'] 	= 'units/add_units_form';
		$data['title_admin'] 	= 'админ';

		$this->load->view('templates/main_template_admin', $data);


	}//end add_unit_form

	//UPDATE UNITS

	public function update_units($unit_id)
	{

		$this->load->library('form_validation');

		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', 'Не сте въвели стойност за единици');

		$this->form_validation->set_rules('unit', 'Методи за изследване', 'trim|required');
		
		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_units_form($unit_id);
			
		} 
		else 
		{
			
			$this->units_model->update_units($unit_id);
			$data['all_units']	= $this->units_model->get_all_units();	
			
			$data['dynamic_view'] 	= 'units/show_all_units';
			$data['title_admin'] 	= 'админ';
			
			$this->load->view('templates/main_template_admin', $data);
			
		}

		

	}//end of update_units
	
	public function update_units_form($id)
	{
		$data['data_unit'] = $this->units_model->get_unit($id);
		$data['dynamic_view'] 	= 'units/update_unit_form';
		$data['title_admin'] 	= 'админ';

		$this->load->view('templates/main_template_admin', $data);

		
	}//

	
	//LOADS FORM TO UPDATE UNITS

	//DELETE UNITS

	public function delete_units($id)
	{
		$data['data_unit'] = $this->units_model->get_unit($id);
		$this->units_model->delete_units($id);
		$this->show_all_units();

	}//end of delete_units

	//LOADS FORM TO DELETE UNITS


}