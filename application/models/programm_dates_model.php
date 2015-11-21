<?php 

class Programm_dates_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_programm_dates()
	{
	//SELECT * FROM `programm_dates` JOIN `programm_types` 
	//ON `programm_dates`.`programm_type_id`= `programm_types`.`id` 
		$this->db->select('*');
		
		$this->db->join('programm_types', 'programm_types.programm_type_id = programm_dates.programm_type_id');
		$this->db->where('programm_dates.date_deleted', NULL);
		$this->db->order_by('cicle', 'desc');
		$q = $this->db->get('programm_dates');

		$result = $q->result_array();

		return $result;

	}//end of get_all_programm_dates

	public function get_programm_dates($program_type_id)
	{
	
		$this->db->select('*');
		
		$this->db->join('programm_types', 'programm_types.programm_type_id = programm_dates.programm_type_id');
		$this->db->where('programm_dates.date_deleted', NULL);
		$this->db->where('programm_dates.programm_type_id', $program_type_id);

		$this->db->order_by('cicle', 'asc');

		$q = $this->db->get('programm_dates');

		$result = $q->result_array();

		return $result;

	}//end of get_all_programm_dates


	public function get_all_program_types()
	{

		$this->db->where('date_deleted', NULL);
		$q = $this->db->get('programm_types');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_program_types

	public function add_programm_date()

	{

		$data_programm_dates = array (
			'programm_type_id' => $this->input->post('programm_type_id'),
			'cicle' => $this->input->post('cicle'),
			'date_analyse' => $this->input->post('date_analyse'),
			'date_final' => $this->input->post('date_final'),

			);

		return $this->db->insert('programm_dates', $data_programm_dates);
		
	}//end of add_program_types


	public function get_programm_date($programm_date_id)
	{

		$this->db->where('programm_date_id', $programm_date_id);
		$q = $this->db->get('programm_dates');
		$result = $q->row_array();

		return $result;
	}//get_programm_date
	
	public function update_programm_date()
	{
		$this->programm_date_id	   = $this->input->post('programm_date_id'); 	
		$this->programm_type_id 	   = $this->input->post('programm_type_id'); 	
		$this->cicle    = $this->input->post('cicle');
		$this->probe_number    = $this->input->post('probe_number');
		$this->date_analyse    = $this->input->post('date_analyse');
		$this->date_final    = $this->input->post('date_final');
		
		$this->db->where('programm_date_id', $this->programm_date_id);

		$this->db->update('programm_dates', $this);

	}//end of update_programm_types

	public function delete_programm_date($programm_date_id)
	{

		$this->db->where('programm_date_id', $programm_date_id);
		$this->date_deleted = date('Y-m-d');
		
		$this->db->update('programm_dates', $this);

	}//end of delete_programm_date

}

