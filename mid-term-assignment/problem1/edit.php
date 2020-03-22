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
