<table class="table">
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Stream</th>
                                                <th>Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "dbconnect.php";
                                            //get the value 
                                            $num=$_GET['n'];
                                            //execute the query
                                            $sql="select *from classmaster where sno='$num'";
                                            $result=$conn->query($sql);
                                            //list the record
                                            $i=1;
                                            $sno=1;
                                            while($row=$result->fetch_assoc())
                                            {
                                                if($i==1){
                                        ?>
                                        
                                            <tr class="success">
                                                <td><?php echo $row['sno']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                                <td><?php echo $row['stream']; ?></td>
                                                <td>
                                                <a href="deleteclass.php?sno=<?php echo $row['sno'];?> ">Delete</a>  &nbsp;
                                                <a href="updateclass.php?sno=<?php echo $row['sno'];?> ">Update</a></td> &nbsp;
                                           
                                                </tr>    
                                        <?php
                                                $i=0;
                                                }
                                                else
                                                {

                                        ?>
                                            <tr class="info">
                                            
                                               
                                                <td><?php echo $row['sno']; ?></td>
                                                <td><?php echo $row['class']; ?></td>
                                                <td><?php echo $row['section']; ?></td>
                                                <td><?php echo $row['stream']; ?></td>
                                                <td>
                                                <a href="deleteclass.php?sno=<?php echo $row['sno'];?> "> Delete</a>  &nbsp;
                                                <a href="updateclass.php?sno=<?php echo $row['sno'];?> "> Update</a></td> &nbsp;
                                           
                                           </tr>
                                           <?php
                                                $i=1;
                                                }
                                                $sno++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>