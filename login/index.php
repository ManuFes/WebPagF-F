<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up / Login</title>
  <link rel="icon" href="../img/favicon.png" type="image/png">
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="main">  	
    <input type="checkbox" id="chk" aria-hidden="true">

    <!-- Sign Up Form -->
    <div class="signup">
      <form action="./Registros/register.php" method="POST">
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="username" placeholder="User name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Sign up</button>
      </form>
    </div>

    <!-- Login Form -->
    <div class="login">
      <form action="./Registros/login.php" method="POST">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="text" name="username" placeholder="User name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>

  <br>
  <!-- Notification Message -->
  <?php include './Registros/notifications.php'; ?>
</body>
</html>
