<?php
include "config.php";
echo $Id=$_GET['id'];
mysqli_query($con,"DELETE FROM `putdata` WHERE id=$Id");
header("location:index.php")

?>