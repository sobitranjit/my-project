
<!-- <br>
<p>
Name: Sobit Ranjit <br>
EMail: sobit_ranjit@yahoo.com <br>
Ph No: 9843138261<br> -->

<!-- To follow sobit.ranjit in facebook -->

<!-- <iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fsobit.ranjit&amp;
layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" 
frameborder="0" style="border:none; overflow:hidden; width:650px; height:100px;" allowTransparency="true"></iframe>
</p> -->



<!-- codes for linking facebook -->

<!-- /*<style>
	.facebook{
		margin-left: 1000px;
		margin-bottom: -100px;
	}

</style>*/ -->


<!-- 
<div class="facebook">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
 -->

<!-- <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-colorscheme="light" 
	data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div> <br> -->






   <!-- Codes for google map -->

<style>
      #map-canvas {
        width: 1000px;
        height: 300px;

		
      }
    </style> 

<center>
<script src="https://maps.googleapis.com/maps/api/js"></script> 
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(27.7000, 85.3333),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div id="map-canvas"></div>
<script src ="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<?php if ($this->session->flashdata('success')): ?>
    <div class="success-msg">
        <?php
        echo $this->session->flashdata('success');
        ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <div class="error-msg">
        <?php
        echo $this->session->flashdata('error');
        ?>
    </div>
    
<?php endif; ?>

</center>

<!-- contact form -->

<br>
<div>

<form id="contact" action="" method="post">

    <h1>Contact Form</h1>
<form method="post" action=""> 
   Name: <input type="text" name="name" required/>
   <br><br>
   E-mail: <input type="email" name="email" required/>
 
   <br><br>
   message: <br> <textarea name="message" rows="5" cols="40" required></textarea>
   <br>
   <input type="submit" name="submit" value="Submit"> 
</form>


</div>


<!-- codes for linking twitter  -->

<!-- </*style> 
.twitter{
	margin-left: 800px;
	margin-top: -630px;
}


</style>*/ -->


<!-- <br>
<div class="twitter">
<a class="twitter-timeline" href="https://twitter.com/SobitRanjit" 
	data-widget-id="551579875719397376">Tweets by @SobitRanjit</a>



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){js=d.createElement(s);
		js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script></div> -->

