<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="bg-info">
<link href="index.css" rel="stylesheet">
<form action="insert.php" method="POST">
<div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
        <h2 class="text-center text-primary font-monospace">TO DO</h2>
    
    <div class="col-8">
        <input type="text" name="name" class="form-control"><br>
        <span>SELECT PRIORITY :</span>
    <input type="radio" name="prior"  value="2"checked>HIGH
    <input type="radio" name="prior"  value="1">MEDIUM
    <input type="radio" name="prior"  value="0">LOW
    </div>
    
    <div class="col-2">
        <button class="btn btn-outline-primary">ADD</button>
        </div>
    </div>
</div>
</form>

<?php
include "config.php";
$rawData=mysqli_query($con,"select * from putdata ORDER BY prior DESC");

?>

<div class="container">
    <div class="col-6 bg-white m-auto mt-3">
   
<table class="table table-secondary">
  <tbody>
    <?php
    while($row=mysqli_fetch_array($rawData)){
    

    ?>
  <tr>
    <td><?php echo $row['name']  ?></td>
    <td style="width:10%;"><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger">DONE</a></td>
    <td style="width:10%;"><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-outline-success">UPDATE</a></td>
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