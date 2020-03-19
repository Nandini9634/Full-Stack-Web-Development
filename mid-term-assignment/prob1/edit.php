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
	<title>Edit / Delete </title>
</head>
<body>
	<div>
		<div>
			<h1>Edit / Delete </h1>
		</div>

		<form action="edit.php?id=<?php echo $id ?>" method="post">
      			<div>
      				<label>Enrollment Number</label>
      				<input type="text" name="enroll" value="<?php echo $enroll; ?>">
      			</div>

      			<div>
      				<label>Name</label>
      				<input type="text" name="name" value="<?php echo $name; ?>">
      			</div>

      			<div>
      				<label>Age</label>
      				<input type="number" name="age" value="<?php echo $age; ?>">
      			</div>

      			<div>
      				<label>Course</label>
      				<input type="text" name="course" value="<?php echo $course; ?>">
      			</div>

      			<div>
      				<label>Branch</label>
      				<input type="text" name="branch" value="<?php echo $branch; ?>">
      			</div>

      			<div>
      				<label>Contact</label>
      				<input type="number" name="contact" value="<?php echo $contact; ?>">
      			</div>

      			<div>
      				<label>Email Id</label>
      				<input type="email_id" name="email_id" value="<?php echo $email_id; ?>">
      			</div>
      			<div>
      				<input type="submit" name='submit' value="submit">
      			</div>
      		</form>
      	</div>
      </body>
      </html>
