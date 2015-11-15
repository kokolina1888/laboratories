<?php
class Messages_model extends CI_Model {

	public function get_all_messages()
	{
		$this->db->order_by("date_published", "desc");
		$q = $this->db->get('messages', 3);
		return $q->result_array();
	}
	// Read ALL Messages from database
	// Starts from M>C>V

	public function get_single_message($message_id)
	{
		$this->db->where('id', $message_id);
		$q = $this->db->get('messages');
		return $q->row_array();
	}
	// Read Single Message from database
	// Starts from M>C>V

	public function add_message()
	{
		$message = array(
			'message_title' => $this->input->post('title'),
			'message_text' => $this->input->post('text'),
			'publisher' => $this->input->post('publisher'),
			'date_published' => $this->input->post('date')
			// name in db                   //name in form
		);

		return $this->db->insert('messages', $message);
	} //


	public function update_messages()
	{
		$this->message_title = $this->input->post('message_title');
		$this->id = $this->input->post('id');

		$this->db->where('id', $this->id);
		$this->db->update('messages', $this);
	}//end of update_programm_types

	public function get_messages($id) 
	{

		$this->db->where('id', $id);
		$q = $this->db->get('messages');
		
		return $q->row_array();
	}//end of get_unit

	public function delete_message($id)
	{
		$this->db->where('id', $id);
		$this->date_deleted = date('Y-m-d');
		
		$this->db->update('messages', $this);
		
	}
}
?>
