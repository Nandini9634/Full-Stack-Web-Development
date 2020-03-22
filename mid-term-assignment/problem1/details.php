<?php include('config.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `add_details`";
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
?>
  <table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Enrollment Number</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Contact</th>
            <th>Email Id</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
   <?php
   while($data = $result->fetch_assoc()){ ?>
   <tr>
   <td><?php echo $data['id'];?></td>
   <td><?php echo $data["enroll"] ?></td>
   <td><?php echo $data["name"] ?></td>
   <td><?php echo $data["age"] ?></td>
   <td><?php echo $data["course"] ?></td>
   <td><?php echo $data["branch"] ?></td>
   <td><?php echo $data["contact"] ?></td>
   <td><?php echo $data["email_id"] ?></td>
   <td> <a href="edit.php ?id=<?php echo $data['id'];?>">Edit</a> </td>
   <td> <a href="edit.php ?id=<?php echo $data['id'];?>">Delete</a></td>
   </tr>
   <?php } ?>
   </tbody>
   <?php } ?>
    </table>
</body>
</html>
