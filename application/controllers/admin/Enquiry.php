<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Enquiry extends CI_Controller {
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
			$data['page'] = 'Enquiry';
			$data['enquiry']=$this->common_model->selectEnquiryList();
			// echo "<pre>";
			// print_r($data['enquiry']); exit();
			$data['main_content'] = $this->load->view('admin/enquiry', $data, TRUE);
	    	$this->load->view('admin/index', $data);
		}
		public function delete($id){
			$status=$this->common_model->delete($id,'enquiry');
			if ($status== true) {
				$this->session->set_tempdata('delete','Record Deleted Successfully...',2);
				redirect(base_url('admin/enquiry'));
			} 
			else {
				$this->session->set_tempdata('Not_delete','Sorry Try Again',2);
				redirect(base_url('admin/enquiry'));
			}
			
		}
	
	}
	
	/* End of file Enquiry.php */
	/* Location: ./application/controllers/admin/Enquiry.php */
 ?>