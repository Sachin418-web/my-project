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
                                            //get the value 
                                            $num=$_GET['n'];
                                            //execute the query
                                            $sql="select *from  studentmaster where enrollno='$num'";
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