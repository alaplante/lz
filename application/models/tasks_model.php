<?php 

class tasks_model extends CI_Model {

	function get_tasks(){
		$query = $this->db->get('tasks');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function add_task($data){
		$this->db->insert('tasks', $data);
	}
	
	function update_task($data){
		$this->db->where('id', $data->id);
		$this->db->update('tasks', $data);
	}

	function delete_task($id){
		$this->db->where('id', $id);
		$this->db->delete('tasks');
	}


}
