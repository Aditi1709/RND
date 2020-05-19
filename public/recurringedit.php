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
  <h2 align="center">RECURRING BUDGET DETAILS</h2>
  <form method="post" align = "center">
   <div class="form-group" align="center">
      <button type="submit" name="save" class="btn btn-dark">Save</button>
     </div>
  <h2 align="center">Contingency</h2>
   <div class="form-group" >
            <label for="proj_idct">Project ID</label>
            <input type="text" name="proj_idct" size="15">
          </div>
            <label for="Budg_spentcont">Budget Spent</label>
            <input type="text" name="Budg_spentcont" size="30">
          </div>
  <h2 align="center">Consumables</h2>
     <div class="form-group" align = "center">
         <label for="proj_idcm">Project ID</label>
            <input type="text" name="proj_idcm" size="15" >
          </div>
           <div class="row" align = "center">
            <label for="Budg_spentcons">Budget Spent</label>
            <input type="text" name="Budg_spentcons" size="30">
          </div>
          </div>
  <h2 align="center">Manpower</h2>
    <div class="form-group" align = "center">
         <label for="proj_idm">Project ID</label>
            <input type="text" name="proj_idm" size="15" >
          </div>
           <div class="row" align = "center">
            <label for="Budg_spentmax">Budget Spent</label>
            <input type="text" name="Budg_spentmax" size="30">
          </div>
        </div>
  <h2 align="center">Travel</h2>
     <div class="form-group" align = "center">
         <label for="proj_idt">Project ID</label>
            <input type="text" name="proj_idt" size="15">
          </div>
          <div class="row" align = "center">
            <label for="Budg_spentravel">Budget Spent</label>
            <input type="text" name="Budg_spentravel" size="30">
          </div>
        </div>
</form>
 <?php
$ema=$_SESSION['username'];
if(isset($_POST['save'])){

  //contingency
  $spentct = $_POST['Budg_spentcont'];
  $idct = $_POST['proj_idct'];
  mysqli_query($conn," UPDATE Contingency SET Budg_Spent='".$spentct."' WHERE Proj_Id ='".$idct."' " );

//consumables
  $spentc = $_POST['Budg_spentcons'];
  $idcm = $_POST['proj_idcm'];
  mysqli_query($conn,"UPDATE Consumables SET Budg_Spent='".$spentc."'WHERE Proj_Id = '".$idcm."'");

//manpower
  $spentm = $_POST['Budg_spentmax'];
  $idm = $_POST['proj_idm'];
  mysqli_query($conn,"UPDATE Manpower SET Budg_Spent='".$spentm."'WHERE Proj_Id = '".$idm."'");
//travel
  $spentt = $_POST['Budg_spentravel'];
   $idt = $_POST['proj_idt'];
  mysqli_query($conn,"UPDATE Travel SET Budg_Spent='".$spentt."'WHERE Proj_Id = '".$idt."'"); 
  header("Location:http://localhost/DBMSMinorProject/public/recurring.php");
}
$conn->close();
?>
</div>
</body>
</html>