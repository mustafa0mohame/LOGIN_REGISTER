<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register page</title>
    <script>
         function validate(){

            var a = document.getElementById("pass").value;
            var b = document.getElementById("cpass").value;
            if (a!=b) {
            alert("Passwords do no match");
            return false;
            }

    }
    </script>
</head>
<body>
    <form id="form" onSubmit="return validate();" action="res.php" method="POST">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="First Name" required name="fname">
        <label for="floatingInput">First Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="Last Name" required name="lname">
        <label for="floatingInput">Last Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" placeholder="Your Email" required name="email">
        <label for="floatingInput">Email</label>
      </div>

      <div class="form-floating  mb-3">
        <input type="password" class="form-control " id="pass" placeholder="password" required name="pass">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="cpass" placeholder="confirm password" required name="cpass">
        <label for="floatingPassword">confirm  Password</label>
      </div>

      <div class="form-floatin">
        <button type="submit" class="btn btn-primary"  value="submit" name="submit">Register</button>
      </div>
    </form>
    
</body>
</html>