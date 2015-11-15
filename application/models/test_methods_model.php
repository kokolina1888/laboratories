<?php 

/**
* 
*/
class Test_methods_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_test_methods()
	{
		$this->db->select('*');
		//SELECT * FROM `tests_methods` JOIN `tests` ON 
		//`tests_methods`.`test_id` = `tests`.`test_id` 
		//JOIN `methods` ON `tests_methods`.`method_id` = `methods`.`method_id` 
		
		$this->db->join('tests', 'tests.test_id = tests_methods.test_id');
		$this->db->join('methods', 'methods.method_id = tests_methods.method_id');
		$this->db->where('tests_methods.date_deleted', NULL);

		
		$this->db->order_by('test', 'asc'); 
		$q = $this->db->get('tests_methods');

		$result = $q->result_array();

		return $result;

	}//end of

	public function get_single_test_methods($test_id)
	{
		$this->db->select('*');
		//SELECT * FROM `tests_methods` JOIN `tests` ON 
		//`tests_methods`.`test_id` = `tests`.`test_id` 
		//JOIN `methods` ON `tests_methods`.`method_id` = `methods`.`method_id` 
		
		$this->db->join('tests', 'tests.test_id = tests_methods.test_id');
		$this->db->join('methods', 'methods.method_id = tests_methods.method_id');
		$this->db->where('tests_methods.test_id', $test_id);
		$this->db->where('tests_methods.date_deleted', NULL);

		
		$this->db->order_by('test', 'asc'); 
		$q = $this->db->get('tests_methods');

		$result = $q->result_array($test_id);

		return $result;
	}//end of

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

	public function get_all_methods()
	{
		$this->db->where('date_deleted', NULL);
		$this->db->order_by('method', 'asc');
		$q = $this->db->get('methods');
		$result = $q->result_array();

		return $result;
	}//end of get_all_methods

	public function add_test_method()
	{
		$data_tests_methods = array (
			'test_id' => $this->input->post('test'),
			'method_id' => $this->input->post('method'),
			
			);

		return $this->db->insert('tests_methods', $data_tests_methods);


	}//end of add_test_method

	public function get_test_method($test_id)

	{

		$this->db->select('*');
		//SELECT * FROM `tests_methods` JOIN `tests` ON 
		//`tests_methods`.`test_id` = `tests`.`test_id` 
		//JOIN `methods` ON `tests_methods`.`method_id` = `methods`.`method_id` 
		
		$this->db->join('tests', 'tests.test_id = tests_methods.test_id');
		$this->db->where('tests_methods.test_method_id', $test_id);
		$this->db->where('tests_methods.date_deleted', NULL);
		
		$q = $this->db->get('tests_methods');

		$result = $q->row_array($test_id);

		return $result;
	}//end of get_test_method


//displays single row from db about test an its method
	public function get_single_info_test($test_method_id)
	{
		$this->db->select('*');
		//SELECT * FROM `tests_methods` JOIN `tests` ON 
		//`tests_methods`.`test_id` = `tests`.`test_id` 
		//JOIN `methods` ON `tests_methods`.`method_id` = `methods`.`method_id` 
		
		$this->db->join('tests', 'tests.test_id = tests_methods.test_id');
		$this->db->join('methods', 'methods.method_id = tests_methods.method_id');
		$this->db->where('tests_methods.test_method_id', $test_method_id);
		$this->db->where('tests_methods.date_deleted', NULL);
		
		$q = $this->db->get('tests_methods');

		$result = $q->row_array();

		return $result;

	}//end of

	public function update_test_method()

	{

		$this->test_method_id 	   = $this->input->post('test_method_id'); 	
		$this->test_id 	   = $this->input->post('test'); 	
		$this->method_id    = $this->input->post('method');
		
		
		$this->db->where('test_method_id', $this->test_method_id);

		$this->db->update('tests_methods', $this);

	}//end of update_test_method

	public function delete_test_method($test_method_id)

	{
		$this->db->where('test_method_id', $test_method_id);
		$this->date_deleted = date('Y-m-d');

		$this->db->update('tests_methods', $this);



	}//end of delete_test_method







}