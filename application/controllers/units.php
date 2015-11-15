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
		
		$data['all_units'] = $this->units_model->get_all_units();

		$this->load->view('units\show_all_units', $data);

	}//end show_all_units


	public function add_units()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('unit', 'Единици за измерване', 'required|trim');
		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_units_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->units_model->add_units();
			echo "Успешен запис!";
			
		}
	}//end add_units


	//
	//LOADS FORM TO ADD NEW UNIT
	//

	public function add_units_form() 
	{

		$this->load->library('form_validation');
		$this->load->view('units/add_units_form');

	}//end add_unit_form

	//UPDATE UNITS

	public function update_units()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('unit', 'Единици за измерване', 'required|trim|');
		

		if ($this->form_validation->run() === FALSE) 
		{
			//TO DO load all units as a table, alphabetically
			echo "Неуспешен запис! Моля, опитайте отново!";
			/*$data['all_units'] = $this->units_model->get_all_units();
			$this->load->view('units/show_all_units');*/
		} 
		else 
		{
			
			$this->units_model->update_units();
			echo "Успешен запис!";
			
		}

		

	}//end of update_units
	
	public function update_units_form($id)
	{
		$data['data_unit'] = $this->units_model->get_unit($id);
		$this->load->view('units\update_unit_form', $data);

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