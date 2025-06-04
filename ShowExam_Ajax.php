<table class="table">
                                            <tr>
                                                <th>Sno.</th>
                                                <th>EnrollNo.</th>
                                                <th>ExamName</th>
                                                <th>DOT</th>
                                                <th>Total</th>
                                                <th>MarkObt</th>
                                                <th>Percentage</th>    
                                                <th>Control's</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "dbconnect.php";
                                            //get the value
                                            $num=$_GET['n'];
                                            //execute the query
                                            $sql="select *from examrecord where sno='$num'";
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
                                                <td><?php echo $sno ?></td>
                                                <td><?php echo $row['enrollno']; ?></td>
                                                <td><?php echo $row['examname']; ?></td>
                                                <td><?php echo $row['dot']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                <td><?php echo $row['markobt']; ?></td>
                                                <td><?php echo $row['percentage']; ?></td>
                                                <td>
                                                <a href="deleteExam.php?sno=<?php echo $row['sno'];?>"> Delete</a>  &nbsp;
                                                <a href="updateexam.php?sno=<?php echo $row['sno'];?> "> Update</a> </td> &nbsp;
                                            
                                            </tr>
                                        <?php
                                                $i=0;
                                                }
                                                else
                                                {
                                        ?>
                                            <tr class="info">
                                            <td><?php echo $sno; ?></td>
                                            <td><?php echo $row['enrollno']; ?></td>
                                                <td><?php echo $row['examname']; ?></td>
                                                <td><?php echo $row['dot']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                <td><?php echo $row['markobt']; ?></td>
                                                <td><?php echo $row['percentage']; ?></td>
                                                <td>
                                                <a href="deleteExam.php?sno=<?php echo $row['sno'];?>"> Delete</a>  &nbsp;
                                                <a href="updateexam.php?sno=<?php echo $row['sno'];?> "> Update</a> </td> &nbsp;
                                            
                                           </tr>
                                           <?php
                                                $i=1;
                                                }
                                                $sno++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>