
<?php  
ob_start();
session_start();
include'connection.php';

$askusers=$db->prepare("SELECT * FROM users where user_email=:mail");
$askusers->execute(array(
  'mail' => @$_SESSION['user_email']
  ));
$count=$askusers->rowCount();
$datausers=$askusers->fetch(PDO::FETCH_ASSOC);
$usermain_id=$datausers['user_id'];

if ($count==0) {
header("Location:login.php");exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome <?php echo $datausers['user_name'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <link href="css/timetable.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <link rel="shortcut icon" href="assets/img/logo2.png">
</head>


<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="index.php"><img src="assets/img/logo2.png" alt="" /></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li class="active">
                    <a href="index.php"><i class="icon-home"></i> Home </a>
                  </li>
                 
           
           
                  <li class="dropdown">
                    <a href="appoinments.php?user_id=<?php echo $datausers['user_id'] ?>"><i class="icon-book"></i> Appointment <i class="icon-angle-down"></i></a>
                
                  </li>
                  <li>
                    <a href="profile.php?user_id=<?php echo $datausers['user_id'] ?>"><i class="icon-user"></i> Profile</a>
                  </li>
                    <li>
                    <a href="logout.php"><i class="icon-signout"></i> Logout</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>