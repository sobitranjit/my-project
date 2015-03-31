<div class="row">
        
                    <div class="col-md-12">
                        <div class="content-panel">
                            <h1>Contact List</h1>
                            
                            
                            <a href="<?php echo base_url();?>post/downloadexcel">Download</a>
                            
                            <hr>
                          <table class="table">
                              <thead>
                              <tr>
                                  <!-- <th>Id</th> -->
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Message</th>
                                  

                              </tr>
                              </thead>
                              
                              <tbody>
                              
                              
                            
                <?php foreach ($contact as $k => $contact): ?>
                    <tr>
                      <!-- <td><?php echo $contact->contact_id ?></td> -->
                      <td><?php echo $contact->contact_name ?></td>

                      <td><?php echo $contact->contact_email ?></td>
                      <td><?php echo $contact->contact_message ?></td>
                      

                      
                    </tr>
                <?php endforeach; ?> 
                                 
                              
                              </tr>
                              </tbody>
                              
                          </table>
                        </div>
                    </div>


