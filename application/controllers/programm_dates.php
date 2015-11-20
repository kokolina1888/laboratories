<?php 

class Programm_dates extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('programm_dates_model');
	}

	public function show_all_programm_dates()
	{
		$data['all_programm_dates'] = $this->programm_dates_model->get_all_programm_dates();
		$this->load->view('programm_dates/show_all_programm_dates', $data);

	}//end of show_all_programm_dates

	public function add_programm_dates()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('cicle', 'Цикъл', 'required|trim');
		$this->form_validation->set_rules('probe_number', 'Номер на проба', 'required|trim');
		$this->form_validation->set_rules('date_analyse', 'Дата за анализ', 'required|trim');
		$this->form_validation->set_rules('date_final', 'Краен срок', 'required|trim');

		$this->form_validation->set_message('required', 'Полето %s е задължително');


		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_programm_date_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->programm_dates_model->add_programm_date();
			echo "Успешен запис!";
		}
	}//end of add_programm_dates

	public function add_programm_date_form()
	{
		
		$this->load->library('form_validation');

		$data['all_programm_types'] = $this->programm_dates_model->get_all_program_types();

		$data['dynamic_view'] = 'programm_dates/add_programm_date_form';

		$data['title_admin'] = 'Администратор';

		$this->load->view('templates/second_template_admin', $data);


		
		//$this->load->view('programm_dates/add_programm_date_form', $data);

		
	}//end of add_programm_dates_form

	public function update_programm_date()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cicle', 'Цикъл', 'required|trim');
		$this->form_validation->set_rules('probe_number', 'Номер на проба', 'required|trim');
		$this->form_validation->set_rules('date_analyse', 'Дата за анализ', 'required|trim');
		$this->form_validation->set_rules('date_final', 'Краен срок', 'required|trim');

		$this->form_validation->set_message('required', 'Полето %s е задължително');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_programm_date_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			
			$this->programm_dates_model->update_programm_date();
			echo "Успешен запис!";
		}


	}//end of update_programm_date

	public function update_programm_date_form($programm_date_id)

	{
		
		$data['programm_date_data'] = $this->programm_dates_model->get_programm_date($programm_date_id);


		$data['all_programm_types'] = $this->programm_dates_model->get_all_program_types();
		$this->load->view('programm_dates\update_programm_date_form', $data);

	}//update_programm_types_form

	public function delete_programm_date($programm_date_id)
	{
		$data['programm_date'] = $this->programm_dates_model->get_programm_date($programm_date_id);
		$this->programm_dates_model->delete_programm_date($programm_date_id);
		$this->show_all_programm_dates();
	}

}