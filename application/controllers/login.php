<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->model('post_model');

  }


public function index()         

{
    // $data['admincontent'] = "admin/dashboard";

        $this->load->view('admin/login');
}


public function logout(){
$this->session->sess_destroy();
redirect ('login');

}


public function login_post() {
        $this->load->library('form_validation');   
        $this->form_validation->set_rules('adminname', 'adminname', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data['adminname'] = $this->input->post('adminname');
            $data['password'] = $this->input->post('password');
            $result = $this->register_model->validate_user($data['adminname'], $data['password']);
//var_dump($result);
            if ($result) {

            $this->session->set_userdata(array(
                'is_logged_in' => true
                
                 ));
//echo "string";die;
            redirect('admin/newpost');
        }
              else{
                //$this->index();
                 echo 'login failed';
              }
       }
       else {
        echo "validation failed";
         //$this->index();
       }
     }


public function ajax_lists(){
// echo "list";die;
$lists = $this->post_model->get_post();
echo json_encode($lists);

}


 }




