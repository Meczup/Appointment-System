<?php include'header.php'; ?>

<?php 
$user_id =@$_GET['user_id'];


$askmembers=$db->prepare("SELECT * FROM users where user_id=:id");
$askmembers->execute(array(
  'id' => @$_GET['user_id']
  ));
$count=$askmembers->rowCount();
$profildatauser=$askmembers->fetch(PDO::FETCH_ASSOC);
$user_id=$profildatauser['user_id'];
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
                <h4 class="rheading"> <?php echo $profildatauser['user_name'] ?> <?php echo $profildatauser['user_surname'] ?><span></span></h4>
                    <ul>
                     <li><label><strong>Phone Number : </strong></label>
                    <p>
                   <?php echo $profildatauser['user_phone'] ?>
                    </p>
                  </li>
                      <li><label><strong>E-mail : </strong></label>
                    <p>
                   <?php echo $profildatauser['user_email'] ?>
                    </p>
                  </li>
            
               
                </ul>
              </div>
              <div class="widget">
                <h4 class="rheading">Picture<span></span></h4>
                <ul class="social-links">
                  <?php if(strlen($profildatauser['user_picture'])>0) {?>
               <li><img src="img/<?php echo $profildatauser['user_picture'] ?>"></li>
  <?php } else { ?>
                   <li><img src="img/no-image-available.png"></li>

                <?php } ?>
                </ul>
              </div>
            </aside>
          </div>

          <?php if (@$_GET['status']=="fulldata") { ?>
           <center><h2 style="color: red">Not available on the date you selected.<br>Please Select Different Time !</h2></center>
         <?php }elseif(@$_GET['status']=="applyed") { ?>
          <center><h2 style="color: green">Your appointment has been created.</h2></center>

         <?php }else { ?>
         <?php } ?>
          <div class="span8">

            <table>
                <tr style="background-color: #D7E1E9;">
                    <th style="height: 38px"><b>Hours</b></th>
                    <?php 
                    $askdays =$db->prepare("SELECT * FROM days");
                    $askdays->execute(array());

                    while ($askdaysname=$askdays->fetch(PDO::FETCH_ASSOC)) { ?>
                    <th><?php echo $askdaysname['day_name'] ?></th>
                
                    <?php } ?>
                </tr>
                <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">8:30 - 9:30</td>


                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_89 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);
                    ?>
                   

                    <!-- Monday İçin -->
               
                  <?php  if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>
           


 <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">9:30 - 10:30</td>


                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_910 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);?>


                    <!-- Monday İçin -->
                  <?php if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>


           <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">10:30 - 11:30</td>


                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_1011 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);?>


                    <!-- Monday İçin -->
                  <?php if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>


            <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">11:30 - 12:30</td>

                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_1112 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);?>

                    <!-- Monday İçin -->
                  <?php if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>


         <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">12:30 - 13:30</td>


                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_1213 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);?>


                    <!-- Monday İçin -->
                  <?php if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>

 <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">13:30 - 14:30</td>

                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_1314 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);?>

                    <!-- Monday İçin -->
                  <?php if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>

              <tr>
                   <td style="height: 50px; background-color: #E5F0FF" id="daterange">14:30 - 15:30</td>


                    <?php 
                    $askpro =$db->prepare("SELECT * FROM hours_1415 where user_id=:id");
                    $askpro->execute(array('id' =>$profildatauser['user_id']));
                    $askaskproname=$askpro->fetch(PDO::FETCH_ASSOC);?>

                    <!-- Monday İçin -->
                  <?php if(strlen($askaskproname['mo'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                <?php if(strlen($askaskproname['tu'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['we'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                    <?php if(strlen($askaskproname['tur'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['fri'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>

                  <?php if(strlen($askaskproname['sat'])>0) { ?>
                    <td style="background-color: #F85C50; color: #fff">Busy</td>
                 <?php } else { ?>
                  <td></td>
                 <?php } ?>
                </tr>
                     
          </table>
          </div>

            <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading"> <?php echo $profildatauser['user_name'] ?> <?php echo $profildatauser['user_surname'] ?><span></span></h4>
                <form action="appoinments-process.php" method="POST">
                    <ul>
                     <li><label><strong>Please Choose Day : </strong></label>
                    <p>
                    <?php  

                     $gunsor=$db->prepare("select * from days order by day_id ASC");
                     $gunsor->execute();

                       ?>
                    <select class="" required="" name="day_name" >


                     <?php 

                     while($guncek=$gunsor->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                       <option value="<?php echo $guncek['day_name']; ?>"><?php echo $guncek['day_name']; ?></option>

                       <?php } ?>

                     </select>
                    </p>
                  </li>
                      <li><label><strong>Please Select Time :</strong></label>
                    <p>

                      <?php
                         $saatsor=$db->prepare("select * from hours order by hour_id ASC");
                         $saatsor->execute();
                       ?>
                    <select class="select2_multiple form-control" required="" name="hour_id" >
                     <?php 

                     while($saatcek=$saatsor->fetch(PDO::FETCH_ASSOC)) {
                       ?>
                       <option value="<?php echo $saatcek['hour_id']; ?>"><?php echo $saatcek['hour']; ?></option>

                       <?php } ?>

                     </select>
                                          
                     <input type="hidden" name="day_id" value="<?php echo $guncek['day_id']; ?>">
                     <input type="hidden" name="user_id" value="<?php  echo $profildatauser['user_id'] ?>">
                     <input type="hidden" name="main_user_id" value=" <?php echo $datausers['user_id'] ?>">

                    </p>
                  </li>
                 <li>
                <button type="submit" class="btn btn-primary" name="applyaproinment">Make an Appointment</button>

                </li>
               
                </ul>
              </form>
              </div>
          
            </aside>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
