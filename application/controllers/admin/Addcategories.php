<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Addcategories extends CI_Controller {
		public function __construct(){
			parent::__construct();
			// check_login_user();
			$this->load->model('common_model');
			$this->load->model('category_model');
			$this->load->model('gallery_model');
			if(!$this->session->userdata('id')){
          redirect(base_url() . 'auth', 'refresh');
        }
		}
		public function index(){
			$data = array();
			$data['page'] = 'Add Categories';
			$data['categoryData']=$this->category_model->getAllCategoryData();
				if ($_POST) {
					$config['upload_path']          = './uploads/categoryImg/';
					$config['allowed_types']        = 'gif|jpg|png|jpeg';
					$config['max_size']             = 1024;
					$config['max_width']            = 1024;
					$config['max_height']           = 720;

					$this->load->library('upload', $config);
	                $this->upload->do_upload('categoryImg');
					$img=$this->upload->data();
	                // echo "<pre>";
	                // print_r($img);
	                // exit();
					$pic=$img['file_name'];
					$data = array(
						'parent_id'=> $_POST['parent_id'],
						'category_name'=> $_POST['category_name'],
						'category_img'=> $pic
					);
					$status=$this->category_model->addCategory($data);
					if ($status == true) {
						$this->session->set_tempdata('success','Category Added Successfully...',2);
						redirect(base_url('admin/Addcategories'));
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(base_url('admin/Addcategories'));
					}	
				}
				
				$data['main_content'] = $this->load->view('admin/addCategoriess', $data, TRUE);
				$this->load->view('admin/index', $data);
		}
		public function delete($id){
			$imageName = $this->category_model->getImageName($id,'category');
			// print_r($imageName); exit();
			unlink("uploads/categoryImg/".$imageName['category_img']);
			$status=$this->category_model->delete($id);
			if ($status== true) {
				$this->session->set_tempdata('delete','Record Deleted Successfully...',2);
				redirect(base_url('admin/Addcategories'));
			} 
			else {
				$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
				redirect(base_url('admin/Addcategories'));
			}
			
		}
		public function edit($id){
			$data = array();
			$data['page'] = 'Edit Category';
			$data['category']=$this->category_model->getCategoryById($id);
			$data['categoryData']=$this->category_model->getAllCategoryData();
			if ($_POST) {
				$config['upload_path']          = './uploads/categoryImg/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 720;

				$this->load->library('upload', $config);
	               $this->upload->do_upload('categoryImg');
				$img=$this->upload->data();
	               // echo "<pre>";
	               // print_r($img);
	               // exit();
				$pic=$img['file_name'];
				$data = array(
					'parent_id'=> $_POST['parent_id'],
					'category_name'=> $_POST['category_name'],
					'category_img'=> $pic
				);
				$status=$this->category_model->editCategory($id,$data);
				if ($status == true) {
					$this->session->set_tempdata('success','Category Edit Successfully...',2);
					redirect(current_url());
				} else {
					$this->session->set_tempdata('error','Sorry Try Again',2);
					redirect(current_url());
				}
			}
			$data['main_content'] = $this->load->view('admin/editCategory', $data, TRUE);
			$this->load->view('admin/index', $data);
			
		}
		// public function updateEditData($id){
		// 	if ($_POST) {
		// 		$data = array(
		// 			'parent_id'=> $_POST['parent_id'],
		// 			'category_name'=> $_POST['category_name']
		// 		);
		// 		$status=$this->category_model->editCategory($id,$data);
		// 		if ($status == true) {
		// 			$this->session->set_tempdata('success','Category Edit Successfully...',2);
		// 			redirect(base_url('admin/Addcategories'));
		// 		} else {
		// 			$this->session->set_tempdata('error','Sorry Try Again',2);
		// 			redirect(base_url('admin/Addcategories'));
		// 		}
		// 	}
		// }

	
}