<?php 

/**
* 
*/
class Programm_types extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('program_types_model');
		$this->output->enable_profiler(TRUE);
	}

//ALL PROGRAM TYPES

	public function show_all_programm_types() 
	{
		
		$data['all_programm_types'] 	= $this->program_types_model->get_all_program_types();
		$data['dynamic_view']			= 'programm_types\show_program_types';
		$data['title_admin']			= 'админ';

		$this->load->view('templates/main_template_admin', $data);

	}//end show_all_units


	public function add_programm_types()
	{
		$this->load->library('form_validation');

		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', '**Не сте въвели програма');

		$this->form_validation->set_rules('programm_types', 'програма', 'trim|required');
		
		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_programm_types_form();
			
		} 
		else 
		{
			
			$this->program_types_model->add_program_types();
			$data['all_programm_types'] 	= $this->program_types_model->get_all_program_types();
			$data['dynamic_view']			= 'programm_types\show_program_types';
			$data['title_admin']			= 'админ';

			$this->load->view('templates/main_template_admin', $data);
			
			
		}
	}//end add_units


	//
	//LOADS FORM TO ADD NEW PROGRAMM TYPE
	//

	public function add_programm_types_form() 
	{
		$data['dynamic_view']			= 'programm_types\add_programm_types_form';
		$data['title_admin']			= 'админ';

		$this->load->view('templates/main_template_admin', $data);

	}//end add_unit_form



	//UPDATE PROGRAMM TYPE

	public function update_programm_types($id)
	{

		$this->load->library('form_validation');

		$this->lang->load('form_validation_lang', 'bulgarian');


		//------------SETTING CUSTOM ERROR MESSAGES

		$this->form_validation->set_message('required', '**Не сте въвели нова програма');

		$this->form_validation->set_rules('programm_types', 'програма', 'trim|required');
		
		//-----------STYLING THE ERROR MESSAGES
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');


		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_programm_types_form($id);

		} 
		else 
		{
			echo $id;
			
			$this->program_types_model->update_programm_types($id);

			$data['all_programm_types'] 	= $this->program_types_model->get_all_program_types();
			$data['dynamic_view']			= 'programm_types\show_program_types';
			$data['title_admin']			= 'админ';

			$this->load->view('templates/main_template_admin', $data);
			
			
			
		}

		

	}//end of update_units

//LOADS FORM TO UPDATE PROGRAMM TYPES
	
	public function update_programm_types_form($id)
	{
		$data['programm_type'] = $this->program_types_model->get_program_type($id);

		$data['dynamic_view']			= 'programm_types\update_programm_type_form';
		$data['title_admin']			= 'админ';

		$this->load->view('templates/main_template_admin', $data);

		
	}//update_programm_types_form

	//LOADS FORM TO UPDATE UNITS

	//DELETE PROGRAMM TYPE

	public function delete_programm_types($id)
	{
		$data['programm_type'] = $this->program_types_model->get_program_type($id);
		$this->program_types_model->delete_programm_types($id);
		$this->show_all_programm_types();



	}//end of delete_units

	//LOADS FORM TO DELETE UNITS

}
