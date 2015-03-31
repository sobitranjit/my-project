<?php 
if(!isset($_SESSION['username']))
{
header ('location:index.php?action=login');
}
?>


<form id="newnews" action="index.php?action=controller" method="post">
    <h1>New News</h1>
    <p>
       News Title: <input class="required" type="text" name="newstitle" required/>
    </p>
    <p>
     	News: <br> <textarea name="news" cols="40" rows="5" required>

</textarea>
    </p>
    
   
    <p>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" name="newnews" value="Post" />
    </p>

</form>

