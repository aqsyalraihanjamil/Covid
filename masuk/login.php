<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="indexstyle.css">
</head>

<body>
  <div class="container col-md-10">
    <div class="row">
      <div class="col-md-8 justify-content-center align-self-center p-4">
        <img src="../images/index-1.png" width="900" alt="">
      </div>
      <div class="col-md-4">
        <form class="box" action="proses_login.php" method="post">
          <h1>Login</h1>
          <input type="text" name="username" value="" class="input" placeholder="Username">
          <input type="password" name="password" placeholder="Password" value="" class="input">
          <input type="submit" name="login" value="Login" class="submit">
          <br><br><br>
        </form>
      </div>
    </div>
  </div>
</body>


</html>