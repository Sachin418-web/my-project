<table class="table">
                                            <tr>
                                                <th>#</th>
                                                <th>Subject Code</th>
                                                <th>Subject Name</th>
                                                <th>Controls</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "dbconnect.php";
                                            //get the value 
                                            $num=$_GET['n'];
                                            //execute the query
                                            $sql="select *from subjectmaster where sno='$num'";
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
                                                <td><?php echo $row['subjectcode']; ?></td>
                                                <td><?php echo $row['subjectname']; ?></td>
                                                <td>
                                                <a href="deletesubject.php?sno=<?php echo $row['sno'];?>"> Delete</a>  &nbsp;
                                                <a href="updatesubject.php?sno=<?php echo $row['sno'];?> "> Update</a> </td> &nbsp;             
                                            </tr>
                                        <?php
                                                $i=0;
                                                }
                                                else
                                                {

                                        ?>


                                            <tr class="info">
                                            <td><?php echo $sno; ?></td>
                                                <td><?php echo $row['subjectcode']; ?></td>
                                                <td><?php echo $row['subjectname']; ?></td>
                                                <td>
                                                <a href="deletesubject.php?sno=<?php echo $row['sno'];?> "> Delete</a>  &nbsp;
                                                <a href="updatesubject.php?sno=<?php echo $row['sno'];?> "> Update</a></td> &nbsp;
                                           
                                                </tr>
                                           <?php
                                                $i=1;
                                                }
                                                $sno++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>