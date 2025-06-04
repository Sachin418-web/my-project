<table class="table">
                                            <tr>
                                                <th>Sno.</th>
                                                <th>WorkDate</th>
                                                <th>DiaryContant</th>
                                                <th>Images</th>
                                                <th>Ctype</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Control</th>    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include "dbconnect.php";
                                            //execute the query
                                            $num=$_GET['n'];
                                            $sql="Select * from dailydiary where sno='$num'";
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
                                                <td>
                                                <a href="deleteDairy.php?sno=<?php echo $row['sno'];?>"> Delete</a>
                                                <a href="updateDairy.php?sno=<?php echo $row['sno'];?>"> Update</a>
                                                </td>       
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
                                                <td>
                                                <a href="deleteDairy.php?sno=<?php echo $row['sno'];?>"> Delete</a>
                                                <a href="updateDairy.php?sno=<?php echo $row['sno'];?>"> Update</a>
                                                </td>
                                           </tr>
                                           
                                           <?php
                                                $i=1;
                                                }
                                                $sno++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>