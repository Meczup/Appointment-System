<?php
ob_start();
session_start();
include'connection.php';//bağlantı için

        if (isset($_POST['applyaproinment'])) {

             $main_user_id=$_POST['main_user_id']; 
             $user_id =$_POST['user_id'];
             $day_name =$_POST['day_name'];
             $hour_id=$_POST['hour_id']; 

           //  $renduvusor=$db->prepare("SELECT * FROM hours_89 WHERE user_id={$user_id}");

             if ($hour_id==1) {
              $saatsor=$db->prepare("SELECT * FROM hours_89  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_89 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_89 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_89 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_89 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_89 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_89 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }


             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_89  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_89  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_89  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_89  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_89  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_89  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }

               
             }
              //hour_id==2
             }elseif ($hour_id==2) {
              $saatsor=$db->prepare("SELECT * FROM hours_910  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_910 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_910 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_910 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_910 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_910 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_910 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }


             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_910  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_910  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_910  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_910  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_910  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_910  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }

               
              

             }
              //hour_id==2
             }elseif ($hour_id==3) {
              $saatsor=$db->prepare("SELECT * FROM hours_1011  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1011 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1011 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1011 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1011 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1011 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1011 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }

             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_1011  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1011  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1011  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_1011  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_1011  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_1011  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }            
              

             }
              //hour_id==2
             }else if ($hour_id==4) {
              $saatsor=$db->prepare("SELECT * FROM hours_1112  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1112 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1112 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1112 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1112 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1112 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1112 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }


             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_1112  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1112  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1112  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_1112  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_1112  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_1112  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }

             }
              //hour_id==2
             }else if ($hour_id==5) {
              $saatsor=$db->prepare("SELECT * FROM hours_1213  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1213 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1213 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1213 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1213 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1213 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1213 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }


             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_1213  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1213  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1213  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_1213  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_1213  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_1213  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }
              

             }
              //hour_id==2
             }else if ($hour_id==6) {
              $saatsor=$db->prepare("SELECT * FROM hours_1314  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1314 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1314 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1314 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1314 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1314 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1314 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }


             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_1314  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1314  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1314  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_1314  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_1314  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_1314  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }

               
              

             }
              //hour_id==2
             }else if ($hour_id==7) {
              $saatsor=$db->prepare("SELECT * FROM hours_1415  WHERE user_id={$user_id}");
              $saatsor->execute(array());
              $saatcek=$saatsor->fetch(PDO::FETCH_ASSOC);
              $say=$saatsor->rowCount();
             if ($say >0) {
             if ($day_name=="Monday") {
             if (strlen($saatcek['mo'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1415 SET mo=:monday,main_user_id=:mainid WHERE user_id={$user_id}");
               $gir->execute(array('monday' =>$day_name,'mainid'=>$main_user_id));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            } elseif ($day_name=="Tuesday") {
             if (strlen($saatcek['tu'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");
             }else {
               $gir=$db->prepare("UPDATE hours_1415 SET tu=:tousday WHERE user_id={$user_id}");
               $gir->execute(array('tousday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Wednesday") {
             if (strlen($saatcek['we'])>0){
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1415 SET we=:wednesday WHERE user_id={$user_id}");
               $gir->execute(array('wednesday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Thursday") {
             if (strlen($saatcek['tur'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1415 SET tur=:tursday WHERE user_id={$user_id}");
               $gir->execute(array('tursday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Friday") {
             if (strlen($saatcek['fri'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1415 SET fri=:friday WHERE user_id={$user_id}");
               $gir->execute(array('friday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }elseif ($day_name=="Saturday") {
             if (strlen($saatcek['sat'])>0) {
              Header("Location:users-data.php?status=fulldata&user_id=$user_id");

             }else {
               $gir=$db->prepare("UPDATE  hours_1415 SET sat=:saturday WHERE user_id={$user_id}");
               $gir->execute(array('saturday' =>$day_name));
               if ($gir>0) {
                Header("Location:users-data.php?status=ok&user_id=$user_id");
               }
             }
            }


             } else {
                 
                 if($day_name=="Monday"){
                   $gir=$db->prepare("INSERT INTO  hours_1415  SET mo=:monday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('monday'=>"Monday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Tuesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1415  SET tu=:tuesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tuesday'=>"Tuesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Wednesday"){
                   $gir=$db->prepare("INSERT INTO  hours_1415  SET we=:wednesday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('wednesday'=>"Wednesday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Thursday"){
                   $gir=$db->prepare("INSERT INTO  hours_1415  SET tur=:tursday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('tursday'=>"Thursday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Friday"){
                   $gir=$db->prepare("INSERT INTO  hours_1415  SET fri=:friday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('friday'=>"Friday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }elseif($day_name=="Saturday"){
                   $gir=$db->prepare("INSERT INTO  hours_1415  SET sat=:saturday, user_id=:id,main_user_id=:mainid");
                   $gir->execute(array('saturday'=>"Saturday",'id' =>$user_id,'mainid'=>$main_user_id));
                   if ($gir>0) {
                  Header("Location:users-data.php?status=applyed&user_id=$user_id");
                  }
                 }

               
              

             }
             }

        }
  
?>