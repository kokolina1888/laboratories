<?php 

/**
* 
*/
class Programm_types extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('program_types_model');
	}

//ALL PROGRAM TYPES

	public function show_all_programm_types() 
	{
		
		$data['all_programm_types'] = $this->program_types_model->get_all_program_types();

		$this->load->view('programm_types\show_program_types', $data);

	}//end show_all_units


	public function add_programm_types()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('programm_types', 'Programm_types', 'required|trim');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_programm_types_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->program_types_model->add_program_types();
			echo "Успешен запис!";
			
		}
	}//end add_units


	//
	//LOADS FORM TO ADD NEW PROGRAMM TYPE
	//

	public function add_programm_types_form() 
	{

		$this->load->library('form_validation');
		$this->load->view('programm_types/add_programm_types_form');

	}//end add_unit_form



	//UPDATE PROGRAMM TYPE

	public function update_programm_types()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('programm_types', 'Programm_types', 'required|trim|is_unique[programm_types.programm_type]');
		

		if ($this->form_validation->run() === FALSE) 
		{
			//loads all units as a table, alphabetically
			echo "Неуспешен запис! Моля, опитайте отново!";

			

		} 
		else 
		{
			
			$this->program_types_model->update_programm_types();
			echo "Успешен запис!";
			
		}

		

	}//end of update_units

//LOADS FORM TO UPDATE PROGRAMM TYPES
	
	public function update_programm_types_form($id)
	{
		$data['programm_type'] = $this->program_types_model->get_program_type($id);
		$this->load->view('programm_types\update_programm_type_form', $data);

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
