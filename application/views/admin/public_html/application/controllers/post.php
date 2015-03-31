<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('post_model');
    }

    public function index() {

    $data['admincontent'] = "admin/newpost";

        $this->load->view('admin/template',$data);
}
        
   


      public function insertnewpost() {

       $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|');
        $this->form_validation->set_rules('post', 'Post', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data['title'] = $this->input->post('title');
            $data['post'] = $this->input->post('post');
            $post_id = $this->post_model->savepost($data);

	redirect(base_url(). 'post/listpost');
           //echo "successfully inserted";
        } else {
            echo "cannot insert the post";
        }
}

  public function listpost() {
        
       $this->load->model('post_model');

        $posts = $this->post_model->get_post();
      
        $data['post'] = $posts;

        $data['admincontent'] = "admin/listpost";

        $this->load->view('admin/template',$data);
    }

  public function edit()
  {
  
  
  $postid = $this->uri->segment(3);
  $postdetails = $this->post_model->get_singlepost($postid);
  $data['post'] = $postdetails;
  $data['admincontent'] = "admin/editpost";
  $this->load->view('admin/template',$data);
  
}

public function delete($postid)
{
  $postsid = $this->uri->segment(3);
  $this->post_model->delete($postid);
  redirect(base_url(). 'post/listpost');  
  //$this->listpost();
  

}



public function editpost()
{
 
  
  $postid = $this->uri->segment(3);
  $data['title'] = $this->input->post('title');
  $data['post'] = $this->input->post('post');
  $this->post_model->update($postid, $data);

  $this->listpost();


}



    }