<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Setting extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('common_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
		}
	
		public function index()
		{
			$data = array();
			$data['page'] = 'Setting';
			$data['setting'] = $this->common_model->select_single_row('setting');
			// echo "<pre>";
        // print_r($data['setting']); exit();
			if ($_POST) {
				$config['upload_path']          = './uploads/logoImg/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 1024;
				$config['max_width']            = 1024;
				$config['max_height']           = 720;

				$this->load->library('upload', $config);
	               $this->upload->do_upload('logo');
				$img=$this->upload->data();
	               // echo "<pre>";
	               // print_r($img);
	               // exit();
				$pic=$img['file_name'];
				if($pic!=''){
					$data = array(
						'startEndTime'=> $_POST['startEndTime'],
						'phone'=> $_POST['phone'],
						'email'=> $_POST['email'],
						'logo'=> $pic,
						'address'=> $_POST['address'],
						'copyrite'=> $_POST['copyrite']						
					);
				}
				else{
					$data = array(
						'startEndTime'=> $_POST['startEndTime'],
						'phone'=> $_POST['phone'],
						'email'=> $_POST['email'],
						'address'=> $_POST['address'],
						'copyrite'=> $_POST['copyrite']
					);
				}
				$Userdata = array(
						
						'password' => $_POST['password']
					);
					$email=$_POST['userid'];
				// echo "<pre>";
				// print_r($data); exit();
				$this->common_model->updateUserId($Userdata,$email,'user');
				$status=$this->common_model->update($data,'1','setting');
					if ($status == true) {
						$this->session->set_tempdata('success','Data Updated Successfully...',2);
						redirect(current_url());
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(current_url());
					}
			}
			$data['main_content'] = $this->load->view('admin/setting', $data, TRUE);
	    	$this->load->view('admin/index', $data);
		}
	}
	
	/* End of file Enquiry.php */
	/* Location: ./application/controllers/admin/Enquiry.php */
 ?>