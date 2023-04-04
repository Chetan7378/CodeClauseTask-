<?php
 echo $name=$_POST['name'];
 echo $prior=$_POST['prior'];
include "config.php";
mysqli_query($con,"INSERT INTO `putdata`(`name`, `prior`) VALUES ('$name','$prior')");
header("location:index.php");
?>
