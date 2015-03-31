<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('register_model');
    }


public function index()			

{
    // $data['admincontent'] = "admin/dashboard";

        $this->load->view('admin/login');
}

public function newpost()			

{
    $data['admincontent'] = "admin/newpost";

        $this->load->view('admin/template',$data);
}

public function listpost()			

{
    $data['admincontent'] = "admin/listpost";

        $this->load->view('admin/template',$data);
}

public function login()          

{
    $data['admincontent'] = "admin/login";

        $this->load->view('admin/template',$data);
}


public function login_post() {
$this->load->library('form_validation');
        $this->form_validation->set_rules('adminname', 'adminname', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data['adminname'] = $this->input->post('adminname');
            $data['password'] = $this->input->post('password');


            $result = $this->register_model->validate_user($data['adminname'], $data['password']);

            if ($result) {
    $data['admincontent'] = "admin/newpost";
    $this->load->view('admin/template',$data);



      // echo "succesfully login";
      
            }         else {
          echo 'login failed';
 }       }
    }





}