<?php
include('config.php');

<?php

  $enroll=$_POST["enroll"];
  $name=$_POST["name"];
  $age=$_POST["age"];
  $course=$_POST["course"];
  $branch=$_POST["branch"];
  $contact=$_POST["contact"];
  $email_id=$_POST["email_id"];
  $insert ="INSERT INTO add_details (`enroll`,`name`,`age`,`course`,`branch`,`contact`,`email_id`) VALUES ('$enroll','$name','$age', '$course', '$branch','$contact','$email_id');";
?>
