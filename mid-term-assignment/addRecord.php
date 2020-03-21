<?php
include('config.php');
?>

<?php
if (isset($_POST['submit'])){
  $enroll=$_POST["enroll"];
  $name=$_POST["name"];
  $age=$_POST["age"];
  $course=$_POST["course"];
  $branch=$_POST["branch"];
  $contact=$_POST["contact"];
  $email_id=$_POST["email_id"];
  $insert ="INSERT INTO add_details (`enroll`,`name`,`age`,`course`,`branch`,`contact`,`email_id`) VALUES ('$enroll','$name','$age', '$course', '$branch','$contact','$email_id');";
    if (mysqli_query($conn, $insert))
    {
      header("location:details.php?msg=successfully_registered");
    }
    else
    {
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
  }
  else{
    echo "Welcome Guest";
}
  ?>
