<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Review extends CI_Controller {
		public function __construct(){
			parent::__construct();
			// check_login_user();
			$this->load->model('common_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
		}
		public function index(){
				$data['reviewlist']= $this->common_model->select('review_tb');
				// echo "<pre>";
				// print_r($data['reviewlist']); exit();			
				$data['main_content'] = $this->load->view('admin/review', $data, TRUE);
				$this->load->view('admin/index', $data);
		}
		public function delectlist($id)
		{
            $this->common_model->delete($id,'review_tb');
            $this->session->set_flashdata('msg', ' Deleted Successfully');
            redirect(base_url('admin/Contactlist'));
          
        }
        public function decline($id){
			$data = array(
				'status' => '0'
			);
			$status=$this->common_model->decline($id,$data,'review_tb');
			redirect(base_url('admin/review'));
		}
		public function accept($id){
			$data = array(
				'status' => '1'
			);
			$status=$this->common_model->accept($id,$data,'review_tb');
			redirect(base_url('admin/review'));
		}
}