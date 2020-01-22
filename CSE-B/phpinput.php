<?php
include('config.php');//to include file
//require('confi7g.php');//agr file incude nhi hui n file ki need h to it will stop d program include will not stop
//require_once('config.php');
 ?>
<?php

if (isset($_POST['btn'])){
  echo $_POST['id'].'<br>';
  echo $_POST['username'].'<br>';
  echo $_POST['age'].'<br>';
  echo $_POST['contact'].'<br>';
  echo $_POST['email'].'<br>';
}
else {
  echo "welcome guest";
}


  // associative array[dictionary]
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Form</title>
  </head>
  <body>
    <form  action="phpinput.php" method="post">
      ID: <input name="id", type="text"
      placeholder="ENTER ID"><br>
      Name: <input type="text" name="username" placeholder="ENTER name"><br>
      Age: <input type="text" name="age" placeholder="ENTER age"><br>
      Contact: <input type="text" name="contact" placeholder="ENTER contact"><br>
      Email: <input type="text" name="email" placeholder="ENTER email"><br>
      <br><input type="submit" name='btn' >
    </form>
  </body>
</html>
