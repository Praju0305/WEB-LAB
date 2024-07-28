<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login Form</h2>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <!-- <script> -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $c = 'login.txt';
          $s_c = file($c,FILE_IGNORE_NEW_LINES);
          $valid = false;
          $u = $_POST['username'];
          $p = $_POST['password'];
          foreach($s_c as $cr){
            list($cr_u,$cr_p) = explode(':',$cr);
            if($cr_u === $u && $cr_p === $p){
              $valid = true;
              break;
            }
          }
          if ($valid){
            echo '<script>alert("access granted") </script>';
          }
          else{
              echo '<script>alert("access not granted") </script>';
            }
  
    }
    ?>
    <!-- </script> -->
</body>
</html>
