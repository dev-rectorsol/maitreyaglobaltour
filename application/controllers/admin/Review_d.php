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
				$data['main_content'] = $this->load->view('admin/review', $data, TRUE);
				$this->load->view('admin/index', $data);
		}
		public function delectlist($id)
		{
            $this->common_model->delete($id,'review_tb');
            $this->session->set_flashdata('msg', ' Deleted Successfully');
            redirect(base_url('admin/Contactlist'));
          
        }
}