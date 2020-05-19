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
  <h2 align="center">ENTER </h2>
  <form action="PI.php" method="post" align = "center">
   <div class="form-group" align="center">
      <button type="submit" name="Enter" class="btn btn-dark"><a href = "http://localhost/DBMSMinorProject/public/home.php">Enter</a></button>
     </div>
   <div class="form-group" >
            <label for="p">PI_ID</label>
          <input type="text" name="p" class="form-control form-control-lg">
          </div>
    </div>
</form>
</div>
</body>
</html>