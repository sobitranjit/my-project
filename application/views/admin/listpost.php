<div class="row">
				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h1>Post List</h1>
	                  	  	  <a href="<?php echo base_url();?>pdf">Download PDF</a>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <!-- <th>Id</th> -->
		                              <th>Title</th>
		                              <th>Post</th>
		                              <th>Edit/Delete</th>
		                          </tr>
		                          </thead>
		                          
		                          <tbody>
		                          
		                         	
		                     		
								<?php foreach ($post as $k => $post): ?>
        						<tr>
            					<!-- <td><?php echo $post->postid ?></td> -->
            					<td><?php echo $post->title ?></td>

            					<td><?php echo $post->post ?></td>
            					
            					<td><a href="edit/<?php echo $post->postid; ?>">Edit</a> | 
               					 <a href="delete/<?php echo $post->postid; ?>">Delete</a></td>
        						</tr>
								<?php endforeach; ?> 
		                             
		                          
		                          </tr>
		                          </tbody>
		                          
		                      </table>
	                  	  </div>
	                  </div>
