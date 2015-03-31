

<?php

if ($_POST) {
    if (isset($_POST['register'])) {
        
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $address = $_POST['saddress'];

        $sql = "insert into user (username,password,address) values('$username','$password','$address')";
        $user = new user();
        $result = $user->register($sql);
        if ($result) {
            echo "inserted";
           
        } else {
            echo "not inserted";
        }
    } 
	
	
	
	else if (isset($_POST['newnews']))
		{

    	$newstitle = $_POST['newstitle'];
    	$news = $_POST['news'];
  
  
        // $postdate = $_POST['postdate'];

   		$query = "INSERT INTO news (newstitle,news)
    	VALUES ('$newstitle','$news')";

    	$news = new news();
    	$result = $news->newnews($query);
    	if(!empty($result)) 
    	{

     	echo "sucessfully inserted";
     
 		} 
 		else
 		{
  		echo "cannot insert";
 		}
		}
		
		
		
		else if(isset($_POST['editnews'])) 
    {

        $newstitle = $_POST['newstitle'];
        $news = $_POST['news'];
       
        
        $newsid = isset($_GET['id'])? $_GET['id'] : '';
       // var_dump($newsid);die;

        $query = "UPDATE news SET newstitle='$newstitle', news='$news' WHERE newsid='$newsid' " ;
        $news = new news();
        $result= $news->editnews($query);
		//  var_dump($result);die;
        if ($result){
           echo"sucessfully updated";
       }
       else{
        echo "Error";
    }
	}
	
	else if (isset($_POST['login'])) 
	{
		if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $sql = "select * from user where username= '$username' and password = '$password'";
        $user = new User();
        $result = $user->login($sql);

        //if($result->num_rows == 1) {
        if (!empty($result)) {
            //echo $result[0]['id'];die;
            $_SESSION["username"] = $result[0]['username'];
            //header('Location: index.php');
			 //echo "congrats"; 
			  header('Location: index.php?action=home');
			 } 
		}
		else {
            header('Location: index.php?action=login');
        }
		}
				
		
		
		
		




			 
			 



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

