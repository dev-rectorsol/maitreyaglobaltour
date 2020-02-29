<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Gallery extends CI_Controller {
		
		public function __construct(){
			parent::__construct();
			// check_login_user();
			$this->load->model('common_model');
			$this->load->model('gallery_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
		}

		// public function index()
		// {
		// 	$data = array();
		// 	$data['page'] = 'Gallery';
		// 	$data['allCategoryData']=$this->common_model->select('gallerycategory');
		// 	// echo "<pre>";
	 //  //       print_r($data['allCategoryData']);
	 //  //       exit();
		// 	if ($_POST) {
		// 		$data = array(
		// 			'categoryName' => $_POST['categoryName']
		// 		);
		// 		// print_r($data); exit();
		// 		$status=$this->common_model->insert($data,'galleryCategory');
		// 			if ($status == true) {
		// 				$this->session->set_tempdata('success','Data Added Successfully...',2);
		// 				redirect(base_url('admin/Gallery'));
		// 			} else {
		// 				$this->session->set_tempdata('error','Sorry Try Again',2);
		// 				redirect(base_url('admin/Gallery'));
		// 			}
		// 	}
			
		// 	$data['main_content'] = $this->load->view('admin/galleryCategory', $data, TRUE);
	 //        $this->load->view('admin/index', $data);
		// }

		// public function edit($id)
		// {
		// 	// echo($id); exit();
		// 	$data = array();
		// 	$data['page'] = 'Edit About';
		// 	$data['editGallery'] = $this->common_model->select_option($id,'gallerycategory');
		// 	// echo "<pre>";
	 //  // 	    print_r($data['editGallery']);
	 //  //       exit();
		// 	if ($_POST) {
				
		// 		$data = array(
		// 			'aboutDesc'=> $_POST['aboutDesc'],
		// 			'image'=> $pic
		// 		);
		// 		$status=$this->common_model->update($data,$id,'about');
		// 			if ($status == true) {
		// 				$this->session->set_tempdata('change','Data Updated Successfully...',2);
		// 				redirect(base_url('admin/Galley'));
		// 			} else {
		// 				$this->session->set_tempdata('notChange','Sorry Try Again',2);
		// 				redirect(base_url('admin/Gallery'));
		// 			}
		// 	}
			
		// 	$data['main_content'] = $this->load->view('admin/editGalleryCategory', $data, TRUE);
	 //    	$this->load->view('admin/index', $data);
		// }


		// public function delete($id){
		// 	$status=$this->common_model->delete($id,'galleryCategory');
		// 	if ($status== true) {
		// 		$this->session->set_tempdata('change','Record Deleted Successfully...',2);
		// 		redirect(base_url('admin/Gallery'));
		// 	} 
		// 	else {
		// 		$this->session->set_tempdata('notChange','Sorry Try Again',2);
		// 		redirect(base_url('admin/Gallery'));
		// 	}
			
		// }

		public function addGallery(){
			$data = array();
			$data['page'] = 'Gallery Image';
			$data['galleryImg'] = $this->gallery_model->imgByGalleryCategoryId('galleryimage'); 
			// echo "<pre>";
	  // 	    print_r($data['galleryImg']);
	  //       exit();
			if ($_POST) {
					$config['upload_path']          = './uploads/galleryImg/';
					http://localhost/tour/uploads/galleryImg/images_(9).jpg
					$config['allowed_types']        = 'gif|jpg|png|jpeg';
					$config['max_size']             = 1024;
					$config['max_width']            = 1024;
					$config['max_height']           = 720;

					$this->load->library('upload', $config);
	                $this->upload->do_upload('image');
					$img=$this->upload->data();
	                // echo "<pre>";
	                // print_r($img);
	                // exit();
					$pic=$img['file_name'];
					$data = array(
						// 'galleryCategoryId'=> $id,
						'imgTitle'=> $_POST['imgTitle'],
						'image'=> $pic
					);
					$status=$this->common_model->insert($data,'galleryimage');
					if ($status == true) {
						$this->session->set_tempdata('success','Image Added Successfully...',2);
						redirect(current_url());
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(current_url());
					}
			}
			
			$data['main_content'] = $this->load->view('admin/galleryImage', $data, TRUE);
	    	$this->load->view('admin/index', $data);
		}
		public function deleteGalleryImage($id){
			$imageName = $this->gallery_model->getImageName($id,'galleryimage');
			// print_r($_SERVER['DOCUMENT_ROOT']); exit();

			// unlink($_SERVER['DOCUMENT_ROOT'] . "/uploads/galleryImg"/.$imageName['image']);
			 // print_r(base_url("uploads/galleryImg/".$imageName['image']));
			 unlink("uploads/galleryImg/".$imageName['image']);
		// exit();
			$status=$this->gallery_model->deleteGalleryImage($id,'galleryimage');
			if ($status== true) {
				$this->session->set_tempdata('delete','Image Deleted Successfully...',2);
				redirect(base_url('admin/Gallery/addGallery/'));
			} 
			else {
				$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
				redirect(base_url('admin/Gallery/addGallery/'));
			}	
		}
		public function editGalleryImage($id)
		{
			$data = array();
			$data['page'] = 'Edit Gallery Image';
			$data['editGalleryImage'] = $this->common_model->select_option($id,'galleryimage');
			if ($_POST) {
					$config['upload_path']          = './uploads/galleryImg/';
					$config['allowed_types']        = 'gif|jpg|png|jpeg';
					$config['max_size']             = 1024;
					$config['max_width']            = 1024;
					$config['max_height']           = 720;

					$this->load->library('upload', $config);
	                $this->upload->do_upload('image');
					$img=$this->upload->data();
					$pic=$img['file_name'];
					if (!empty($pic)) {
						$data = array(
						'imgTitle'=> $_POST['imgTitle'],
						'image'=> $pic
					);
						$status=$this->common_model->update($data,$id,'galleryimage');
					} else {
						$data = array(
						'imgTitle'=> $_POST['imgTitle']
					);
						$status=$this->common_model->update($data,$id,'galleryimage');
					}				
					if ($status == true) {
						$this->session->set_tempdata('change','Data Updated Successfully...',2);
						redirect(base_url('admin/gallery/addGallery'));
					} else {
						$this->session->set_tempdata('notChange','Sorry Try Again',2);
						redirect(base_url('admin/gallery/addGallery'));
					}
			}
			
			$data['main_content'] = $this->load->view('admin/editGalleryImage', $data, TRUE);
	    	$this->load->view('admin/index', $data);
		}
	
	}
	
	/* End of file Gallery.php */
	/* Location: ./application/controllers/admin/Gallery.php */
 ?>