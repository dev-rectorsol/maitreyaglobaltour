<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Homepage extends CI_Controller {
		
		public function __construct(){
			parent::__construct();
			// check_login_user();
			$this->load->model('common_model');
			$this->load->model('gallery_model');
			if(!$this->session->userdata('id')){
          	redirect(base_url() . 'auth', 'refresh');
        	}
			
		}

		public function index()
		{
			$data=array();
			$data['heading'] = $this->common_model->select('heading');
			
			$data['main_content'] = $this->load->view('admin/addTitle', $data, TRUE);
	        $this->load->view('admin/index', $data);
        }
       
        public function updateHeading(){
            if ($_POST) {
				$id= $_POST['id'];
				$data = array(
					'title'=> $_POST['title'],
					'subtitle'=> $_POST['subtitle']
                );
                $status=$this->common_model->update($data,$id,'heading');
					if ($status == true) {
						$this->session->set_tempdata('change','Data Updated Successfully...',2);
						redirect(base_url('admin/homepage'));
					} else {
						$this->session->set_tempdata('notChange','Sorry Try Again',2);
						redirect(base_url('admin/homepage'));
					}
            }
        }

         public function updateFlash(){
            if ($_POST) {
				$id= 1;
				$data = array(
					'name'=> $_POST['message'],
					
                );
                $status=$this->common_model->update($data,$id,'flash');
					if ($status == true) {
						$this->session->set_tempdata('change','Data Updated Successfully...',2);
						redirect(base_url('admin/Galley'));
					} else {
						$this->session->set_tempdata('notChange','Sorry Try Again',2);
						redirect(base_url('admin/homepage'));
					}
            }
		}
		

		 
    }	
 ?>