<form id="newpost" action="<?php echo base_url(); ?>post/insertnewpost" method="post">
    <h1>New Post</h1>
    <p>
       Title: <input class="required" type="text" name="title" required/>
    </p>
    <p>
        Post: <br> <textarea name="post" cols="40" rows="5" required>

</textarea>
    </p>
    
   
    <p>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" name="newpost" value="Post" />
    </p>

</form>

