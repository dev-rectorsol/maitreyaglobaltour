<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Contact extends CI_Controller {

		public function __construct(){
			parent::__construct();
			// check_login_user();
			$this->load->model('common_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
		}

		public function index()
		{
			$data = array();
			$data['page'] = 'Contact';
			$data['contact']=$this->common_model->select_single_row('contact');

			if ($_POST) {
				$data = array(
					'address'=> $_POST['address'],
					'phone'=> $_POST['phone'],
					'email'=> $_POST['email'],
					'workingHours'=> $_POST['workingHours']
				);
				// print_r($data); exit();
				$status=$this->common_model->updateContact($data,'contact');
					if ($status == true) {
						$this->session->set_tempdata('success','Data Updated Successfully...',2);
						redirect(base_url('admin/contact'));
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(base_url('admin/contact'));
					}
			}

			$data['main_content'] = $this->load->view('admin/contact', $data, TRUE);
	    	$this->load->view('admin/index', $data);
		}

		public function editContact($id)
		{
			if ($_POST) {
				$config['upload_path']          = './uploads/aboutImg/';
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
					'aboutDesc'=> $_POST['aboutDesc'],
					'image'=> $pic
				);
				// print_r($data); exit();
				$status=$this->common_model->update($data,$id,'about');
					if ($status == true) {
						$this->session->set_tempdata('success','Data Updated Successfully...',2);
						redirect(base_url('admin/contact'));
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(base_url('admin/contact'));
					}
			}
		}

	}

/* End of file About.php */
/* Location: ./application/controllers/admin/About.php */ 
?>
