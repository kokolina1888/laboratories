<?php 

class User_model extends CI_Model {

	
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		

		$query = $this->db->get();

		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}//end of login

	public function get_all_users()
	{
		$this->db->where('date_deleted', NULL);
		$this->db->where('user_role', 'plain_user');
		$this->db->order_by('lab_name', 'asc'); 
		$q = $this->db->get('users');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_users

	public function add_new_user()
	{
		$user = array (
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'lab_name' => $this->input->post('lab_name'),
			'address' => $this->input->post('address')
			);

		return $this->db->insert('users', $user);


	}//end of add_new_user

	public function get_user($user_id)
	{

		$this->db->where('user_id', $user_id);
		$q = $this->db->get('users');

		return $q->row_array();

	}//end of get_user

	public function update_user()
	{
		$this->user_id   	= $this->input->post('user_id');
		$this->username    	= $this->input->post('username');
		$this->password	   	= $this->input->post('password'); 	
		$this->lab_name    	= $this->input->post('lab_name');
		$this->address    	= $this->input->post('address');


		$this->db->where('user_id', $this->user_id);

		$this->db->update('users', $this);


	}//end of update_user

	public function delete_user($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->date_deleted = date('Y-m-d');

		$this->db->update('users', $this);

	}//end of delete_user

	public function get_complex_info()
	{
		//SELECT * FROM `programm_dates` JOIN 
		//`programm_types` ON `programm_dates`.`programm_type_id` = `programm_types`.`programm_type_id` 
		//JOIN tests ON programm_types.programm_type_id = tests.programm_type_id
		$this->db->select('*');
		$this->db->where('programm_dates.date_deleted', NULL);
		$this->db->where('programm_types.date_deleted', NULL);
		$this->db->where('tests.date_deleted', NULL);
		$this->db->join('programm_types',  'programm_types.programm_type_id = programm_dates.programm_type_id');
		$this->db->join('tests', 'tests.programm_type_id = programm_types.programm_type_id');
		$query = $this->db->get('programm_dates');

		$q_result = $query->result_array();
		return $q_result;

// Produces:
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs.id



	}//end of get complex info

	public function add_user_programm()

	{
		$user_programm = array (
			'user_id' => $this->input->post('username'),
			'programm_type_id' => $this->input->post('programm_type')
			);

		return $this->db->insert('users_programm_dates_tests_evaluations', $user_programm);
	}

	public function get_additional_info($programm_type_id) 
	{

		$this->db->select('*');
		$this->db->where('programm_dates.date_deleted', NULL);
		$this->db->where('programm_types.date_deleted', NULL);
		$this->db->where('tests.date_deleted', NULL);
		$this->db->where('programm_dates.programm_type_id', $programm_type_id);
		$this->db->join('programm_types',  'programm_types.programm_type_id = programm_dates.programm_type_id');
		$this->db->join('tests', 'tests.programm_type_id = programm_types.programm_type_id');
		$query = $this->db->get('programm_dates');

		$q_result = $query->result_array();
		return $q_result;

	}//end of get_additional_info


}//end of user_model


?> 