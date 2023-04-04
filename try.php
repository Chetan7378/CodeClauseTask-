<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="bg-primary">

<form action="insert.php" method="POST">
<div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
        <h2 class="text-center text-primary font-monospace">TO DO</h2>
    
    <div class="col-8">
        <input type="text" name="name" class="form-control"><br>
        <span>SELECT PRIORITY</span>
        <input type="radio" name="Direction"  value="Direction1" checked >NORTH
    <input type="radio" name="Direction"  value="Direction2">SOUTH
    <input type="radio" name="Direction"  value="Direction3">EAST
    <input type="radio" name="Direction"  value="Direction4">WEST
    </div>
    
    <div class="col-2">
        <button class="btn btn-outline-primary">ADD</button>
        </div>
    </div>
</div>
</form>

<?php
include "config.php";
$rawData=mysqli_query($con,"select * from inserttolist");

?>

<div class="container">
    <div class="col-6 bg-white m-auto mt-3">
<table class="table">
  <tbody>
    <?php
    while($row=mysqli_fetch_array($rawData)){
    

    ?>
  <tr>
    <td><?php echo $row['id']  ?></td>
    <td><?php echo $row['name']  ?></td>
    <td style="width:10%;"><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger">Delete</a></td>
    <td style="width:10%;"><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-outline-success">Update</a></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
</div>
</body>
</html>