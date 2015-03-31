<?php

class user {

    public function register($query) {
        $db = new db();

        $result = $db->query($query);

        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }

    public function login($query) {
        $db = new db();

        $result = $db->select($query);

        /* echo "<pre>";
          print_r($result);
          die;
          echo "</pre>";
          var_dump($result);
          die; */
        return $result;
    }

    public function lists() {
        $db = new db();
        $query = "select * from user";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }

    public function search($keyword) {
        $db = new db();
        $query = "select * from user where username like'" . $keyword . "%' ";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }

}

?>