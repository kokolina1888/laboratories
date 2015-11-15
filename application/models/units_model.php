<?php 

class Units_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_units() 
	{
		$this->db->where('date_deleted', NULL);
		$this->db->order_by('unit', 'asc'); 
		$q = $this->db->get('units');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_units

	

//
//ENTERS NEW UNIT IN DATABASE
//

	public function add_units()
	{

		$units = array (
			'unit' => $this->input->post('unit')
			);

		return $this->db->insert('units', $units);

}//end of add_units


public function update_units()
{

	$this->unit    = $this->input->post('unit');
	$this->unit_id 	   = $this->input->post('unit_id'); 	

	$this->db->where('unit_id', $this->unit_id);
	
	$this->db->update('units', $this);

}//end of update_units()

public function get_unit($id) 
{
	
	$this->db->where('unit_id', $id);
	$q = $this->db->get('units');

	return $q->row_array();

	

}//end of get_unit



public function delete_units($id)
{

	$this->db->where('unit_id', $id);
	$this->date_deleted = date('Y-m-d');
	
	$this->db->update('units', $this);
	
}
}