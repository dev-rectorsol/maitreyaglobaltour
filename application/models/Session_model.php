<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Session_model extends CI_Model {
	
		function addSession($data){
			$this->db->insert('session', $data);
			return true;
		}
		
		function allSession()
		{
			$this->db->select('*');
			$data=$this->db->get('session');
			return $data->result_array();
		}
		public function delete($id)
		{
			$this->db->where('id', $id);
	     	$this->db->delete('session');
	     	return true;
		}
	
	}
	
	/* End of file Session_model.php */
	/* Location: ./application/models/Session_model.php */
 ?>