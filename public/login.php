<?php require_once 'controllers/authController.php'; ?>
<html> 
<head>
 <title>Research Projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<title>Login</title>
</head>
<body background="images/IITINDORE.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-div login">
        <form action="login.php" method="post">
          <h3 class="text-center">Login</h3>
          <?php if(count($errors)>0): ?>
            <div class = "alert alert-danger">
              <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          <div class="form-group">
            <label for="username">Email</label>
            <input type="text" name="username" class="form-control form-control-lg">
          </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
          </div>
          <p class="text-center"><font size="5">Not yet a member?<a href="signup.php">Login</a></font></p>
          </div>
    </div>
  </div>
  <script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
</body>
</html>