<!-- google search -->


<div>
<script>
  (function() {
    var cx = '017418246779318929495:nsw6lcm082c';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<!-- <form name="form1" method="post" action="index.php?action=search">
<input name ="search" type="text" size=20 maxlength=25/>
<input type="submit" name="submit" value="search"/> -->

<gcse:search> Search </gcse:search>
</div>


<!-- posts in homepage -->
<!-- <p>
<h1> Ride to Kalinchowk </h1>
</p>
	
			<p> 
			Ride to Kalinchow is one of the best bike ride of my life. It is a Village Development Committee (VDC) 
			of Dolkha Districk in Janakpure Zone in North Eastern Nepal. It is also one of the quickest access to the 
			elevation of 3790m from Kathmandu via land transport. 

			</p>

			<p>
			Kalinchowk Vagwati can be promoted as a destination for both religious and Entertainment mongers type of tourists. 
			It receives thousands of pilgrimage and tourist in a year.
			From the summit of Kalinchowk , you can enjoy the splendid superb view of  Langtang Himal, Ganesh Himal, 
			Shisha Pangma, Dorje Lakpa, Jugal Himal, Gauri Shankar etc. and can even see the Kathmandu valley in a clear day.
			</p>


		
<center>
	<img src= "assets/images/KALINCHOWK.jpg" width="400" height="300">
</center>
	


<br>
<p>
<h1> Treaking to Goshinkunda </h1>
</p>

<p> 
Gosaikunda Trekking is one of the interesting trekking which offers you unusual attitudinal migrants such as lbisbill 
and Gould’s short wing, high altitude birds such as snow Patridge, Tibetan snow cock and Grandala. The valley became Nepal’s 
second largest National park in Kakani Nepal.
</p>

<center>
<img src= "assets/images/goshinkunda.jpg" width="400" height="300">
<img src= "assets/images/goshinkunda2.jpg" width="400" height="300">
</center>



<br>
<p>
<h1> Muktinath </h1>
</p>

<p> 
Muktinath is a sacred place both for Hindus and Buddhists located in Muktinath Valley at an altitude of 3,710 meters 
at the foot of the Thorong La mountain pass (part of the Himalayas), Mustang, Nepal. The site is close to the village 
of Ranipauwa, which sometimes mistakenly is called Muktinath as well.
</p>

<p> 
We group of 11 started the journey from kathmandu. We took 24 bus ride for us to reach the area of muktinath. 
The bus ride was really a pain in an ass. But, the pain is nothing to the pleasure of beeing there. 
Next day, early in the morning we walked about 15 min to reach the temple. Taking bath in 108 water tap is
really the montent to remember.
</p>

<center>
<img src= "assets/images/muktinath.jpg" width="400" height="300">
</center>
 -->






<!-- for content -->

<div class="cont-bg">
<div class="wrap">


<!-- for videos -->

<div>
<h2>Bowling at Civil Mall</h2>

    <video width="500" height="400" controls>
  <source src="<?php echo base_url(); ?>/assets/videos/Bowling.mp4">
  

</video><br><br><br>
 </div>



<?php foreach ($post as $k => $post): ?>


          <center><h2><u><?php echo $post->title ?></h2></u>  </center><br>
            <?php echo $post->post ?><br>
            <img src="<?php base_url();?>uploads/<?php echo $post->image; ?>"><br>
            <br>
                     
            
  
    <?php endforeach; ?>
    </div>
    </div>




