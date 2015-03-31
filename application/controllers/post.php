<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->model('register_model');
      $this->load->library('ckeditor');
      $this->ckeditor->basePath=base_url().'assets/ckeditor/';
      $this->ckeditor->config['toolbar']="FULL";
      $this->ckeditor->config['language']="eng";
      $this->ckeditor->config['width']="730px";
      $this->ckeditor->config['height']="300px";
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


      $pic1=$_FILES["newfile"]["tmp_name"];

     $img1=$_FILES["newfile"]["name"];


  move_uploaded_file($pic1, "uploads/$img1");
  $data['image']=$img1;
            $data['title'] = $this->input->post('title');
            $data['post'] = $this->input->post('post');
            $postid = $this->post_model->savepost($data);
          if ($postid){
             
$this->listpost();
 echo "<div padding-top:'100px'> Invalid Username or Password, Please Try Again </div>";
             // echo "sucessfully created";

        // $data['msg']='Success';  

          }
           
        } else {
                        echo "Post insertion not sucessfull";
        }
    }

            
           
//            redirect(base_url(). 'post/listpost');
//            // echo "successfully inserted";
//         } else {
//             echo "cannot insert the post";
//         }
// }





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

        $this->load->view('layout/default', $data);
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
  // $this->listpost();
  
}



public function editpost()
{
 
  
  $postid = $this->uri->segment(3);
  $data['title'] = $this->input->post('title');
  $data['post'] = $this->input->post('post');
  $data['image']=$this->input->post('image');
  $this->post_model->update($postid, $data);

  $this->listpost();


}



public function updatepost(){
        $id=$this->uri->segment(3);
$pic1=$_FILES["newfile"]["tmp_name"];

     $img1=$_FILES["newfile"]["name"];
move_uploaded_file($pic1, "uploads/$img1");
      $data['title'] = $this->input->post('title');
      $data['post'] = $this->input->post('post');
      $data["image"]=$img1;
      $this->post_model->update($id, $data);

    redirect (base_url().'post/editpost');

      }



public function listcontact() {
        
       $this->load->model('post_model');

        $posts = $this->post_model->get_contact();
      
        $data['contact'] = $posts;

        $data['admincontent'] = "admin/listcontact";

        $this->load->view('admin/template',$data);
    }


public function showabout() {
        
       $this->load->model('post_model');

        $posts = $this->post_model->get_about();
      
        $data['about'] = $posts;

        $data['admincontent'] = "admin/showabout";

        $this->load->view('admin/template',$data);
    }



public function editabout() {
        $data['heading'] = $this->input->post('heading');
        $data['content'] = $this->input->post('about'); 
        
        $this->post_model->updateabout($data);
        
        redirect(base_url().'admin/newpost');


      }
       public function get_about() {
        
        //var_dump($id);die;

        
       $this->load->model('post_model');

        $posts = $this->post_model->get_about();
      
        $data['about'] = $posts;

        $data['admincontent'] = "admin/editabout";

        $this->load->view('admin/template',$data);
    




        //var_dump($user_details);die;
        //$user_id = $this->user_model->update($id,$data);
    }



public function downloadexcel(){
           $this->load->dbutil();
  $query = $this->db->query("SELECT * FROM contact"); 
  $delimiter = ",";
  $newline = "\r\n";
  $data= $this->dbutil->csv_from_result($query, $delimiter, $newline);
  
  header('Content-Description: File Transfer');
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename=csv_file.csv');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Transfer-encoding: binary');
  
  echo $data;
  
  flush();
  exit; 


}
}