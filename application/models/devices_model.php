<?php
class Devices_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_devices()
	{
		//$this->db->where('date_delete', NULL);
		$q = $this->db->get('devices');
		$q_result = $q->result_array();
		return $q_result;
	}

	//  ------------------- end 'get_all_devices'

	public function add_device()
	{
		$devices = array(
			'device' => $this->input->post('device')
		);

		return $this->db->insert('devices', $devices);
	}

	//  ------------------- end 'add_device'

	public function update_devices()
	{
		$this->device = $this->input->post('device');
		$this->id = $this->input->post('id');

		$this->db->where('id', $this->id);
		$this->db->update('devices', $this);
	}

	//  ------------------- end 'update_devices'

	public function get_devices($id)
	{
		$this->db->where('id', $id);
		$q = $this->db->get('devices');

		return $q->row_array();
	}

	//  ------------------- end 'get_device'
}
?>