<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>J.D. School  </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="adminwelcome.php" class="navbar-brand">
                    <h4><b> J.D. School , Jaipur</h4>
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="ChangePass.php"><i class="icon-gear"></i> Change Password </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <?php
        session_start();
       if(!isset($_SESSION['UNAME']))
        {
                header('location: login.html');
        }
            include "sidemenu.php";
        ?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Daily Diary Content </h1>
                    </div>
                </div>
                 

                 

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->
                          <div class="row">
                    
                    <div class="col-lg-12">
                        

                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Daily Diary Content Table
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>WorkDate</th>
                                                <th>DiaryContant</th>
                                                <th>Images</th>
                                                <th>Ctype</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "dbconnect.php";
                                            //execute the query
                                            $sql="select *from dailydiary";
                                            $result=$conn->query($sql);
                                            //list the record
                                            $i=1;
                                            $sno=1;
                                            while($row=$result->fetch_assoc())
                                            {
                                                if($i==1)
                                                {

                                               
                                        ?>
                                            <tr class="success">
                                                <td><?php echo $row['sno']; ?></td>
                                                <td><?php echo $row['workdate']; ?></td>
                                                <td><?php echo $row['diarycontent']; ?></td>
                                                <td><img src=<?php echo $row['image']; ?> height=20px width=40px></td>
                                                <td><?php echo $row['ctype']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                               </tr>
                                        <?php
                                                $i=0;
                                                }
                                                else
                                                {
                                        ?>
                                            <tr class="info">
                                            <td><?php echo $row['sno']; ?></td>
                                            <td><?php echo $row['workdate']; ?></td>
                                                <td><?php echo $row['diarycontent']; ?></td>
                                                <td><img src=<?php echo $row['image']; ?> height=20px width=40px></td>
                                                <td><?php echo $row['ctype']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                                 </tr>
                                           <?php
                                                $i=1;
                                                }
                                                $sno++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="col-lg-12">
    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Content Details
                            </div>
                            <div class="panel-body">
                            <?php
// Check if 'sno' is set
if (isset($_POST['sno'])) {
    // Sanitize the input to avoid SQL injection
    $no = intval($_POST['sno']);  // Cast the input to an integer

    // Include the database connection
    include "dbconnect.php";

    // Prepare and execute the query using a prepared statement
    $sql = $conn->prepare("DELETE FROM dailydiary WHERE sno = $no");
    $sql->bind_param("i", $no);  // Bind the integer parameter

    // Execute the query
    if ($sql->execute()) {
        echo "Record Deleted Successfully";
    } else {
        // Provide a more detailed error message
        echo "Error deleting record: " . $conn->error;
    }

    // Close the statement and the connection
    $sql->close();
    $conn->close();
}
?>
                                   
                           </div>
                                        
                        </div>
                       
                            
                    </div>
                                            
                </div>

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Total Students : </li>
                    <li>Total Classes : </li>
                    <li>Total Subjects : </li>
                </ul>
            </div>
            <div class="well well-small">
                <button class="btn btn-block"> Help </button>
                <button class="btn btn-primary btn-block"> Tickets</button>
                <button class="btn btn-info btn-block"> New </button>
                <button class="btn btn-success btn-block"> Users </button>
                <button class="btn btn-danger btn-block"> Profit </button>
                <button class="btn btn-warning btn-block"> Sales </button>
                <button class="btn btn-inverse btn-block"> Stock </button>
            </div>
            <div class="well well-small">
                <span>Profit</span><span class="pull-right"><small>20%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <span>Sales</span><span class="pull-right"><small>40%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                </div>
                <span>Pending</span><span class="pull-right"><small>60%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                </div>
                <span>Summary</span><span class="pull-right"><small>80%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                </div>
            </div>
          
        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
