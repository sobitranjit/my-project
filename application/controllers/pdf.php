<?php if ( ! defined('BASEPATH')) exit('No direct script 

access allowed');


class pdf extends CI_Controller {

/**
  * constructer
  */

function __construct(){
parent::__construct();
$this->load->model('post_model');


}


public function index()
{
    $this->load->helper('pdf_helper');
   $posts = $this ->post_model -> get_post();
$data['lists'] = $posts;

    $this->load->view('pdf_report', $data);
    
}


public function listpost() {
        
       $this->load->model('post_model');

        $posts = $this->post_model->get_post();
      
        $data['post'] = $posts;

        $data['admincontent'] = "admin/listpost";

        $this->load->view('admin/template',$data);
    }

 
      public function blogpost() {
        
       $this->load->model('post_model');

        $posts = $this->post_model->get_post();
      
        $data['post'] = $posts;

        $data['content'] = "home";

        // $this->load->view('layout/default', $data);
        $this->load->view('admin/pdf_report', $data);
    }



}