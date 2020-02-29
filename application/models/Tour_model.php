<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Tour_model extends CI_Model {

		public function addTour($tourData){
			$this->db->insert('tour', $tourData);
			return $this->db->insert_id();
		}

		public function addItinerary($Itinerarydata){
			$this->db->insert('itinerary', $Itinerarydata);
			return true;
		}
		public function addAllImg($allImg){
			$this->db->insert('tour_img', $allImg);
			return true;
		}
		public function addFeatureImg($data){
			$this->db->insert('feature_img', $data);
			return true;
		}
		public function allTourData(){
			$this->db->select('tour.id,tour.title,tour.category,feature_img.image,tour.created_date,session.sessionName,session.startingDate,session.endingDate');
			$this->db->from('tour');
			$this->db->join('tour_img', 'tour.id = tour_img.tour_id');
			$this->db->join('feature_img', 'tour.id = feature_img.tour_id');
			$this->db->join('session', 'tour.session_id = session.id');
			$this->db->group_by('tour.id');
			$data=$this->db->get();
			// print_r($this->db->last_query()); exit();
			return $data->result_array();
		}
		public function delete($id)
		{
			$sql = "DELETE tour, tour_img, itinerary FROM tour  INNER JOIN tour_img ON tour.id = tour_img.tour_id INNER JOIN itinerary ON tour.id = itinerary.tour_id WHERE tour.id = " . $id;
			$this->db->query($sql);
			return true;
		}
		public function deleteTourImg($file,$id)
		{
			$this->db->where('galleryImg', $file);
			$this->db->where('tour_id', $id);
			 $this->db->delete("tour_img");
       		 return true;
		}
		public function tourDataById($tourId){
			$this->db->select('*');
			$this->db->from('tour');
			$this->db->where('id', $tourId);
			// $this->db->group_by('tour.id');
			$rec=$this->db->get();
			return $rec->row_array();
			// echo $this->db->last_query(); exit;
			// print_r($tourId); exit(); 

		}
		public function itineraryDataById($tourId){
			$this->db->select('*');
			$this->db->from('itinerary');
			$this->db->where('tour_id', $tourId);
			// $this->db->group_by('tour.id');
			$rec=$this->db->get();
			return $rec->result_array();
			// echo $this->db->last_query(); exit;
			// print_r($tourId); exit(); 

		}
		function updateTour($id,$tourData){
			$this->db->where('id', $id);
			$this->db->update('tour', $tourData);
			return true;
		}
		function UpdateFeature($id,$tourData){
			$this->db->where('tour_id', $id);
			$this->db->update('feature_img', $tourData);
			return true;
		}
		function deleteItinerary($id){
			$this->db->where('id', $id);
			$this->db->delete('itinerary');
			
			return true;
		}

		function updateItineraryById($itineraryId,$data){
			$this->db->where('id', $itineraryId);
			$this->db->update('itinerary', $data);
			return true;
		}

	
	}
	
	/* End of file Tour_model.php */
	/* Location: ./application/models/Tour_model.php */
 ?>



<!-- DELETE tour, tour_img, itinerary FROM tour  INNER JOIN tour_img ON tour.id = tour_img.tour_id INNER JOIN `itinerary` ON tour.id = itinerary.tour_id WHERE tour.id=7 -->

<!--  DELETE tour.*, tour_img.*,itinerary.*
   FROM tour
        INNER JOIN tour_img ON tour.id = tour_img.tour_id INNER JOIN itinerary ON tour.id = itinerary.tour_id 
  WHERE (tour.id)='5'; -->