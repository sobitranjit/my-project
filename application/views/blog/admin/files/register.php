<?php 
if(!isset($_SESSION['username']))
{
header ('location:index.php?action=login');
}
?>

<form id="register" action="index.php?action=controller" method="post">
    <h1>Registration</h1>
    <p>
        Username: <input class="required email" type="text" name="username" required/>
    </p>
    <p>
        Password: <input class="required" type="password" name="pass" required/>
    </p>
    
    <p>
        Address: <input class="required" type="text" name="saddress" required/>
    </p>
    <p>
        <input type="submit" name="register" value="register" />
    </p>

</form>


<script>
    //window.location.href = "http://bbc.com";
    $(document).ready(function(){
                $("#register").validate();
    })
    </script>