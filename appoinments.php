<?php include'header.php';
  
$askprofiluser=$db->prepare("SELECT * FROM users where user_id=:id");
$askprofiluser->execute(array(
  'id' => @$_GET['user_id']
  ));
$count=$askprofiluser->rowCount();
$profildatauser=$askprofiluser->fetch(PDO::FETCH_ASSOC);
$main_user_id =$profildatauser['user_id'];
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

<center><h2>My Appointments</h2></center>

          <div class="span12">
            <table>
                <tr style="background-color: #D7E1E9;" >
                    <th style="height: 38px; "><b>Apply Users</b></th>
                    <?php 
                    $askdays =$db->prepare("SELECT * FROM days");
                    $askdays->execute(array());

                    while ($askdaysname=$askdays->fetch(PDO::FETCH_ASSOC)) { ?>
                    <th style=""><?php echo $askdaysname['day_name'] ?></th>
                
                    <?php } ?>
                      </tr>
                                    <?php 
                                    $askappoinment =$db->prepare("SELECT * FROM hours_89 where main_user_id=:id  order by 89_id DESC");
                                    $askappoinment->execute(array('id'=>$main_user_id)); 

                                         while ($askappoinmentdetail=$askappoinment->fetch(PDO::FETCH_ASSOC)) {
                                         $user_id_users =  $askappoinmentdetail['user_id'];
                                         $askusers=$db->prepare("SELECT * from users where user_id=:id");
                                         $askusers->execute(array('id' =>$user_id_users));
                                         $askusersdetail=$askusers->fetch(PDO::FETCH_ASSOC);
                                          ?>
                          
                                    <tr>
                                      <td style=""><b><?php echo $askusersdetail['user_name']; ?></b></td>

                       <!--Monday--><?php if(strlen($askappoinmentdetail['mo'])>0) { ?>
                      <td style="height: 50px; background-color: #3a87ad; color:#fff"><p><b>Rezerved</b></p><u><i> 8:30-9:30</i></u> </td><?php }else { ?> <td style="height: 50px; "></td><?php } ?>
                             
                      <!--Tuesday--><?php if(strlen($askappoinmentdetail['tu'])>0) { ?>
                      <td style="height: 50px; background-color: #3a87ad; color:#fff"><p><b>Rezerved</b></p><u><i> 8:30-9:30</i></u> </td><?php }else { ?> <td style="height: 50px; "></td><?php } ?> 
                       <!--Wednesday--><?php if(strlen($askappoinmentdetail['we'])>0) { ?>
                      <td style="height: 50px; background-color: #3a87ad; color:#fff"><p><b>Rezerved</b></p><u><i> 8:30-9:30</i></u> </td><?php }else { ?> <td style="height: 50px; "></td><?php } ?>   
                       <!--Tuorsday--><?php if(strlen($askappoinmentdetail['tur'])>0) { ?>
                      <td style="height: 50px; background-color: #3a87ad; color:#fff"><p><b>Rezerved</b></p><u><i> 8:30-9:30</i></u> </td><?php }else { ?> <td style="height: 50px; "></td><?php } ?> 
                       <!--Friday--><?php if(strlen($askappoinmentdetail['fri'])>0) { ?>
                      <td style="height: 50px; background-color: #3a87ad; color:#fff"><p><b>Rezerved</b></p><u><i> 8:30-9:30</i></u> </td><?php }else { ?> <td style="height: 50px; "></td><?php } ?>
                       <!--Saturday--><?php if(strlen($askappoinmentdetail['sat'])>0) { ?>
                      <td style="height: 50px; background-color: #3a87ad; color:#fff"><p><b>Rezerved</b></p><u><i> 8:30-9:30</i></u> </td><?php }else { ?> <td style="height: 50px; "></td><?php } ?>
                                     </tr>
                                      <?php } ?>
                                       
             
          </table>
        
          </div>

        </div>
      </div>
    </section>
  </div>

</body>

</html>
