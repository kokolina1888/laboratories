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
	}//end of add_user_programm

	public function add_user_programm_additional_info($user_id, $programm_type_id)
	{

		$this->db->where('user_id', $user_id);
		$this->db->where('programm_type_id', $programm_type_id);

		$this->programm_date_id = $this->input->post('programm_date');

		$this->db->update('users_programm_dates_tests_evaluations', $this);


	}//end of add_user_programm_additional_info

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

	public function final_complex_info()
	{

		$tests = $this->input->post('test');
		$count_tests = count($tests);


		for ($i=0; $i < $count_tests; $i++) { 	


			$this->user_id   	= $this->input->post('user_id');
			$this->programm_type_id 	= $this->input->post('programm_type_id');
			$this->programm_date_id   	= $this->input->post('programm_date_id');	
			$this->test_id    	= $this->input->post("test[$i]");
			$this->db->insert('users_programm_dates_tests_evaluations', $this);
		}
		

	}//end of final_complex_info


//GETS USERS PARTICIPATING IN A PROGRAM
	public function get_users_programs($program_date_id, $programm_type_id)
	{
		$this->db->select('*');
		$this->db->where('users_programm_dates_tests_evaluations.date_deleted', NULL);
		$this->db->where('users_programm_dates_tests_evaluations.programm_date_id', $program_date_id);
		$this->db->where('users_programm_dates_tests_evaluations.programm_type_id', $programm_type_id);
		$this->db->join('users', 'users.user_id=users_programm_dates_tests_evaluations.user_id');
		$this->db->join('tests', 'tests.test_id = users_programm_dates_tests_evaluations.test_id');

		$query = $this->db->get('users_programm_dates_tests_evaluations');

		$q_result = $query->result_array();

		return $q_result;

	}

//GETS PROGRAMS FOR A USER

	public function get_user_programs($user_id)
	{
		$this->db->select('*');
		$this->db->where('users_programm_dates_tests_evaluations.user_id', $user_id);
		$this->db->where('users_programm_dates_tests_evaluations.date_deleted', NULL);

		$this->db->join('programm_dates', 'programm_dates.programm_date_id = users_programm_dates_tests_evaluations.programm_date_id');
		$this->db->join('programm_types', 'programm_types.programm_type_id = users_programm_dates_tests_evaluations.programm_type_id');

		$query = $this->db->get('users_programm_dates_tests_evaluations');

		$q_result = $query->result_array();

		return $q_result;

	}

	//GETS PROGRAM DATES FOR A USER

	public function get_user_programdates($user_id, $program_type_id)
	{
		$this->db->select('*');
		$this->db->where('users_programm_dates_tests_evaluations.user_id', $user_id);
		$this->db->where('users_programm_dates_tests_evaluations.programm_type_id', $program_type_id);

		$this->db->where('users_programm_dates_tests_evaluations.date_deleted', NULL);

		$this->db->join('programm_dates', 'programm_dates.programm_date_id = users_programm_dates_tests_evaluations.programm_date_id');
		$this->db->join('programm_types', 'programm_types.programm_type_id = users_programm_dates_tests_evaluations.programm_type_id');

		$query = $this->db->get('users_programm_dates_tests_evaluations');

		$q_result = $query->result_array();

		return $q_result;

	}

//GETS PROGRAM BY DATE, TYPE AND USER ID

	public function get_user_program($programm_type_id, $programm_date_id, $user_id)
	{
		$this->db->select('*');
		$this->db->where('users_programm_dates_tests_evaluations.date_deleted', NULL);
		$this->db->where('users_programm_dates_tests_evaluations.programm_date_id', $programm_date_id);
		$this->db->where('users_programm_dates_tests_evaluations.programm_type_id', $programm_type_id);
		$this->db->where('users_programm_dates_tests_evaluations.user_id', $user_id);

		$this->db->join('users', 'users.user_id=users_programm_dates_tests_evaluations.user_id');
		$this->db->join('tests', 'tests.test_id = users_programm_dates_tests_evaluations.test_id');
		$this->db->join('programm_dates', 'programm_dates.programm_date_id = users_programm_dates_tests_evaluations.programm_date_id');
		$this->db->join('programm_types', 'programm_types.programm_type_id = users_programm_dates_tests_evaluations.programm_type_id');
		

		$query = $this->db->get('users_programm_dates_tests_evaluations');

		$q_result = $query->result_array();

		return $q_result;




}//end of user_model

