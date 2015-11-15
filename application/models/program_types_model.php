<?php 

/**
* 
*/
class Program_types_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	//gets all from the database
	
	public function get_all_program_types()
	{

		$this->db->where('date_deleted', NULL);
		$this->db->order_by('programm_type', 'asc'); 
		$q = $this->db->get('programm_types');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_program_types



//inserts single $program_type into database

	public function add_program_types()
	{

		$program_types = array (
			'programm_type' => $this->input->post('programm_types')
			);

		return $this->db->insert('programm_types', $program_types);
	}//end of add_program_types


	public function update_programm_types()
	{
		$this->programm_type    = $this->input->post('programm_types');
		$this->programm_type_id      = $this->input->post('programm_type_id');

		$this->db->where('programm_type_id', $this->programm_type_id);
		$this->db->update('programm_types', $this);
	}//end of update_programm_types


	public function get_program_type($id) 
	{

		$this->db->where('programm_type_id', $id);
		$q = $this->db->get('programm_types');
		
		return $q->row_array();
	}//end of get_unit

	public function delete_programm_types($id)
	{

		$this->db->where('programm_type_id', $id);
		$this->date_deleted = date('Y-m-d');

		$this->db->update('programm_types', $this);

	}//end of delete_programm_types


}