<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class About extends CI_Controller {

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
			$data['page'] = 'Edit About';
			$data['aboutData']=$this->common_model->select_single_row('about');
			
			$data['main_content'] = $this->load->view('admin/editAbout', $data, TRUE);
	    	$this->load->view('admin/index', $data);
		}

		public function editAbout($id)
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
						redirect(base_url('admin/About'));
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(base_url('admin/About'));
					}
			}
		}

	}

/* End of file About.php */
/* Location: ./application/controllers/admin/About.php */ 
?>
