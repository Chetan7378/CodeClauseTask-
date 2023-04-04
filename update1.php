<?php
include "config.php";
$Name=$_POST['name'];
$Id=$_POST['ID'];
mysqli_query($con,"UPDATE `putdata` SET `name`='$Name' WHERE id=$Id");
header("location:index.php");
?>