<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// *************************************************************************
// *                                                                       *
// * Optimum LinkupComputers                              *
// * Copyright (c) Optimum LinkupComputers. All Rights Reserved                     *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: info@optimumlinkupsoftware.com                                 *
// * Website: https://optimumlinkup.com.ng								   *
// * 		  https://optimumlinkupsoftware.com							   *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// *                                                                       *
// *************************************************************************

//LOCATION : application - controller - Auth.php

class Home extends CI_Controller {

    public $month;

    public function __construct(){
        parent::__construct();
        $this->load->model('web_model');
        $this->load->model('common_model');
        $data['all_month'] = $this->web_model->allMonthName();
        foreach ($data['all_month'] as $key => $value){
            $this->month[$key] = $value['month_name'];
        }
    }


    public function index(){
        $data = array();
        $data['page'] = 'Home';
        $data['category'] = $this->web_model->tourCategory('category');
        $data['tourData'] = $this->web_model->tourData();
     
        $data['heading'] = $this->common_model->select('heading');
        $data['flash'] = $this->common_model->select('flash');
        $data['aboutData']=$this->common_model->select_single_row('about');
         $data['slider'] = $this->web_model->sliderData();
        // echo "<pre>";
        // print_r($data['flash']); exit();
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['main_content'] = $this->load->view('web/home', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    public function about(){
        $data = array();
        $data['page'] = 'About';
        $data['aboutData'] = $this->web_model->aboutData();
        $data['flash'] = $this->common_model->select('flash');
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['main_content'] = $this->load->view('web/about', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    
    public function gallery(){
        $data = array();
        $data['page'] = 'Gallery';
        $data['category'] = $this->common_model->select('gallerycategory');
        $data['allGalleryImg'] = $this->common_model->select('galleryimage');
        $data['flash'] = $this->common_model->select('flash');
        // echo "<pre>";
        // print_r($data['allGalleryImg']); exit();
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['main_content'] = $this->load->view('web/gallery', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    public function tourlist(){
        $data = array();
        $data['page'] = 'Tour List';
        $tourData = $this->web_model->tourData();
        foreach ($tourData as  $value) {
            $range = self::range($value['startingDate'], $value['endingDate']);
           if(in_array(date('M'), $range)){
            $data['sessionTourData'][] =  $value;
           }
        }
        $data['flash'] = $this->common_model->select('flash');
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['main_content'] = $this->load->view('web/tourlist', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    public function checkout(){
        $data = array();
        $data['page'] = 'Checkout';
        $data['flash'] = $this->common_model->select('flash');
        $data['main_content'] = $this->load->view('web/checkout', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    // public function tourdetail($tourId){
    //     $data = array();
    //     $data['page'] = 'Tour Details';
    //     $data['itinerary']= $this->web_model->itineraryData('itinerary',$tourId);
    //     $data['tourdata'] = $this->web_model->tourTableData($tourId);
    //     $data['galleryImage'] = $this->web_model->galleryImageById($tourId);

    //     $data['main_content'] = $this->load->view('web/tourdetail', $data, TRUE);
    //     $this->load->view('web/index', $data);
    // }

    public function tourdetail($tourId){
        $data = array();
        $data['page'] = 'Tour Details';
        $data['itinerary']= $this->web_model->itineraryData('itinerary',$tourId);
        $data['tourdata'] = $this->web_model->tourTableData($tourId);
        $data['galleryImage'] = $this->web_model->galleryImageById($tourId);
        $data['review'] = $this->web_model->review($tourId);
        $data['flash'] = $this->common_model->select('flash');
        // print_r(count($data['review'])); exit();
        $data['setting'] = $this->common_model->select_single_row('setting');
        
        if ($_POST) {
            $data = array(
                'firstName'=> $_POST['firstName'],
                'lastName'=> $_POST['lastName'],
                'email'=> $_POST['email'],
                'phone'=> $_POST['phone'],
                'message'=> $_POST['message'],
                'tourId'=> $_POST['tourId']
            );
           
            $status=$this->common_model->insert($data,'enquiry');
            // echo $status; exit();
            if ($status == true) {
                $this->session->set_tempdata('success','Thanks...!',2);
                redirect(current_url());
            } else {
                $this->session->set_tempdata('error','Sorry Try Again',2);
                redirect(current_url());
            }   
        }
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['main_content'] = $this->load->view('web/tourdetail', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    public function byCategorytourlist($categoryName){
        $data = array();
        $data['page'] = 'Tour Details';
        $data['categoryTourData'] = $this->web_model->byCategoryTourData($categoryName);
        // echo "<pre>";
        // print_r($data['categoryTourData']); exit();
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['main_content'] = $this->load->view('web/byCategoryTourList', $data, TRUE);
        $this->load->view('web/index', $data);

    }

    public function contact(){
        $data = array();
        $data['page'] = 'Contact';
        $data['flash'] = $this->common_model->select('flash');
        $data['setting'] = $this->common_model->select_single_row('setting');
        $data['contact']=$this->common_model->select_single_row('contact');
        $data['main_content'] = $this->load->view('web/contact', $data, TRUE);
        $this->load->view('web/index', $data);
    }

    

    public function submit_contact()
    {
                if ($_POST) {
                    $data = array(
                                'name' => $_POST['your-name'],
                                'email' => $_POST['your-email'],
                                'subject'=> $_POST['your-subject'],
                                'message' => $_POST['your-message'],
                                'create_date'=>date('Y-m-d')
                        );
                        
                          $data = $this->security->xss_clean($data);
                        //-- check duplicate email
                          $this->Common_model->insert($data, 'contact_tb');
                          $this->session->set_flashdata("msg","Thank you for getting in touch!");
                          redirect(base_url('contact'));	
                    }

                    
        }
public function review_submit()
    {
        
        if($_POST)
        {
            $data = array(
               'tour_id' => $_POST['tourId'],
                'name' => $_POST['author'],
                'remail' => $_POST['email'],
                'rating'=> $_POST['rating'],
                'reviewmsg' => $_POST['comment'],
                'create_date'=>date('Y-m-d')
        );
        
        $data = $this->security->xss_clean($data);
        // print_r($data); exit();
        }
        $this->common_model->insert($data,'review_tb');
        $this->session->set_flashdata("msg","Thank you for rating.");
        redirect(base_url('home/tourdetail/').$data['tour_id']);
    }

    

 /****************Function login**********************************
     * @type            : Function
     * @function name   : log
     * @description     : Authenticatte when uset try lo login.
     *                    if autheticated redirected to logged in user dashboard.
     *                    Also set some session date for logged in user.
     * @param           : null
     * @return          : null
     * ********************************************************** */
    public function log(){

        if($_POST){
            $query = $this->login_model->validate_user();

            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'name' => $row->first_name,
                        'email' =>$row->email,
                        'role' =>$row->role,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $url = base_url('admin/dashboard');
                }
				redirect(base_url() . 'admin/dashboard', 'refresh');
            }else{
               redirect(base_url() . 'auth', 'refresh');
            }

        }else{
            $this->load->view('auth',$data);
        }
    }

 /*     * ***************Function logout**********************************
     * @type            : Function
     * @function name   : logout
     * @description     : Log Out the logged in user and redirected to Login page
     * @param           : null
     * @return          : null
     * ********************************************************** */

    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('admin/login', $data);
    }
    public function range($from, $to){
      $range  = array();
      foreach ($this->month as $key => $value) {
        
         if($from == $value){
            $f = $key;
         }
         if($to == $value){
            $t = $key;
         }
      } 
       
        $count = 0; 
        $flag = false;

      while(true) {

        if($count >= 12){
            $count = 0;
        }
        if($count == $f){
            $flag = true;
        }   
        if($flag){
            $range[] = $this->month[$count];
            if($t == $count){
                break;
            }
        }

        $count++;
      }
      return $range;
    }



}
