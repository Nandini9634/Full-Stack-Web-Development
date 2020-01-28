<?php
include('config.php');
?>

<?php
if (isset($_POST['btn'])){
 echo "dear, ".$_POST['username']."you are welcome".'<br>';
  $username= $_POST['username'];
  $age= $_POST['age'];
  $contact= $_POST['contact'];
  $email= $_POST['email'];

  $sql="insert into users(username,age,contact,email) VALUES ('$username','$age','$contact','$email')";
  mysqli_query($conn,$sql);
}
else {
  echo "welcome guest";
}


  // associative array[dictionary]
 ?>
