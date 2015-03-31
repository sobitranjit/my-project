
<script type="text/javascript" src="<?php echo base_url() ?>assests/ckeditor/ckeditor.js">    </script>


<form id="editabout" action="<?php echo base_url()?>post/editabout" method="post">
    <h1>Edit</h1>
    <p>
       Heading: <input class="required" type="text" value="<?php echo $about->heading ?>" name="heading" required/>
    </p>
    <p>
        Content: <br> 
        <?php echo $this->ckeditor->editor("about","$about->content") ?>

           
   
    <p>
       
        <input type="submit" name="newpost" value="Update" />
    </p>

</form>