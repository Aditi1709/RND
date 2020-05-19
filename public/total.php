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
  <h2 align="center">TOTAL BUDGET DETAILS</h2>
  <div class="container" align="center">
<button type="button" name="Back" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/home.php">Back</a></button></br>
</div>
<style>
td{
width: 200px;
}
</style>
 <?php
 $ema=$_SESSION['username'];
$result = mysqli_query($conn,"SELECT * FROM Budget WHERE Proj_Id=(SELECT Proj_Id FROM PI WHERE Email = '".$ema."')");// or die(mysqli_error($conn));
//$fields_num = mysql_num_rows($result);

if($result->num_rows!=0)
{
echo "<br><center><table><tr><td>Proj_Title</td><td>Proj_Id</td><td>Total_Budg</td><td>Recur_Allott</td><td>Non-Recur_Alott</td></tr></br>";
echo"<br></br>";
while($row=mysqli_fetch_assoc($result)){
  echo "<tr><td>" . $row["Proj_Title"] ."</td><td>" . $row["Proj_Id"] ."</td><td>" . $row["Total_Budg"] ."</td><td>" . $row["Recur_Allott"] ."</td><td>" . $row["Non-Recur_Alott"] ."</td></tr>"; 
}
}
else
echo "NA";

$conn->close();
?>
  </div>
</body>
</html>