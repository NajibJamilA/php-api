<?php
$conn = mysqli_connect("localhost","root","","php-api");

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];

$query = "UPDATE users SET username='$username', password='$password', level='$level', fullname='$fullname' WHERE id='$id'";
mysqli_query($conn, $query);

header("location:indux.php");
 ?>