//UPDATES USER`S PROGRAM, ONLY UPDATES THE CHOSEN TESTS

public function final_update()

{

	$tests 				= $this->input->post('test');
	$count_tests 		= count($tests);
	$user_id = $this->input->post('user_id');
	$programm_type_id 	= $this->input->post('programm_type_id');
	$programm_date_id 	= $this->input->post('programm_date_id');

		//SET DATE DELETED TO ALL RECORDS WITH USER_id, program_id, date_id 


	$this->db->where('user_id', $user_id);
	$this->db->where('programm_type_id', $programm_type_id);
	$this->db->where('programm_date_id', $programm_date_id);

	$this->date_deleted = date('Y-m-d');

	$this->db->update('users_programm_dates_tests_evaluations', $this);

		//AFTER THAT INSERT THE NEW RECORDS 


	for ($i=0; $i < $count_tests; $i++) { 	

//RHIS IS ABOUT DB TABLE

		$this->user_id   			= $user_id;
		$this->programm_type_id 	= $programm_type_id;
		$this->programm_date_id   	= $programm_date_id;	
		$this->test_id       		= $tests[$i];
		$this->date_deleted 		= NULL;
		$this->db->insert('users_programm_dates_tests_evaluations', $this);
	}


	}//end of final_update

	public function update_program_test_records()
	{
		$user_id 				= $this->session->userdata['logged_in']['user_id'];
		$programm_type_id		= $this->input->post('programm_type_id');
		$programm_date_id		= $this->input->post('programm_date_id');
		$date_value_added		= $this->input->post('date_value_added');
		$test_id 				= $this->input->post('test_id');

		$count 					= count($test_id); 
		$test_value 			= $this->input->post('test_value');
		$method_id				= $this->input->post('methods');
		

		for ($i=0; $i < $count; $i++) 
		{
			$this->db->where('user_id', $user_id);
			$this->db->where('programm_type_id', $programm_type_id);
			$this->db->where('programm_date_id', $programm_date_id);

			$this->db->where('date_deleted', NULL);
			$this->db->where('test_id', $test_id[$i]);

				$this->method_id 		= $method_id[$i];
				$this->test_value 		= $test_value[$i];
				$this->date_value_added 	= $date_value_added;

				$this->db->update('users_programm_dates_tests_evaluations', $this);

			}

	}//end of update_program_test_records

	public function delete_users_program($programm_type_id, $programm_date_id, $user_id)

	{

		//SET DATE DELETED TO ALL RECORDS WITH USER_id, program_id, date_id 


		$this->db->where('user_id', $user_id);
		$this->db->where('programm_type_id', $programm_type_id);
		$this->db->where('programm_date_id', $programm_date_id);

		$this->date_deleted = date('Y-m-d');

		$this->db->update('users_programm_dates_tests_evaluations', $this);
	}//end of delete_users_program

	//INSERTS USERS VALUES IN THE LAST TABLE

	public function add_data_final()
	{
		$user_id 			= $this->session->userdata['logged_in']['user_id'];
		
		$test_id 			= $this->input->post('test_id');
		$count_tests 		= count($test_id);
		
		$programm_type_id 	= $this->input->post('programm_type_id');
		$programm_date_id 	= $this->input->post('programm_date_id');
		$test_values 		= $this->input->post('test_value');
		$test_method 		= $this->input->post('methods');
		$date 				= date('Y-m-d');

		
		for ($i=0; $i <$count_tests ; $i++) { 
			$this->db->where('user_id', $user_id);
			$this->db->where('programm_type_id', $programm_type_id);
			$this->db->where('programm_date_id', $programm_date_id);
			
			
			$this->db->where('test_id', $test_id[$i]);


			$this->test_value 			= $test_values[$i];
			$this->method_id 			= $test_method[$i];
			$this->date_value_added 	= $date;

			$this->db->update('users_programm_dates_tests_evaluations', $this);
		}
		


	}//end of add_data_final()

}//end of user_model


