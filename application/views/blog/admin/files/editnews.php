<?php 
if(!isset($_SESSION['username']))
{
header ('location:index.php?action=login');
}
?>

<?php 
    $newsid = isset($_GET['id'])? $_GET['id'] : '';
$news = new News();
$li = $news->listnews(true);


 ?>

<?php foreach ($li as $art):?>


<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit news</h4>
                      <form  method="post" action="index.php?action=controller&id=<?php echo $art['newsid']; ?>">
                          <div class="form-group">
                              
                           News Titel:<input class="required" type="text" name="newstitle" value="<?php echo $art['newstitle'];?>" required/>
                              </div>
                          </div> <br>
                          <div class="form-group">
                            News: <br><textarea name="news" cols="40" rows="5" required><?php echo $art['news'];?></textarea>
                                  <span class="help-block"></span>
                              </div>
                          
                          <?php endforeach; ?>
                                  
                                  <button name="editnews" type="submit">
                  <i class=""></i> Update news</button>
                              </div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->