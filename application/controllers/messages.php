<?php
class Messages extends CI_Controller {

	public $id;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('messages_model');
	}

	public function show_all_messages()
	{
		
		$data['all_messages'] = $this->messages_model->get_all_messages();
		$this->load->view('home/index', $data);
	} // 

	public function show_single_message($message_id = 1)
	{
		$data['message'] = $this->messages_model->get_single_message($message_id);
		$this->load->view('messages/show_messages', $data);
	}

	public function add_message_show()
	{
		$this->load->library('form_validation');
		$this->load->view('messages/add_message_view');
	} // Зареждаме библиотека за валидация на форма и файла за добавяне на съобщения.

	public function add_message()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		// Зареждаме библиотеки

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Content', 'required');
		$this->form_validation->set_rules('publisher', 'Publisher', 'required');
		// Правим проверка за отделните полета

		if($this->form_validation->run() === FALSE) {
			$this->add_message_show();
		} else {
			$this->messages_model->add_message();
			echo "Successfully inserted message in databse";
		}
		// Правим проверка дали формата е изпратена успешно или не.
	}

	// UPDATE MESSAGES

	public function update_messages()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('message_title', 'Programm_types', 'required|trim|is_unique[programm_types.programm_type]');
		
		if ($this->form_validation->run() === FALSE) 
		{
			//loads all units as a table, alphabetically
			echo "Неуспешен запис! Моля, опитайте отново!";
		} 
		else 
		{			
			$this->messages_model->update_messages();
			echo "Успешен запис!";			
		}
	}//end of update_units
	
	public function update_messages_form($id = 1)
	{
		$data['message_data'] = $this->messages_model->get_messages($id);
		$this->load->view('messages/update_message_form', $data);

	}//update_programm_types_form


	public function delete_messages($id = 1)
	{
		$data['message_data'] = $this->messages_model->get_messages($id);
		$this->messages_model->delete_message($id);
		$this->show_all_messages();

	}//end of delete_units

}

