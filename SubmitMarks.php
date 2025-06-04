<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Submit record</title>
</head>
<body bgcolor="navyblue">
<?php
//connect to database
include "dbconnect.php";

//get the values
if(isset($_GET['class']) && isset($_GET['test']))
{
   $class=$_GET['class'];
   $test=$_GET['test'];
   $n=$_GET['hide'];
   //define the loop for $i
   for($i=1;$i<=$n;$i++)
   {
      $enrollno=$_GET['enrollno'.$i];
      $eng=$_GET['english'.$i];
      $hind=$_GET['hindi'.$i];
      $math=$_GET['math'.$i];
      $sci=$_GET['science'.$i];
      $sst=$_GET['sst'.$i];
      $phy=$_GET['phy'.$i];
      $chm=$_GET['chm'.$i];
      $bio=$_GET['bio'.$i];
      //define the sql statement
      $sql_ins = "INSERT into marks(class,enrollno,testcode,english,hindi,math,science,sst,phy,chym,bio) values ('$class','$enrollno','$test','$eng','$hind','$math','$sci','$sst','$phy','$chm','$bio')";
   }
   // Execute the query
   if ($conn->query($sql_ins) == true) 
   {
      echo "$n Record inserted successfully.<br>";
   } 
   else 
   {
      echo "Error inserting record";

   }
}
else
   echo "Not inisatlised";

?>
</body>
</html>