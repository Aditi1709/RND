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
  <h2 align="center">ADD A NEW PROJECT</h2>
  <form method="post" align = "center">
     <div class="form-group" align="center">
      <label for="proj_title">Project Title</label>
            <input type="text" name="proj_title" size="15">
            <label for="proj_id">Project ID</label>
            <input type="text" name="proj_id" size="15">
            <label for="startdate">Start date</label>
            <input type="text" name="startdate" size="15">
            <label for="total_budget">Total Budget</label>
            <input type="text" name="total_budget" size="15">
            <label for="fundingagency">Funding agency</label>
            <input type="text" name="fundingagency" size="15">
            <label for="budg">Budget Duration</label>
            <input type="text" name="budg" size="15">
            <label for="status">Status(Ongoing or Completed)</label>
            <input type="text" name="status" size="15">
            <label for="PI_Id">PI ID</label>
            <input type="text" name="PI_Id" size="15">
            <div class="form-group" >
              <br></br>
                           <h3 align ="center">Total Budget</h3>
              <div class="form-group" align="center">
      <label for="proj_titleb">Project Title</label>
            <input type="text" name="proj_titleb" size="15">
            <label for="proj_idb">Project ID</label>
            <input type="text" name="proj_idb" size="15">
            <label for="total_budgetb">Total Budget</label>
            <input type="text" name="total_budgetb" size="15">
            <label for="ra">Recurring ALlotted</label>
            <input type="text" name="ra" size="15">
            <label for="nra">Non-Recurring Allotted</label>
            <input type="text" name="nra" size="15">
            <div class="form-group" >
              <br></br>
             <h3 align ="center">Consumables</h3>
              <div class="form-group" align="center">
      <label for="proj_titlecm">Project Title</label>
            <input type="text" name="proj_titlecm" size="15">
            <label for="proj_idcm">Project ID</label>
            <input type="text" name="proj_idcm" size="15">
            <label for="total_budgetcm">Budget Allotted</label>
            <input type="text" name="total_budgetcm" size="15">
            <label for="budg_spent">Budget Spent/label>
            <input type="text" name="budg_spent" size="15">
            <label for="budg_left">Budget Left</label>
            <input type="text" name="budg_left" size="15">
            <div class="form-group" >
              <br></br>
            <h3 align ="center">Contingency</h3>
              <div class="form-group" align="center">
      <label for="proj_titlec">Project Title</label>
            <input type="text" name="proj_titlec" size="15">
            <label for="proj_idc">Project ID</label>
            <input type="text" name="proj_idc" size="15">
            <label for="total_budgetc">Budget Allotted</label>
            <input type="text" name="total_budgetc" size="15">
            <label for="budg_spentc">Budget Spent/label>
            <input type="text" name="budg_spentc" size="15">
            <label for="budg_leftc">Budget Left</label>
            <input type="text" name="budg_leftc" size="15">
            <div class="form-group" >
              <br></br>
            <h3 align ="center">Manpower</h3>
              <div class="form-group" align="center">
      <label for="proj_titlem">Project Title</label>
            <input type="text" name="proj_titlem" size="15">
            <label for="proj_idm">Project ID</label>
            <input type="text" name="proj_idm" size="15">
            <label for="total_budgetm">Budget Allotted</label>
            <input type="text" name="total_budgetm" size="15">
            <label for="budg_spentm">Budget Spent/label>
            <input type="text" name="budg_spentm" size="15">
            <label for="budg_leftm">Budget Left</label>
            <input type="text" name="budg_leftm" size="15">
            <div class="form-group" >
                 <br></br>
            <h3 align ="center">Travel</h3>
              <div class="form-group" align="center">
      <label for="proj_titlet">Project Title</label>
            <input type="text" name="proj_titlet" size="15">
            <label for="proj_idt">Project ID</label>
            <input type="text" name="proj_idt" size="15">
            <label for="total_budgett">Budget Allotted</label>
            <input type="text" name="total_budgett" size="15">
            <label for="budg_spentt">Budget Spent</label>
            <input type="text" name="budg_spentt" size="15">
            <label for="budg_leftt">Budget Left</label>
            <input type="text" name="budg_leftt" size="15">
            <div class="form-group" >
             <button type="submit" name="Add" class="btn btn-dark">Add a new Project</button>
    </div>
          </div>
</form>
 <?php
$ema=$_SESSION['username'];
if(isset($_POST['Add'])){
  //project
  $proj_title = $_POST['proj_title'];
  $proj_id = $_POST['proj_id'];
  $startdate = $_POST['startdate'];
  $total_budget = $_POST['total_budget'];
  $fundingagency=$_POST['fundingagency'];
  $budg=$_POST['budg'];
  $status=$_POST['status'];
  $PI_Id=$_POST['PI_Id'];
  mysqli_query($conn,"INSERT INTO Projects VALUES ('$proj_title','$proj_id','$startdate','$total_budget','$fundingagency','$budg','$status','$PI_Id')");
  //budget
  $proj_titleb = $_POST['proj_titleb'];
  $proj_idb = $_POST['proj_idb'];
  $total_budgetb = $_POST['total_budgetb'];
  $ra=$_POST['ra'];
  $nra=$_POST['nra'];
  mysqli_query($conn,"INSERT INTO Budget VALUES ('$proj_titleb','$proj_idb','$total_budgetb','$ra','$nra')");
  //consumables
   $proj_titlecm = $_POST['proj_titlecm'];
  $proj_idcm = $_POST['proj_idcm'];
  $total_budgetcm = $_POST['total_budgetcm'];
  $budg_spent=$_POST['budg_spent'];
  $budg_left=$_POST['budg_left'];
  mysqli_query($conn,"INSERT INTO Consumables VALUES ('$proj_titlecm','$proj_idcm','$total_budgetcm','$budg_spent','$budg_left)");
//contingency
   $proj_titlec = $_POST['proj_titlec'];
  $proj_idc = $_POST['proj_idc'];
  $total_budgetc= $_POST['total_budgetc'];
  $budg_spentc=$_POST['budg_spentc'];
  $budg_leftc=$_POST['budg_leftc'];
  mysqli_query($conn,"INSERT INTO Contingency VALUES ('$proj_titlec','$proj_idc','$total_budgetc','$budg_spentc','$budg_leftc)");
//manpower
   $proj_titlem = $_POST['proj_titlem'];
  $proj_idm = $_POST['proj_idm'];
  $total_budgetm= $_POST['total_budgetm'];
  $budg_spentm=$_POST['budg_spentm'];
  $budg_leftm=$_POST['budg_leftm'];
  mysqli_query($conn,"INSERT INTO Manpower VALUES ('$proj_titlem','$proj_idm','$total_budgetm','$budg_spentm','$budg_leftm)");
  //travel
    $proj_titlet = $_POST['proj_titlet'];
  $proj_idt = $_POST['proj_idt'];
  $total_budgett= $_POST['total_budgett'];
  $budg_spentt=$_POST['budg_spentt'];
  $budg_leftt=$_POST['budg_leftt'];
  mysqli_query($conn,"INSERT INTO Travel VALUES ('$proj_titlet','$proj_idt','$total_budgett','$budg_spentt','$budg_leftt)");
}
$conn->close();
?>
</div>
</body>
</html>