<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AddSession extends CI_Controller {
		public function __construct(){
			parent::__construct();
			// check_login_user();
			$this->load->model('session_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
		}
	
		public function index()
		{
			$data = array();
			$data['page'] = 'Add Session';
			$data['session']=$this->session_model->allSession();
			if ($_POST) {
				$data= $this->input->post();
				// print_r($data); exit();
				$status=$this->session_model->addSession($data);
				if ($status == true) {
						$this->session->set_tempdata('success','Session Added Successfully...',2);
						redirect(current_url());
					} else {
						$this->session->set_tempdata('error','Sorry Try Again',2);
						redirect(current_url());
					}
			}
			
			$data['main_content'] = $this->load->view('admin/addSession', $data, TRUE);
			$this->load->view('admin/index', $data);	
		}

		public function delete($id){
			// print_r($id); exit();
			$status=$this->session_model->delete($id);
			if ($status == true) {
				$this->session->set_tempdata('delete','Record Deleted Successfully...',2);
				redirect(base_url('admin/AddSession'));
			} 
			else {
				$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
				redirect(base_url('admin/AddSession'));
			}
			
		}
	
	}
	
	/* End of file Session.php */
	/* Location: ./application/controllers/admin/Session.php */
 ?>