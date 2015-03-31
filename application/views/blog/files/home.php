<?php 

 $news = new news();
 $alist = $news->listnews(false);
 
 // var_dump($alists);die;
 ?>


<div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="http://placehold.it/900x350" alt="">
            </div>
            <!-- /.col-md-8 -->
          
            <!-- /.col-md-4 --><!-- Call to Action Well -->
        <div class="row">
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


        <!-- Content Row -->
              <?php foreach ($alist as $art):?>
        
        <div class="row">
            <div class="col-md-10">
                <h2><?php echo $art['newstitle'];?></h2>
                <p><?php echo $art['news'];?></p>
                
                <a class="btn btn-default" href="#">More Info</a>
                
              <?php endforeach; ?>
               
            </div>
            <!-- /.col-md-4 -->
            
                        <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->