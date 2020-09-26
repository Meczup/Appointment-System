<?php include'header.php'; ?>
<?php 
$askprofiluser=$db->prepare("SELECT * FROM users where user_id=:id");
$askprofiluser->execute(array(
  'id' => @$_GET['user_id']
  ));
$count=$askprofiluser->rowCount();
$profildatauser=$askprofiluser->fetch(PDO::FETCH_ASSOC);
$user_id =$profildatauser['user_id'];

?>
    <section id="subintro">
      <div class="container">
        <div class="row"> 
        </div>
      </div>
    </section>
    <section id="maincontent">
      <div class="container">
        <div class="row">



          <div class="span4">
            <aside>
              <div class="widget">
     
              </div>
              <div class="widget">
                <h4 class="rheading">Picture<span></span></h4>
                <ul class="social-links">

                  <form action="process.php" method="POST" enctype="multipart/form-data">
                <!-- Profil resim sorgulama -->
                    <?php if (strlen($profildatauser['user_picture'])>0) { ?>
                     <img src="img/<?php echo $profildatauser['user_picture'] ?>">

                  <?php  }else { ?>
                    <img src="img/no-image-available.png">
                  <?php } ?>

                       <div class="form-group">
    <label style="color: red" >Choose</label>
    <input type="file" class="form-control-file" name="user_picture">
    <input type="hidden" name="user_id" value="<?php echo $profildatauser['user_id'] ?>">
    <input type="hidden" name="eski_yol" value="img/<?php echo $profildatauser['user_picture'] ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="userpicture">Update</button>
                  </form>
                
                </ul>
              </div>
            </aside>
          </div>
          <div class="span8">
          <fieldset style="border:1px solid #ddd; padding: 10px">
              <form action="process.php" method="POST"   >
              <div class="row">
                <div class="span4 form-group">
                      <input type="hidden" name="user_id" value="<?php echo $profildatauser['user_id'] ?>">

                  <label>Name</label>
                  <input type="text" class="input-block-level"  placeholder="Your Name"   name="user_name"  value="  <?php echo $profildatauser['user_name'] ?>" />
                  
                </div>
                    <div class="span4 form-group">
                      <label>Surname</label>
                  <input type="text" class="input-block-level"placeholder="Your Surname"   name="user_surname"  value="  <?php echo $profildatauser['user_surname'] ?>" />
                  
                </div>

                     <div class="span4 form-group">
                      <label>E-mail</label>
                  <input type="text" class="input-block-level"  placeholder="Your Mail"   name="user_email"  value="  <?php echo $profildatauser['user_email'] ?>" />
                  
                </div>
                    <div class="span4 form-group">
                      <label>Age</label>
                  <input type="text" class="input-block-level" placeholder="Your Age"   name="user_age"  value="<?php echo $profildatauser['user_age'] ?>" />
                  
                </div>

                   <div class="span4 form-group">
                      <label>Phone</label>
                  <input type="text"  class="input-block-level" placeholder="Your Phone"   name="user_phone"  value="  <?php echo $profildatauser['user_phone'] ?>" />
                  
                </div>
                 <div class="span4 form-group">
                      <label>Gender</label>
                      
                      <input type="radio" name="user_gender" value="male" <?php if ($profildatauser['user_gender']=="male") {?>
                       checked
                     <?php } ?> >Male &nbsp;  &nbsp;

                 <input type="radio" name="user_gender" value="female"   <?php if ($profildatauser['user_gender']=="female") {?>
                       checked
                     <?php } ?>> Female
                  
                </div>
                <div class="span8 form-group">
                
                  <div class="text-center">
                    <button class="btn btn-theme" type="submit" name="updateprofile">Update Profile</button>
                  </div>
                </div>
              </div>
            </form>
          </fieldset><br>
         <form action="process.php" method="post">

          <?php if(@$_GET['status']=="difpass") { ?>
<center>          <h4 style="color:red">Password Must to Same</h4>
</center> 
          <?php } elseif(@$_GET['status']=="noresetpas") { ?>
<center>          <h4 style="color: red">Old Password is Wrong! <br>Try Again !</h4>
</center>   
<?php }else{ ?>
<center>          <h4>Reset Your Password</h4>
</center>  
<?php } ?>           
<div class="row">
                <div class="span8 form-group">
                  <label>Old Password</label>
                  <input type="password" class="input-block-level"  placeholder="Old Password"   name="user_pass" required=""  />
                  
                </div>
                <div class="span4 form-group">
                  <label>New Password</label>
                  <input type="password" class="input-block-level"  placeholder="New Password"   name="user_pass1" required=""  />
                  
                </div>
                    <div class="span4 form-group">
                      <label>Password Again</label>
                  <input type="password" class="input-block-level"placeholder="Password Again"   name="user_pass2"  required=""  />
                </div>
<input type="hidden" name="user_id" value="<?php echo $profildatauser['user_id'] ?>">
        
                <div class="span8 form-group">
                
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme" type="submit" name="resetpass">Reset Your Password</button>
                  </div>
                </div>
              </div>
            </form>
            <br>
         <form action="process.php" method="post">
               <div class="validation"></div>
                  <div class="text-center">
<input type="hidden" name="user_id" value="<?php echo $profildatauser['user_id'] ?>">
                    <button class="btn btn-danger" type="submit" name="deleteaccount">Delete Your Account</button>
                  </div>
            </form>
          </div>

        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="verybottom">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p>
                &copy; Appointment Systems
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>
 
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery-hover-effect.js"></script>
  <script src="assets/js/animate.js"></script> <!--This is just for animations.-->
</body>
</html>
  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

</body>
</html>
