<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

        class Gallery_model extends CI_Model {

	function imgByGalleryCategoryId($table){
		$this->db->select('*');
        $this->db->from($table);
        // $this->db->where('galleryCategoryId', $id);
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
	}

	function deleteGalleryImage($id,$table){
        $this->db->where('id', $id);
        $this->db->delete($table);
        return true;
	}
        function getImageName($id,$table){
                $this->db->select('image');
                $this->db->from($table);
                $this->db->where('id', $id);
                $rec = $this->db->get();
                return $rec->row_array();

        }

}

/* End of file Gallery_model.php */
/* Location: ./application/models/Gallery_model.php */ ?>