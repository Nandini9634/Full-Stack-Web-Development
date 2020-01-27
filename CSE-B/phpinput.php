
<?php
include('config.php');
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Form</title>
  </head>
  <body>
    <form  action="details.php" method="post">
      Name: <input type="text" name="username" placeholder="ENTER name"><br>
      Age: <input type="text" name="age" placeholder="ENTER age"><br>
      Contact: <input type="text" name="contact" placeholder="ENTER contact"><br>
      Email: <input type="text" name="email" placeholder="ENTER email"><br>
      <br><input type="submit" name='btn' >
    </form>

  </body>
</html>
