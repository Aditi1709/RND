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
  <h2 align="center">NOn-RECURRING BUDGET DETAILS</h2>
  <form method="post" align = "center">
   <div class="form-group" align="center">
      <button type="submit" name="save" class="btn btn-dark">Save</button>
     </div>
   <div class="form-group" >
            <label for="proj_idct">Project ID</label>
            <input type="text" name="proj_idct" size="15">
          </div>
            <label for="Budg_spentcont">Budget Spent</label>
            <input type="text" name="Budg_spentcont" size="30">
    </div>
</form>
 <?php
$ema=$_SESSION['username'];
if(isset($_POST['save'])){

  //contingency
  $spentct = $_POST['Budg_spentcont'];
  $idct = $_POST['proj_idct'];
  mysqli_query($conn," UPDATE NonRecurring SET Budg_Spent='".$spentct."' WHERE Proj_Id ='".$idct."' " );

  header("Location:http://localhost/DBMSMinorProject/public/non-recurring.php");
}
$conn->close();
?>
</div>
</body>
</html>