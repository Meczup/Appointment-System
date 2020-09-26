<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Register Page</title>
  </head>
  <body><br><br><br>
    <?php if (@$_GET['status']=="haveemail") { ?>
      <center><h4 style="color:red;"> Choese Diffirent Email</h4></center>
    <?php } else { ?>
    <img src="assets/img/logo2.png" style="display: block; margin-left: auto; margin-right: auto;">
    <center><h4>Register Page</h4></center>
  <?php } ?>
<hr>
	<div class="row">
		<div class="col-md-12">
			<div class="user-login-div" style="width: 400px; overflow: hidden; margin-left: 600px">
				
						<form action="process.php" method="POST">
   <div class="form-group">
    <label>Name </label>
    <input type="text" class="form-control" name="user_name" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label>Surname </label>
    <input type="text" class="form-control" name="user_surname" placeholder="Enter Surname">
  </div>
   <div class="form-group">
    <label>Age </label>
    <input type="number" class="form-control" name="user_age" placeholder="Enter Your Age">
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="user_email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="user_pass" placeholder="Password">
  </div>

  <div class="form-group">
    <label>Gender </label><br>
    <input type="radio" name="user_gender" value="male"> Male  &nbsp;  &nbsp;
    <input type="radio" name="user_gender" value="famele"> Female 
  </div>

   <div class="form-group">
    <label>Phone Number </label>
    <input type="Number" class="form-control" name="user_phone" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label >Profile Picture</label>
    <input type="file" class="form-control-file" name="user_picture">
  </div>
  <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
  
			</div>
		</div>
	</div>

  </body>
</html>