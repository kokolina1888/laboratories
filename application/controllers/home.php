<?php

class Home extends CI_Controller {
	
	public function index()
	{
		$data['dynamic_view'] = 'home/index';
		$data['title'] = 'Начало';
		$this->load->view('templates/main_template', $data);
		
	} 

	// End homepage

	public function programms()
	{
		$data['dynamic_view'] = 'home/programms';
		$data['title'] = 'Програми';
		$this->load->view('templates/main_template', $data);
	}

	// End programs

	public function provejdane()
	{
		$data['dynamic_view'] = 'home/provejdane';
		$data['title'] = 'Провеждане';
		$this->load->view('templates/main_template', $data);
	}

	// End conduction

	public function medical_standart()
	{
		$data['dynamic_view'] = 'home/medical_standart';
		$data['title'] = 'Медицински стандарт';
		$this->load->view('templates/main_template', $data);
	}

	// End medical standart
}