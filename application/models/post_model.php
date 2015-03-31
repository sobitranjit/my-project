<?php

class Post_model extends CI_model
{
	  private $table_name = 'post';


  public function get_post() {
        $query = $this->db->get($this->table_name);
        $results = $query->result();
        return $results;
    }

    public function savepost($data) {
        $this->db->insert($this->table_name, $data);
        return $this->db->insert_id();
    }

   public function get_singlepost($postid) {
        $this->db->where('postid',$postid);
        $query = $this ->db ->get($this->table_name);
        return $query->row();
    }

    

public function update($postid,$data) {
        $this->db->where('postid',$postid);
        return $this->db->update($this->table_name,$data);
    }

public function delete($id) {
        $this->db->where('postid', $id);
        $this->db->delete($this->table_name);
        return true;
    }

public function validate_admin ($adminname, $password){
            $this->db->where('adminname', $adminname);
            $this->db->where('password', $password);
            $query = $this->db->get($this->table_name);
            $row = $query->row();
            if ($row){
            return TRUE;
        } else {
            return FALSE;
        }
        }
    

public function contact_post ($data){
    $query=$this->db->insert('contact',$data);  
}
    public function get_contact(){
        $query=$this->db->get('contact');
        $results=$query->result();
        return $results;
    }




// public function show_about ($data){
//     $query=$this->db->insert('about',$data);  
// }


    public function get_about(){
        $query=$this->db->get('about');
        return $query->row();

        }
     public function updateabout($data) {
       
        $this->db->update('about', $data);
        return true;
        
    }
}




?>