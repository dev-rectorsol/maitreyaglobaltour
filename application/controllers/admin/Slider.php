<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Slider extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('common_model');
			$this->load->model('gallery_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
			
		}
		public function index()
		{
			$data = array();
			$data['page'] = 'Home Slider';
			$data['allSlider'] = $this->common_model->select('homeslider');
			// echo "<pre>";
	  //        print_r($data['allSlider']);
	  //        exit();
			$data['main_content'] = $this->load->view('admin/slider/addSlider', $data, TRUE);
			$this->load->view('admin/index', $data);
		}

		public function addSlider(){
			if ($_POST) {
				// print_r($this->input->post());
				$config['upload_path']          = './uploads/sliderImg/';
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
					'title'=> $_POST['title'],
					'link'=> $_POST['link'],
					'description'=> $_POST['description'],
					'image'=> $pic
				);
				// echo "<pre>";
	   //      	print_r($data);
	   //      	exit();
				$status=$this->common_model->insert($data,'homeSlider');
				if ($status == true) {
					$this->session->set_tempdata('success','Slider Added Successfully...',2);
					redirect(base_url('admin/slider'),'refresh');
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(base_url('admin/slider'),'refresh');
					}
			}
			
		}
		public function hide($id){
			$data = array(
				'status' => '0'
			);
			$status=$this->common_model->hide($id,$data,'homeslider');
			redirect(base_url('admin/slider'));
		}
		public function show($id){
			$data = array(
				'status' => '1'
			);
			$status=$this->common_model->show($id,$data,'homeslider');
			redirect(base_url('admin/slider'));
		}
		public function edit($id){
			// print_r($id); exit();
			$data = array();
			$data['page'] = 'Edit Slider';
			$data['sliderData']=$this->common_model->select_option($id,'homeslider');
			if ($_POST) {
				$config['upload_path']          = './uploads/sliderImg/';
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
				if ($pic!='') {
					$data = array(
						'title'=> $_POST['title'],
						'link'=> $_POST['link'],
						'description'=> $_POST['description'],
						'image'=> $pic
					);
				} 
				else {
					$data = array(
						'title'=> $_POST['title'],
						'link'=> $_POST['link'],
						'description'=> $_POST['description']
					);
				}
				// echo "<pre>";
	   //             print_r($data);
	   //             exit();
				$status=$this->common_model->update($data,$id,'homeslider');
				// print_r($status); exit();
				if ($status == true) {
					$this->session->set_tempdata('update','Slider Edit Successfully...',2);
					redirect(base_url('admin/slider'));
				} else {
					$this->session->set_tempdata('notUpdate','Sorry Try Again',2);
					redirect(base_url('admin/slider'));
				}
			}
			$data['main_content'] = $this->load->view('admin/slider/editSlider', $data, TRUE);
			$this->load->view('admin/index', $data);
			
		}
		public function delete($id){
			$imageName = $this->gallery_model->getImageName($id,'homeslider');
			// print_r($imageName); exit();
			unlink("uploads/sliderImg/".$imageName['image']);
			$status = $this->common_model->delete($id,'homeslider');
			if ($status == true) {
				$this->session->set_tempdata('delete','Record Deleted Successfully...',2);
				redirect(base_url('admin/slider'));
			} 
			else {
				$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
				redirect(base_url('admin/slider'));
			}
			
		}
	
	}
	
	/* End of file Slider.php */
	/* Location: ./application/controllers/admin/Slider.php */
 ?>