
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login Page</title>
  </head>
  <body><br><br><br>
  	<?php if (@$_GET['status']=="passerror") {?>
  		 <center><h4 style="color: red"><b>Password Nat Equal</b></h4></center>
  <?php	}elseif(@$_GET['login']=="no") {  ?>
<center><h4 style="color:red">You dont have account </h4></center>

<center><small style="color: blue"><b>Redirect to member page ... <a href="register.php" style="color:green"> -> Register Page</a>.</b></small></center>
  <?php } else { ?>
    <img src="assets/img/logo2.png" style="display: block; margin-left: auto; margin-right: auto;">
    <center><h4>Login Page</h4></center>
<?php } ?>
<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="user-login-div" style="width: 400px; overflow: hidden; margin-left: 600px">
						<form action="process.php" method="POST">
   <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="user_email">
  </div>
  <div class="form-group">
    <label >Password </label>
    <input type="password" class="form-control"  placeholder="Password one" name="user_pass">
  </div>
   <div class="form-group">
    <label >Again Password</label>
    <input type="password" class="form-control"  placeholder="Again password " name="user_pass2">
  </div>
  <button type="submit" class="btn btn-primary" name="loginuser">Submit</button>
</form>
			</div>
		</div>
	</div>
  </body>
</html>