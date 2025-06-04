<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>J.D. School </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<?php
session_start();
if(!isset($_SESSION['UNAME']))
{
    header('location: login.html');
}
?>

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <h1> J.D. School , Jaipur</h1>
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <?php
            //get the value from last page
            $opass=$_GET['password'];
            $npass=$_GET['npass'];
            $rpass=$_GET['rpass'];

            if($npass!=$rpass)
            {
                echo "<p align=center><h1> Password Not Matched</p></h1>";
            }
            else
            {
            include "dbconnect.php";
            //define the sql statement 
			$sql="select * from login where password='$opass'";
			//excute the statement
			$result=$conn->query($sql);
			
			if($row=$result->fetch_assoc())
			{
				//update the password in database
				$upd_sql="UPDATE login SET password='$npass' where username='".$_SESSION['UNAME']."'";
				if($conn->query($upd_sql))
				{
					echo "<p align=center><h1>Password Update Successfully</h1></p><br>";
				}
			}
			else
				echo "<h1><p align=center>Invalid Details</p></h1>";
		
        }
    ?>
        </div>
       

</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
