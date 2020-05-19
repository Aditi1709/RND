<?php require 'controllers/authController.php' ?>
<html>
<head>
  <title>Research Projects</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body background="images/IITINDORE.jpg">
<div class="container">
  <h3 align="center">IIT INDORE RESEARCH PROJECTS</h3>
  <h2 align="center">Welcome <?php echo $_SESSION['username']; ?></h2>
  <h2 align="center">ONGOING PROJECTS</h2>
<div class="container" align="center">
  <button type="button" name="Edit" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/ongoingedit.php">Edit</a></button></br>
<button type="button" name="Back" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/home.php">Back</a></button></br>
</div>
<style>
td{
width: 200px;
}
</style>
 <?php
 $ema=$_SESSION['username'];
$result = mysqli_query($conn,"SELECT * FROM Projects WHERE Status=\"Ongoing\" AND PI_Id=(SELECT PI_ID FROM PI WHERE Email = '".$ema."')") or die(mysqli_error($conn));
//$fields_num = mysql_num_rows($result);

if($result->num_rows!=0)
{
echo "<br><center><table><tr><td>Proj_Title</td><td>Proj_Id</td><td>Start_Date</td><td>Total_Budget</td><td>Funding_Agen</td><td>Budg_Duration</td><td>Status</td><td>PI_Id</td></tr></br>";
echo"<br></br>";
while($row=mysqli_fetch_assoc($result)){
  echo "<tr><td>" . $row["Proj_Title"] ."</td><td>" . $row["Proj_Id"] ."</td><td>" . $row["Start_Date"] ."</td><td>" . $row["Total_Budget"] ."</td><td>" . $row["Funding_Agen"] ."</td><td>" . $row["Budg_Duration"] ."</td><td>" . $row["Status"] ."</td><td>" . $row["PI_Id"] ."</td></tr>"; 
}
}
else
echo "NONE TILL DATE";

$conn->close();
?>
</div>
</body>
</html>