<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('user_model');
    }

    public function index() {
         $this->load->model('post_model');

        $posts = $this->post_model->get_post();
      
        $data['post'] = $posts;
        $data['content'] = "home";

        $this->load->view('layout/default', $data);
       
    }
      public function home() {

           $this->load->model('post_model');

        $posts = $this->post_model->get_about();
      
        
      
        $data['post'] = $posts;
        $data['content'] = "home";

        $this->load->view('layout/default', $data);
       
    }

    public function about() {

        $this->load->model('post_model');
        $posts=$this->post_model->get_about();

        $data['post'] = $posts;
        $data['content'] = "about";

        $this->load->view('layout/default', $data);
       
    }

    public function gallery() {
        $data['content'] = "gallery";

        $this->load->view('layout/default', $data);
       
    }

    public function contact() {
        $data['content'] = "contact";

        $this->load->view('layout/default', $data);
       
    }

    // public function blogpost() {
        
    //      $posts = $this->post_model->get_post();
      
    //     $data['post'] = $posts;

    //     $data['content'] = "show";

    //     $this->load->view('layout/default', $data);
    // }

    





}