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
                        <h1> Student's Details </h1>
                    </div>
                </div>
                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->
                          <div class="row">
                    
                    <div class="col-lg-13">
                        

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Student's Details
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <script lang="javascript">
                                                function show()
                                                {
                                                    var ob;
                                                    try{
                                                        ob=new XMLHttpRequest();
                                                    }
                                                    catch(e){
                                                            try{
                                                                ob=new ActiveXObject("Msxml.XMLHTTP");
                                                            }
                                                            catch(e){
                                                                try{
                                                                      ob=new ActiveXObject("Microsoft.XMLHTTP");
                                                                }
                                                                catch(e){
                                                                    alert("Browser Not Supported Ajax");
                                                                }
                                                            }
                                                    }
                                                    ob.onreadystatechange=function()
                                                    {
                                                        if(ob.readyState==4){
                                                            document.getElementById("dresult").innerHTML = ob.responseText;
                                                        }
                                                    }
                                                    var id=document.getElementById("serch").value;
                                                    //send the url
                                                    ob.open("GET","ShowStudent_Ajax.php?n="+id,true);
                                                    ob.send();
                                                }
                                                </script>
                                        <tr>
                                            <label><input type="text" id="serch" placeholder="Search" >
                                            <input type="button" value=Search onclick="show()"></label>
                                            </tr>
                                            </table>
                                            <span id="dresult">
                                                <table class="table">
                                            <tr>
                                                <th>#</th>
                                                <th>EnrollNo</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>FatherName</th>
                                                <th>MotherName</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Email-Id</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "dbconnect.php";
                                            //execute the query
                                            $sql="select *from  studentmaster";
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
                                                <td><?php echo $row['enrollno']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                                <td><?php echo $row['fname']; ?></td>
                                                <td><?php echo $row['mname']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['emailid']; ?></td>
                                                <td>
                                                <a href="deleteStudent.php?sno=<?php echo $row['sno'];?>"> Delete</a>  &nbsp;
                                                <a href="updatestudent.php?sno=<?php echo $row['sno'];?> "> Update</a> </td> &nbsp;
                                            
                                            </tr>
                                        <?php
                                                $i=0;
                                                }
                                                else
                                                {

                                        ?>


                                            <tr class="info">
                                            <td><?php echo $row['sno']; ?></td>
                                            <td><?php echo $row['enrollno']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                                <td><?php echo $row['fname']; ?></td>
                                                <td><?php echo $row['mname']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><?php echo $row['emailid']; ?></td>
                                                <td>
                                                <a href="deleteStudent.php?sno=<?php echo $row['sno'];?>"> Delete</a>  &nbsp;
                                                <a href="updatestudent.php?sno=<?php echo $row['sno'];?> "> Update</a> </td> &nbsp;
                                            </tr>
                                           <?php
                                                $i=1;
                                                }
                                                $sno++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <b>Student's Details
                            </div>
                            
                            <div class="panel-body">
                                <form name="mform" action="student.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Sno.</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="text1" name="sno" placeholder="SNo." class="form-control" />
                                            </div>
                                        </div>
                            </div>

                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">EnrollNo.</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="text1" name="eno" placeholder="EnrollNo." class="form-control" />
                                            </div>
                                        </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">  
                                    <label for="text1" class="control-label col-lg-4">Student's Name</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="text1" name="sname" placeholder="Student's Name" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">  
                                    <label for="text1" class="control-label col-lg-4">Class</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="text1" name="class" placeholder="Classes" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Section</label>

                                            <div class="col-lg-8">
                                            <select data-placeholder="Choose a Class" name="opt" class="form-control chzn-select" tabindex="2">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                            </select>
                                            </div>
                                        </div>
                            </div>
                            
                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Father Name</label>
                                            <div class="col-lg-8">
                                                <input type="text" id="text1" name="fname" placeholder="Father Name" class="form-control" />
                                            </div>
                                        </div>
                            </div>
                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Mother Name</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="text1" name="mname" placeholder="Mother Name" class="form-control" />
                                            </div>
                                        </div>
                            </div>
                            <div class="panel-body">
                                 <div class="form-group">
                                            <label  for="text1" class="control-label col-lg-4">Address</label>
                                            <div class="col-lg-8">
                                            <input type="text" id="text1" name="add" placeholder="Address" class="form-control" />
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Phone</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="text1" name="phone" placeholder="Phone No" class="form-control" />
                                            </div>
                                        </div>
                            </div>
                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Email-Id</label>

                                            <div class="col-lg-8">
                                                <input type="email" id="text1" name="email-id" placeholder="Email-Id" class="form-control" />
                                            </div>
                                        </div>
                            </div>
                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Password</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="text1" name="password" placeholder="Password" class="form-control" />
                                            </div>
                                        </div>
                            </div>
                            <div class="panel-body">
                                        <div class="form-group">
                                            <label for="text1" class="control-label col-lg-4">Image's</label>

                                            <div class="col-lg-8">
                                                <input type="file" id="text1" name="image" class="form-control" />
                                            </div>
                                        </div>
                            </div>
                                        <p align=right><input type=submit Value=Submit style=margin-top:10px;display:flexbox;margin-right:12px;border-radius:5px;-background-Color:lightblue;><input type=reset value=Reset style=margin-top:10px;display:flexbox;margin-right:12px;border-radius:5px;-background-Color:lightblue;>
                                        </form>   
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
