<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->library('ckeditor');
        $this->ckeditor->basePath=base_url().'assets/ckeditor/';
        $this->ckeditor->config['toolbar']="FULL";
        $this->ckeditor->config['language']="eng";
        $this->ckeditor->config['width']="730px";
        $this->ckeditor->config['height']="300px";
  }


public function index()			

{
    // $data['admincontent'] = "admin/dashboard";

        $this->load->view('admin/login');
}

/*public function login_post() {
$this->load->library('form_validation');        $this->form_validation->set_rules('adminname', 'adminname', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data['adminname'] = $this->input->post('adminname');
            $data['password'] = $this->input->post('password');


            $result = $this->register_model->validate_user($data['adminname'], $data['password']);
//var_dump($result);
            if ($result) {

            
            
            redirect('admin/dashboard');
        }


         

    $data['admincontent'] = "admin/newpost";
    $this->load->view('admin/template',$data);



      // echo "succesfully login";
      
            }         else {
          echo 'login failed';
 }       }
*/

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
                'is_logged_in' => true,
                'adminname' => $this->$data['adminname']
                 ));
//echo "string";die;
            redirect('admin/listpost');
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
echo json_encode($post);

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
public function dashbaord()          

{
    $data['admincontent'] = "admin/dashboard";

        $this->load->view('admin/template',$data);
}






}