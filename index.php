   <?php include'header.php'; ?>
    <section id="maincontent">
      <div class="container">

        <div class="row">
          <div class="span12">
            <div class="call-action">

              <div class="text">
                <h4>Hi! <?php echo $datausers['user_name'] ?><br> Welcome  to  Appointment System</h4>
                <p>
                Below, you can see the users in the system.Click the user to make an appointment.
                </p>
              </div>
              <div class="cta">
                <a class="btn btn-large btn-theme" href="profile.php?user_id=<?php echo $datausers['user_id'] ?>">
							<i class=" icon-user icon-white"></i> My Profile </a>
              </div>

            </div>
            <!-- end tagline -->
          </div>
        </div>


        <div class="row">

          <?php 

$askmembers=$db->prepare("SELECT * FROM users WHERE user_level=2 and user_id!=$usermain_id order by user_id DESC");
$askmembers->execute(array(
  ));
while($datamembers=$askmembers->fetch(PDO::FETCH_ASSOC)){ ?>


          <div class="span3 features ">
            <div class="img-thumb" style="    padding: .25rem;
    background-color: #434b56;
    border: 1px solid #5d6673;
    border-radius: .25rem;">
            <?php if (strlen($datamembers['user_picture']) >0) { ?>
             <img src="img/<?php echo $datamembers['user_picture'] ?>" alt=""  style="width: 300px; height: 200px"/>
          <?php }else { ?>
            <img src="img/no-image-available.png" alt=""  style="width: 300px; height: 200px" />
          <?php } ?>
        </div>
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48  icon-calendar active icon"></i></a>
             <a href="users-data.php?user_id=<?php echo $datamembers['user_id'] ?>">   <h5><?php echo $datamembers['user_name'] ?> <?php echo $datamembers['user_surname'] ?></h5></a>

                <h6> <?php echo $datamembers['user_email'] ?></h6>
              </div>
            </div>
          </div>
<?php } ?>

 
        </div>



      </div>
    </section>
    <!--Alt Kısım-->
<?php require_once'footer.php'; ?>
  </div>

