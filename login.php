<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>
<body>
    <form id="form" action="singin.php" method="POST">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="User Name" required name="name">
        <label for="floatingInput">User Name</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" placeholder="password" required name="pass">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floatin">
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
        <a href="register.php" class="mt-10">Register</a>
      </div>
    </form>
    
</body>
</html>