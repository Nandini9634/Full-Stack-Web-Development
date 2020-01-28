<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cseb2020';

$conn=mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
    echo 'Connection Successful!';
    //$sql=INSERT into users Values();
  //  mysqli_query($conn,$sql);
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>
