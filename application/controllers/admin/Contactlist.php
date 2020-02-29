<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Contactlist extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('common_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
		
		}
	
		public function index()
		{
            $data['contactlist'] = $this->common_model->select('contact_tb');
            $data['main_content'] = $this->load->view('admin/contactlist', $data, TRUE);
			$this->load->view('admin/index', $data);
        }
        public function delectlist($id)
		{
            $this->common_model->delete($id,'contact_tb');
            $this->session->set_flashdata('msg', ' Deleted Successfully');
            redirect(base_url('admin/Contactlist'));
          
        }
    }

 ?>