<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Register_model extends CI_Model {
     private $table_name = 'admin';

   
    
     public function get_admin() {
        $query = $this->db->get($this->table_name);
        $results = $query->result();
        return $results;
    }
    public function get_users($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table_name, $data);
    }
        function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table_name);
        return true;
    }

        public function validate_user ($adminname, $password){
            $this->db->where('adminname', $adminname);
            $this->db->where('password', $password);
            $query = $this->db->get($this->table_name);
            $row = $query->row();
            if ($row){
            $this->session->set_userdata("sess_id", $row->adminid);
            return TRUE;
        } else {
            return FALSE;
        }
        }
    
   public function save($data) {
            $this->db->insert($this->table_name, $data);
            return $this->db->insert_id();
        }
        function check_session() {
        $sid = $this->session->userdata("sess_id");
        if ($sid) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



}
