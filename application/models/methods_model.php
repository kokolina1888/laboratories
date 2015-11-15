<?php 

/**
* 
*/
class Methods_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_methods()
	{
		$this->db->where('date_deleted', NULL);
		$this->db->order_by('method', 'asc');
		$q = $this->db->get('methods');
		$result = $q->result_array();

		return $result;
	}//end of get_all_methods

	public function add_method()
	{
		$data_method = array(
			'method' => $this->input->post('method')
			);
		$this->db->insert('methods', $data_method);
	}//end of add_method

	public function get_method($id)
	{
		$this->db->where('method_id', $id);
		$q = $this->db->get('methods');
		$result = $q->row_array();

		return $result;
	}//end of get_method by id

	public function update_method()
	{
		$this->method_id = $this->input->post('method_id');
		$this->method = $this->input->post('method');

		$this->db->where('method_id', $this->method_id);
		$this->db->update('methods', $this);
	}//end of update_method

	public function delete_method($id)
	{

		$this->db->where('method_id', $id);
		$this->date_deleted = date('Y-m-d');

		$this->db->update('methods', $this);

	}//end of delete_method


}