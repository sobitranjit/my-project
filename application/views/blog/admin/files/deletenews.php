<?php 
    $newsid = isset($_GET['id'])? $_GET['id'] : '';
$news = new news();
$li = $news->deletenews($newsid);

 ?>