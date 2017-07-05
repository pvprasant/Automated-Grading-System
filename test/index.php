<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - Student</title>
</head>
<?php
  //function execute() {
    //echo 'I just ran a php function';
  //}

  //if (isset($_GET['hello'])) {
 //execute();
// }
?>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" />
        <button type="submit" name="submit" >UPLOAD</button>
    </form>
    <!-- <a type="button" href='index.php?hello=true'>Execute sample</a> -->
    <!-- <form method="get" name="hello"><button type="button" name="execute">Execute</button></form> -->
  
  <?php
  if(isset($_POST['submit']))
  {
	  $par=1;
	  $test = 'cmd /c C:\xampp\htdocs\test\uploads\trigger.bat ' . $par;
	  exec($test);
	  echo 'executed batch file';
  }
	  else{
		  ?>
          <form method="post" action="">
          <input type="submit" name="submit">Execute</form>
            <?php
	  }
	  ?>
</body>
</html>
