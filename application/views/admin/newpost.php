<script type="text/javascript"src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>


<form id="newpost" action="<?php echo base_url(); ?>post/insertnewpost" method="post" enctype="multipart/form-data">
    <h1>New Post</h1>
    <p>
       Title: <input class="required" type="text" name="title" required/>
    </p>
    <p>
<?php echo $this->ckeditor->editor("post",'')
        ?>
    <!-- 

        Post: <br> <textarea name="post" cols="40" rows="5" required>
    
    </textarea> -->
    </p>
    
    <p>
        <input type="file" name="newfile" id="newfile" size="20"/>
    </p>
   
    <p>

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" name="newpost" value="Post" />
    </p>

</form>

