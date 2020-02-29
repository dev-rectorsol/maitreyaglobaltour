<?php
class Web_model extends CI_Model {

	function tourCategory($table){
		$rec=$this->db->get($table);
		return $rec->result_array();
	}

	function tourData(){
		$this->db->select('*');
		$this->db->from('tour');
		$this->db->join('tour_img', 'tour.id = tour_img.tour_id');
		$this->db->join('feature_img', 'tour.id = feature_img.tour_id');
		$this->db->join('session', 'tour.session_id = session.id', 'left');
		$this->db->group_by('tour.id');
		$data=$this->db->get();
		return $data->result_array();
	}

	function byCategoryTourData($categoryName){
		$this->db->select('*');
		$this->db->where('category', $categoryName);
		$this->db->from('tour');
		$this->db->join('tour_img', 'tour.id = tour_img.tour_id');
		$this->db->group_by('tour.id');
		$data=$this->db->get();
		return $data->result_array();
	}
	
	function itineraryData($table,$tourId){
		$this->db->where('tour_id', $tourId);
		$rec=$this->db->get($table);
		return $rec->result_array();
	}
	function allMonthName(){
		$this->db->select('month_name');
		$this->db->order_by('id', 'asc');
		$month=$this->db->get('year');
		return $month->result_array();
	}
	function aboutData(){
		$this->db->select('*');
		$rec=$this->db->get('about');
		return $rec->row_array();
	}
	function tourTableData($tourId){
		$this->db->where('id', $tourId);
		$rec = $this->db->get('tour');
		return $rec->row_array();
	}
	function galleryImageById($tourId){
		$this->db->where('tour_id', $tourId);
		$rec = $this->db->get('tour_img');
		return $rec->result_array();
	}
	function featureImageById($tourId){
		$this->db->where('tour_id', $tourId);
		$rec = $this->db->get('feature_img');
		return $rec->result_array();
	}
	function review($tour_id){
		$this->db->select('*');
		$this->db->from('review_tb');
		$this->db->where('tour_id', $tour_id);
		$this->db->where('status', '1');
		$rec=$this->db->get();
		// print_r($this->db->last_query()); exit();
		return $rec->result_array();
	}
	function sliderData(){
		$this->db->select('*');
		$this->db->from('homeslider');
		$this->db->where('status', '1');
		$rec=$this->db->get();
		return $rec->result_array();

	}
}
