<?php
class Devices extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('devices_model');
		$this->load->helper('url_helper');
	}

	public function show_all_devices()
	{
		$data['all_devices'] = $this->devices_model->get_all_devices();
		$this->load->view('devices\show_all_devices', $data);
	}
	//  ------------------- end show_all_devices


	public function add_devices()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('device', 'Апарат', 'required|trim');
	
		if ($this->form_validation->run() === FALSE) 
		{
			$this->add_devices_form();
			
		}
		else 
		{
			$this->devices_model->add_device();
			echo "Успешен запис";
		}
	} 
	// ------------------- еnd "add_device"


	public function add_devices_form()
	{
		$this->load->library('form_validation');
		$this->load->view('devices/add_devices');
	} 
	//  ------------------- end 'add_device_form'


	public function update_devices()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('device', 'Име на апарат', 'required');
	
		if ($this->form_validation->run() === FALSE) 
		{
			$this->update_device_form();
			echo "Въведете всички полета";
		}
		else 
		{
			$this->devices_model->update_devices();
			echo "Успешен запис";
		}
	}

	//  ------------------- end 'update_device'

	public function update_device_form($id = 1)
	{
		$data['device_info'] = $this->devices_model->get_devices($id);
		$this->load->view('devices/update_devices', $data);
	}
}
?>