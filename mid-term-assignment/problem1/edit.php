<?php
include('config.php');
?>
<?php $id=$_GET['id'];
?>
<?php
    $sql = "SELECT * FROM `add_details` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $enroll=$data["enroll"];
    $name=$data["name"];
    $age=$data["age"];
    $course=$data["course"];
    $branch=$data["branch"];
    $contact=$data["contact"];
    $email_id=$data["email_id"];
?>
<?php
if(isset($_POST['submit'])){
  $enroll=$_POST["enroll"];
  $name=$_POST["name"];
  $age=$_POST["age"];
  $course=$_POST["course"];
  $branch=$_POST["branch"];
  $contact=$_POST["contact"];
  $email_id=$_POST["email_id"];
  $sql = "UPDATE `add_details` SET enroll='$enroll', name='$name', age='$age', course='$course', branch='$branch', contact='$contact', email_id='$email_id'  WHERE id='$id'";
  if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
     echo "Please click update button";
}
?>
