<?php include('config.php'); ?>

<?php
$id= $_GET['id'];
echo "id to be updated is: ".$id;
 ?>

 <?php

$sql="SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$data= $result->fetch_assoc();
$username=$data['username'];
$age=$data['age'];
$contact=$data['contact'];
$email=$data['email'];
  ?>


 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Input Form</title>
   </head>
   <body>
     <form  action="edit.php" method="post">
       Name: <input type="text" name="username" placeholder="ENTER name" value=<?php echo "$username"; ?>><br>
       Age: <input type="text" name="age" value=<?php echo "$age"; ?> ><br>
       Contact: <input type="text" name="contact" value=<?php echo "$contact"; ?> ><br>
       Email: <input type="text" name="email" value=<?php echo "$email"; ?> ><br>
       <br><input type="submit" name='btn'  value="update">
     </form>

   </body>
 </html>
