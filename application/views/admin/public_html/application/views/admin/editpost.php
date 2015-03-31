<form id="editpost" action="<?php echo base_url() . "post/editpost/" . $post->postid; ?>" method="post">
    <h1>Edit Post</h1>
    <p>
       Title: <input class="required" value="<?php echo $post->title ?>" type="text" name="title" required/>
    </p>
    <p>
        Post: <br> <textarea name="post" cols="40" rows="5" required>
        <?php echo $post->post ?>

</textarea>
    </p>
    
   
    <p>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" name="editpost" value="Edit Post" />
    </p>

</form>

