<?php include("../config/config.php");


$files=mysql_query("select * from video_db where category='Java'");  ?>    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
            <a href="#" class="navbar-brand navbar-right"><img src="../img/java.png" width="70px" height="70px"/> </a> 
            <ul class = "nav navbar-nav navbar-left">
               <li class = "active"><a href = "loghome.php">Home</a></li>
               <li><a href = "explore_android.php"><font color="white">Explore Android</font></a></li>
               <li><a href = "aboutus.php"><font color="white">About Us</font></a></li>
            </ul>
         </div>
      </div>
      <br><br><br> <?php  while($data=mysql_fetch_array($files)) {  ?>  
      <div class="container" id="container">
         <div class="block" id="block">
            <br>  
            <center>
               <div class="col left" id="div"> <a href="<?php echo $data[2]; ?>"><font color="white"><?php echo $data[1]; ?></font></a><br> </div>
            </center>
            <br> 
         </div>
         <br>
      </div>
	   <?php } ?>
      <?php include("../config/footer.php");?>
   </body>
</html>

