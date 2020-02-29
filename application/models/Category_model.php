<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function addCategory($data){
		$this->db->insert('category', $data);
		return true;
	}

	public function getAllCategoryData(){
		$data=$this->db->get('category');
		return $data->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
     	$this->db->delete('category');
     	return true;
	}
	public function getCategoryById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		// $this->db->join('category', 'table.column = table.column', 'left');
     	$data=$this->db->get('category');
     	return $data->row_array();
	}
	public function editCategory($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('category', $data);
		return true;
	}
	function getImageName($id,$table){
                $this->db->select('category_img');
                $this->db->from($table);
                $this->db->where('id', $id);
                $rec = $this->db->get();
                return $rec->row_array();

        }
	

}
?>