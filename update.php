<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Update</title>
<script src="https://kit.fontawesome.com/9d3122d6ab.js" crossorigin="anonymous"></script>
<body class="bg-info">
    <?php
    $Id=$_GET['id'];
        include "config.php";
        $Rdata=mysqli_query($con,"select * from putdata where id=$Id");
        $data=mysqli_fetch_array($Rdata);
    ?>
<form action="update1.php" method="POST">
<div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-8">
        <h2 class="text-center text-primary font-monospace">Update</h2>
    
    <div class="col-9">
        <input type="text" value="<?php echo $data['name'] ?>" name="name" class="form-control">
    </div>
    <div class="col-2">
        <button class="btn btn-outline-primary">UPDATE</button>
        <input type="hidden" name="ID"value="<?php echo $data['id'] ?>">
        </div>
    </div>
</div>
</form>

</div>
</body>
</html>