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

<html>
  <head>
  <title>EDIT</title>
  </head>
  <body>
    <div>

<form action=" edit.php " method="post">
    <div>
				<label>Enrollment Number</label>
				<input type="text" name="enroll" placeholder="GE-172012584" required="required">
			</div>
			<div>
				<label>Name</label>
				<input type="text" name="name" placeholder="Nandini Agarwal" required="required">
			</div>
			<div>
				<label>Age</label>
				<input type="number" name="age" placeholder="20" required="required">
			</div>
			<div>
				<label>Course</label>
				<input type="text" name="course" placeholder="B.Tech." required="required">
			</div>
			<div>
				<label>Branch</label>
				<input type="text" name="branch" placeholder="Computer Science" required="required">
			</div>
			<div>
				<label>Contact</label>
				<input type="number" name="contact" placeholder="9634889767" required="required">
			</div>
			<div>
				<label>Email Id</label>
				<input type="email_id" name="email_id" placeholder="nandiniagarwal9634@gmail.com" required="required">
			</div>
			<div>
				<button type="submit" name="submit">Submit</button>
			</div>
</form>
</div>
  </body>
</html>
