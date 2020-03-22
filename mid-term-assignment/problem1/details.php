<?php include('config.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `add_details`";
$result = mysqli_query($conn, $sql);
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
      
   </tr>
   <?php } ?>
   </tbody>
    </table>
</body>
</html>
