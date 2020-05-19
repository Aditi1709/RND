<?php require 'controllers/authController.php' ?>
<html>
<head>
  <title>Research Projects</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body background="images/IITINDORE.jpg">
<div class="container">
  <h3 align="center">IIT INDORE RESEARCH PROJECTS</h3>
  <h2 align="center">Welcome <?php echo $_SESSION['username']; ?></h2>
  <h2 align="center">Ongong Projects</h2>
  <form method="post" align = "center">
      <div class="form-group" align="center">
      <button type="submit" name="save" class="btn btn-dark">Save</button>
     </div>
   <div class="form-group" >
            <label for="proj_idct">Project ID</label>
            <input type="text" name="proj_idct" size="15">
          </div>
            <label for="s">Status Change to </label>
            <input type="text" name="s" size="30">
    </div>
   <div class="form-group" >
             <button type="submit" name="Add" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/newproject.php">Add a new Project</a></button>
    </div>
</form>
 <?php
$ema=$_SESSION['username'];
if(isset($_POST['save'])){

  $spentct = $_POST['s'];
  $idct = $_POST['proj_idct'];
  mysqli_query($conn," UPDATE Projects SET Status='".$spentct."' WHERE Proj_Id ='".$idct."' " );

}

$conn->close();
?>
</div>
</body>
</html>