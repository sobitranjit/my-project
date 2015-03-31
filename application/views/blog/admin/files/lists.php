
<?php 

 $news = new news();
 $alist = $news->listnews(false);
 
 // var_dump($alists);die;
 ?>
				<div class="row">
				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i>News List</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>News Title</th>
		                              <th>News</th>
		                              <th>Edit/Delete</th>
		                          </tr>
		                          </thead>
		                          <?php foreach ($alist as $art):?>
		                          <tbody>
		                          <tr>
		                          	<td><?php echo $art['newsid'];?></td>
		                             <td><?php echo $art['newstitle'];?></td>
		                              <td><?php echo $art['news'];?></td>
		                             <td><a href="index.php?action=editnews&amp;id=<?php echo$art['newsid']; ?>">Edit</a>/
                                     <a href="index.php?action=deletenews&amp;id=<?php echo$art['newsid']; ?>">Delete</a></td>
		                          </tr>
		                          </tbody>
		                          <?php endforeach; ?>
		                      </table>
	                  	  </div>
	                  </div>
