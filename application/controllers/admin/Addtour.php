<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addtour extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('category_model');
        $this->load->model('tour_model');
        $this->load->model('session_model');
        $this->load->model('web_model');
        if(!$this->session->userdata('id')){
          redirect(base_url() . 'auth', 'refresh');
        }
    }
	public function index(){
		$data = array();
		$data['page'] = 'Add Tour';
		$data['categoryData']=$this->category_model->getAllCategoryData();
		$data['session']=$this->session_model->allSession();
			if ($_POST) {
				$tourData = array(
					'title' => $_POST['title'],
					'content' => $_POST['content1'],
					'category' => $_POST['category'],
					'totalDaysNight' => $_POST['totalDaysNight'],
					'session_id' => $_POST['session_id']
				);
				// echo "<pre>";
				// print_r($_POST); exit();
				$tour_id=$this->tour_model->addTour($tourData);
				// if (is_array($_POST['Itinerary'])) {
				// 	foreach ($_POST['Itinerary'] as $value) {
				// 		$Itinerarydata=array(
				// 			'day'=>$value['day'],
				// 			'content'=>$value['content'],
				// 			'tour_id' => $tour_id
				// 		);
				// 		$this->tour_model->addItinerary($Itinerarydata);
				// 	}
				// }
				if (is_array($_POST)) {
					$count = 0;
					for($i = 0; $i < count($_POST['day']); $i++){
						$Itinerarydata = array(
							'day' => $_POST['day'][$i],
							'content' => $_POST['content'][$i],
							'tour_id' => $tour_id
						);
						// print_r($Itinerarydata);
						$this->tour_model->addItinerary($Itinerarydata);
					}
				}

				$config['upload_path']          = './uploads/tourImg/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 720;

				$this->load->library('upload', $config);
	            $this->upload->do_upload('featureImg');
	            $img=$this->upload->data();
				$pic=$img['file_name'];

				$dataInfo = array();
			    $files = $_FILES;
			    $cpt = count($_FILES['galleryImg']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			        $_FILES['galleryImg']['name']= $files['galleryImg']['name'][$i];
			        $_FILES['galleryImg']['type']= $files['galleryImg']['type'][$i];
			        $_FILES['galleryImg']['tmp_name']= $files['galleryImg']['tmp_name'][$i];
			        $_FILES['galleryImg']['error']= $files['galleryImg']['error'][$i];
			        $_FILES['galleryImg']['size']= $files['galleryImg']['size'][$i];    

			        $this->upload->do_upload('galleryImg');
			        $dataInfo[] = $this->upload->data();
			    }
			    $data=array(
					'tour_id'=> $tour_id,
					'image'=>$pic
				);

				$this->tour_model->addFeatureImg($data);

			    foreach ($dataInfo as $value) {
			    	$allImg=array(
			    		'tour_id'=> $tour_id,
			    		'galleryImg'=>$value['file_name'],
			    		

			    	);
					$status=$this->tour_model->addAllImg($allImg);
				}
				if ($status == true) {
						$this->session->set_tempdata('success','Tour Details Added Successfully...',2);
						redirect(current_url());
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(current_url());
					}				
			}

        $data['main_content'] = $this->load->view('admin/addTour', $data, TRUE);
	    $this->load->view('admin/index', $data);
	}

	public function tourList()
	{
		$data = array();
		$data['page'] = 'Tour List';
		$data['allTourData']=$this->tour_model->allTourData();

		$data['main_content'] = $this->load->view('admin/tourList', $data, TRUE);
	    $this->load->view('admin/index', $data);

	}
	public function AddGalleryImage()
	{

		$id=$_POST['tourId'];
		$config['upload_path']          = './uploads/tourImg/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 720;

				$this->load->library('upload', $config);
	            $this->upload->do_upload('featureImg');
	            $img=$this->upload->data();
				$pic=$img['file_name'];

				$dataInfo = array();
			    $files = $_FILES;
			    $cpt = count($_FILES['galleryImg']['name']);
			    for($i=0; $i<$cpt; $i++)
			    {           
			        $_FILES['galleryImg']['name']= $files['galleryImg']['name'][$i];
			        $_FILES['galleryImg']['type']= $files['galleryImg']['type'][$i];
			        $_FILES['galleryImg']['tmp_name']= $files['galleryImg']['tmp_name'][$i];
			        $_FILES['galleryImg']['error']= $files['galleryImg']['error'][$i];
			        $_FILES['galleryImg']['size']= $files['galleryImg']['size'][$i];    

			        $this->upload->do_upload('galleryImg');
			        $dataInfo[] = $this->upload->data();
			    }
			    
			    foreach ($dataInfo as $value) {
			    	$allImg=array(
			    		'tour_id'=>$id ,
			    		'galleryImg'=>$value['file_name'],
			    		

			    	);
					$status=$this->tour_model->addAllImg($allImg);
				}
					if ($status == true) {
						$this->session->set_tempdata('success','Image Added Successfully...',2);
					redirect(base_url('admin/Addtour/tourEdit/').$id);
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(base_url('admin/Addtour/tourEdit/').$id);
					}	
	}

		public function tourImageUpdate(){
			
					
				
					

		}

	public function tourEdit($tourId)
	{
		$data = array();
		$data['page'] = 'Edit Tour';
		$data['session']=$this->session_model->allSession();
		$data['tourData']=$this->tour_model->tourDataById($tourId);
		$data['categoryData']=$this->category_model->getAllCategoryData();
		$data['itineraryData']=$this->tour_model->itineraryDataById($tourId);
		$data['galleryImage'] = $this->web_model->galleryImageById($tourId);
		$data['featureImage'] = $this->web_model->featureImageById($tourId);
		// echo "<pre>";
		// print_r($data['itineraryData']);
		// print_r($data['galleryImage']); 
		// exit();		
		$data['main_content'] = $this->load->view('admin/editTour', $data, TRUE);
	    $this->load->view('admin/index', $data);
	}
	public function delete($id){
		$status=$this->tour_model->delete($id);
		if ($status == true) {
			$this->session->set_tempdata('delete','Record Deleted Successfully...',2);
			redirect(base_url('admin/Addtour/tourList'));
		} 
		else {
			$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
			redirect(base_url('admin/Addtour/tourList'));
		}
			
	}

	public function deleteImage(){
		
		$id =$_POST['tourId'];
		$filename=$_POST['file'];
		
		if(unlink("uploads/TourImg/".$filename)){
			$status=$this->tour_model->deleteTourImg($filename,$id);
		if ($status == true) {
				$this->session->set_tempdata('delete','Record Deleted Successfully...',2);
				
				
			} else {
			$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
			
				
			}
		}else {
			$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
		
			}
			
	
				
		
		


	}
	public function updateTour($id){
		$id=$_POST['tourId'];
		
		
			$tourData = array(
				'title' => $_POST['title'],
				'content' => $_POST['tourcontent'],
				'category' => $_POST['category'],
				'totalDaysNight' => $_POST['totalDaysNight'],
				'session_id' => $_POST['session_id']
			);
			$status[]=$this->tour_model->updateTour($id,$tourData);
		
			
			$count = 0;
			$data = $this->security->xss_clean($_POST);
			for($i = 0; $i < count($data['day']); $i++){
				$itineraryId = $data['itineraryId'][$i];
				$update = array(
					'day' => $data['day'][$i],
					'content' => $data['content'][$i]
				);
				$status[]=$this->tour_model->updateItineraryById($itineraryId,$update);
				}
			
			if($_POST['featureImg']){

			
				
				$oldImg= $_POST['oldpic'];
				$config['upload_path']          = './uploads/tourImg/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 720;

				$this->load->library('upload', $config);
	            $this->upload->do_upload('featureImg');
	            $img=$this->upload->data();
				$pic=$img['file_name'];
				$allImg=array(
			    		
			    		'image'=>$pic,
			    
					);
					if(unlink('uploads/tourImg/'.$oldImg)){
						$status[]=$this->tour_model->UpdateFeature($id,$allImg);
					if ($status[2] == true) {
						$this->session->set_tempdata('Updated','Record Updated Successfully...',2);
						redirect(base_url('admin/Addtour/tourEdit/').$id);
					} 
					else {
						$this->session->set_tempdata('Not_Updated','Sorry Try Again',2);
						redirect(base_url('admin/Addtour/tourEdit/').$id);
					}
					}else {
						$this->session->set_tempdata('File_Not_delete','Sorry!! File could not be deleted',2);
						redirect(base_url('admin/Addtour/tourEdit/').$id);
					}
				}
			if ($status[0] == true && $status[1]== true) {
						$this->session->set_tempdata('Updated','Record Updated Successfully...',2);
						redirect(base_url('admin/Addtour/tourEdit/').$id);
					} 
					else {
						$this->session->set_tempdata('Not_Updated','Sorry Try Again',2);
						redirect(base_url('admin/Addtour/tourEdit/').$id);
					}
			
		
	}

	

	


	public function addMoreItinerary($tour_id){
		if (is_array($_POST)) {
			$data = $this->security->xss_clean($_POST);
			for($i = 0; $i< count($_POST['day']); $i++){
				if($data['day'][$i]!="")
				{
					$update = array(
					'day' => $data['day'][$i],
					'content' => $data['content'][$i],
					'tour_id' => $tour_id
					);
				$status=$this->tour_model->addItinerary($update);
				}
				
			}

			if ($status == true) {
					$this->session->set_tempdata('success','Added Successfully...');
					redirect(base_url('admin/Addtour/tourEdit/').$tour_id);
				} 
				else {
					$this->session->set_tempdata('error','Sorry Try Again');
					redirect(base_url('admin/Addtour/tourEdit/').$id);
				}
		}
	}

	public function deleteItinerary($id,$tourId){
		$data = array();
		$status=$this->tour_model->deleteItinerary($id);
		if($status == true){
			redirect(base_url('admin/Addtour/tourEdit/').$tourId,'refresh');
		}

	}
	

}
