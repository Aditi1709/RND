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
<body background="images/try.jpg">
<div class="container" align="center">
  <h3 align="center">IIT INDORE RESEARCH PROJECTS</h3>
  <h2 align="center">Welcome <?php echo $_SESSION['username']; ?></h2>
  <button type="button" name="Ongoing" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/ongoing.php">Ongoing Projects</a></button><br>
  <button type="button" name="Completed" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/completed.php">Completed Projects</a></button></br>
   <button type="button" name="Budget" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/total.php">Allotted Budget Details</a></button></br>
    <button type="button" name="Recurring"style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/recurring.php">Recurring Budget Details</a></button></br>
     <button type="button" name="Non-Recurring" style="margin:16px" class="btn btn-dark"><a href="http://localhost/DBMSMinorProject/public/non-recurring.php">Non-Recurring Budget Details</a></button></br>
      <form action="signup.php" method="post">
      <br><button type="submit" name="logout" style="margin:16px" class="btn btn-dark">LOGOUT</a></button></br>
    </form>
</div>
</body>