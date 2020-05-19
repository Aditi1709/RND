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
</head>
<body background="images/IITINDORE.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-div">
        <form action="signup.php" method="post">
          <h3 class="text-center">Register</h3>
          <?php if(count($errors)>0): ?>
            <div class = "alert alert-danger">
              <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="name" name="username" class="form-control form-control-lg">
          </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control form-control-lg">
          </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <!--  <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password" name="PasswordConf" class="form-control form-control-lg">
          </div> -->
          <div class="form-group">
            <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
          </div>
          <p class="text-center"><font size="5">Already a member?<a href="login.php">SignIn</a></font></p>
          </div>
        </form>
    </div>
  </div>
</body>
</html>