<?php 

/**
* 
*/
class Tests_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	//gets all from the database
	
	public function get_all_tests()
	{
		//SELECT * FROM `tests` join 
		//`units` on tests.`unit_id` = `units`.id 
		//join `programm_types` on tests.programm_type_id = `programm_types`.id WHERE 1 
		$this->db->select('*');
		//$this->db->from('tests');
		$this->db->join('units', 'units.unit_id = tests.unit_id');
		$this->db->join('programm_types', 'programm_types.programm_type_id = tests.programm_type_id');
		

		$this->db->where('tests.date_deleted', NULL);

		$this->db->order_by('test', 'asc'); 

		$q = $this->db->get('tests');

		$q_result = $q->result_array();

		return $q_result;

		
	}//end of get_all_tests()



//inserts single $program_type into database

	public function add_tests()
	{

		$data_test = array (
			'test' => $this->input->post('test'),
			'unit_id' => $this->input->post('unit'),
			'd_percent' => $this->input->post('d_percent'),
			'programm_type_id' => $this->input->post('programm_type'),

			);

		return $this->db->insert('tests', $data_test);

		
	}//end of add_program_types

	public function get_all_units() 
	{

		$this->db->where('date_deleted', NULL);
		$q = $this->db->get('units');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_units

	public function get_all_program_types()
	{

		$this->db->where('date_deleted', NULL);
		$q = $this->db->get('programm_types');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_program_types



	public function update_tests()
	{
		$this->test_id 	   = $this->input->post('test_id'); 	
		$this->test 	   = $this->input->post('test'); 	
		$this->unit_id    = $this->input->post('unit');
		
		$this->programm_type_id 	   = $this->input->post('programm_type'); 	
		$this->d_percent 	   = $this->input->post('d_percent'); 	

		$this->db->where('test_id', $this->test_id);

		$this->db->update('tests', $this);

	}//end of update_tests


	public function get_tests($test_id) 
	{

		

		$this->db->where('test_id', $test_id);
		$q = $this->db->get('tests');

		return $q->row_array();	

		

		
	}//end of get_unit


	public function get_program_tests($programm_type_id) 
	{		

		$this->db->where('programm_type_id', $programm_type_id);
		$q = $this->db->get('tests');

		return $q->result_array();	

		

		
	}//end of get_tests by program_type_id

	public function delete_tests($id)
	{

		$this->db->where('test_id', $id);
		$this->date_deleted = date('Y-m-d');

		$this->db->update('tests', $this);


		
	}//end of delete_tests



}