<?php

class news {
	public function deletenews($query) {
                                     
                       $db = new db();
                       $newsid = isset($_GET['id']) ? $_GET['id'] : '';               
                       $query = "DELETE  FROM news WHERE newsid ='$newsid' ";

                       $result = $db->query($query);
                 
                 if ($result === true) {
                 echo "deleted";
                 } else {
                 echo "not";
                 }
             }

    public function newnews($query) {
        $db = new db();

        $result = $db->query($query);

        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }

  public function listnews($edit = true) {
                        $db = new db();

                        if($edit)
                        {

                                $newsid = isset($_GET['id']) ? $_GET['id'] : '';
                                $query = "SELECT * FROM news WHERE newsid ='$newsid' ";
                                $result = $db->select($query);

                               return $result;


                        }
                        else
                        {

                               $query = "SELECT newsid, newstitle, news FROM news LIMIT 10";

                               $result = $db->select($query);

                               return $result;
                       }
                                  
                 }

 

public function editnews($query) {
        $db = new db();
        //$query = "select * from news";
        $result = $db->query($query);
		if ($result===true){
			return true;
		}
		else {
			return false;
		}
        
    }
    
}

?>