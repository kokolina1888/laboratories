<?php

class Admin extends CI_Controller {
	
	public function index()
	{
		$data['dynamic_view'] = 'admin/admin';
		$data['title_admin'] = 'Админ';
		$this->load->view('templates/main_template_admin', $data);
	} 

	public function messages()
	{
		$data['dynamic_view'] = 'admin/messages';
		$data['title_admin'] = 'Съобщения';
		$this->load->view('templates/main_template_admin', $data);
		$this->load->helper('form');
	} 

	// End homepage

	public function programs_requests()
	{
		$data['dynamic_view'] = 'admin/programs_requests';
		$data['title_admin'] = 'Заявки за програми';
		$this->load->view('templates/main_template_admin', $data);
	}

	// End programs

	public function add()
	{
		$data['dynamic_view'] = 'admin/add';
		$data['title_admin'] = 'Добави';
		$this->load->view('templates/main_template_admin', $data);
	}

	// End conduction

	// End medical standart
}