<script type="text/javascript"src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

<form id="editpost" action="<?php echo base_url() . "post/updatepost/" . $post->postid; ?>" method="post" enctype="multipart/form-data">
    <h1>Edit Post</h1>
    <p>
       Title: <input class="required" value="<?php echo $post->title ?>" type="text" name="title" required/>
    </p>
    <p>
        <br> 
        <?php echo $this->ckeditor->editor("post","$post->post")
        ?>
      
    </p>

   
   <p>
        <input type="file" name="newfile" id="newfile" size="20"/>
    </p> 
   
    <p>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" name="editpost" value="Edit Post" />
    </p>

</form>

