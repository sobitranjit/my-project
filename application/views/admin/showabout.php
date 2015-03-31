<div class="row">
        
                    <div class="col-md-12">
                        <div class="content-panel">
                            <h1>About</h1>
                            
                            
                                                        
                            <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <!-- <th>Id</th> -->
                                  <th>Heading</th>
                                  <th>Content</th>
                                  <th>Edit</th>
                                  
                              </tr>
                              </thead>
                              
                              <tbody>
                              
                              
                            
                <?php foreach ($about as $k => $about): ?>
                    <tr>
                      <!-- <td><?php echo $contact->contact_id ?></td> -->
                      <td><?php echo $about->heading ?></td>

                      <td><?php echo $about->content ?></td>

                      <td><a href="editabout/<?php echo $about->about_id; ?>">Edit</a></td>
                      
                     
                    </tr>
                <?php endforeach; ?> 
                                 
                              
                              </tr>
                              </tbody>
                              
                          </table>
                        </div>
                    </div>


