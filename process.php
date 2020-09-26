<?php
ob_start();
session_start();
//baglantını cekelim
include'connection.php';



	/******************* USER INSETT ****************************/

if (isset($_POST['btnSubmit'])) {


	   $user_name = htmlspecialchars(trim($_POST['user_name'])); 
	   $user_surname = htmlspecialchars(trim($_POST['user_surname'])); 
	   $user_email = htmlspecialchars(trim($_POST['user_email'])); 
	   $user_gender = htmlspecialchars(trim($_POST['user_gender'])); 
 	   $user_age = htmlspecialchars(trim($_POST['user_age'])); 
	   $user_phone = htmlspecialchars(trim($_POST['user_phone'])); 
     $user_pass = trim(md5($_POST['user_pass']));

    $user_status=1;
    $user_level=2;


  $askusers=$db->prepare("SELECT * FROM users WHERE user_email=:mail");
  $check=$askusers->execute(array('mail'=>$user_email));
  $count=$askusers->rowCount();
  if ($count > 0) {
  	
  header("Location:register.php?status=haveemail");
  } else {

    //uye Resim yukleme işlemi
  $uploads_dir = 'img/users';
  @$tmp_name = $_FILES['user_picture']["tmp_name"];
  @$name = $_FILES['user_picture']["name"];
  //resmin isminin benzersiz olması
  $benzersizsayi1=rand(20000,32000);
  $benzersizad=$benzersizsayi1;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  	
    $askdata=$db->prepare("INSERT INTO users SET   
      user_name=:name,
      user_surname=:surname,
      user_email=:mail,
      user_gender=:gender,
      user_pass=:pass,
      user_age=:age,
      user_phone=:phone,
      user_status=:status,
      user_picture=:picture,
      user_level=:level
   
    	");
    $insert = $askdata->execute(array(
      'name' => $user_name,
      'surname' =>$user_surname,
      'mail' =>$user_email,
      'gender' =>$user_gender,
      'pass' =>$user_pass,
      'age' =>$user_age,
      'phone' =>$user_phone,
      'status'=>$user_status,
      'picture' =>$refimgyol,
      'level'=>$user_level
     
    ));
    
         if ($insert) {

            Header("Location:login.php?status=ok");
          exit();
          } else {

            Header("Location:register.php?status=no");
            exit();
          }

  }

}




         if (isset($_POST['loginuser'])) {

               $user_email=htmlspecialchars($_POST['user_email']); 
               $user_pass=htmlspecialchars(trim($_POST['user_pass']));
               $user_pass2=htmlspecialchars(trim($_POST['user_pass2']));

                        if ($user_pass==$user_pass2) {

                        	 $user_pass_last=trim(md5($user_pass));

                        	 	   $userask=$db->prepare("SELECT * FROM users where user_email=:mail and user_status=:status and user_pass=:pass and user_level=:level");
          $userask->execute(array(

           'mail' => $user_email,
           'status' => 1,
           'pass' => $user_pass_last,
           'level' => 2
         ));

          $say=$userask->rowCount();

          if ($say==1) {
              $_SESSION['user_email']=$user_email;
              $_SESSION['user_pass']=$user_pass_last;
             header("Location:index.php?login=ok");
            exit();


          } else {
            header("Location:login.php?login=no");
          }
                        	exit();
                        } else {
                        	header("Location:login.php?status=passerror");
                        }
        }




        if (isset($_POST['userpicture'])) {
$user_id =$_POST['user_id'];
           $uploads_dir = 'img/users';
          @$tmp_name = $_FILES['user_picture']["tmp_name"];
          @$name = $_FILES['user_picture']["name"];
  //resmin isminin benzersiz olması
          $benzersizsayi1=rand(20000,32000);
         
          $benzersizad=$benzersizsayi1;
          $refimgyol=substr($uploads_dir, 4)."/".$benzersizad.$name;
          @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

          $duzunle=$db->prepare("UPDATE users SET 

            user_picture=:resimyol
            WHERE user_id={$_POST['user_id']}");
          $update=$duzunle->execute(array(
            'resimyol' =>$refimgyol
          ));

          if ($update) {

           $resimsilunlink=$_POST['eski_yol'];
           unlink("$resimsilunlink");
           Header("Location:profile.php?status=ok&user_id=$user_id");
         } else {
          Header("Location:profile.php?status=no&user_id=$user_id");
        }

        }


        if (isset($_POST['updateprofile'])) {


         $user_id =$_POST['user_id'];

     $user_name = htmlspecialchars(trim($_POST['user_name'])); 
     $user_surname = htmlspecialchars(trim($_POST['user_surname'])); 
     $user_email = htmlspecialchars(trim($_POST['user_email'])); 
     $user_gender = htmlspecialchars(trim($_POST['user_gender'])); 
     $user_age = htmlspecialchars(trim($_POST['user_age'])); 
     $user_phone = htmlspecialchars(trim($_POST['user_phone'])); 


      $askdata=$db->prepare("UPDATE users SET   
      user_name=:name,
      user_surname=:surname,
      user_email=:mail,
      user_gender=:gender,
      user_age=:age,
      user_phone=:phone
     WHERE user_id={$_POST['user_id']}
      
      ");
    $insert = $askdata->execute(array(
      'name' => $user_name,
      'surname' =>$user_surname,
      'mail' =>$user_email,
      'gender' =>$user_gender,
      'age' =>$user_age,
      'phone' =>$user_phone
     
    ));
    
         if ($insert) {

            Header("Location:profile.php?status=ok&user_id=$user_id");
          exit();
          } else {

            Header("Location:profile.php?status=no&user_id=$user_id");
            exit();
          }

        }



        // Reset Pass

        if (isset($_POST['resetpass'])) {
         $user_id =$_POST['user_id'];
         $user_pass =trim(htmlspecialchars($_POST['user_pass'])); 

         $user_pass1 =trim(htmlspecialchars($_POST['user_pass1'])); 
         $user_pass2=trim(htmlspecialchars($_POST['user_pass2']));

         if ($user_pass1==$user_pass2) {
           $user_pass1=md5($user_pass1);
           $user_pass=md5($user_pass);
           $askpass=$db->prepare("SELECT * from users  WHERE user_pass=:pass ");
           $askpass->execute(array('pass'=>$user_pass));
           $count =$askpass->rowCount(); 
if ($count) {
$updatepass=$db->prepare("UPDATE users SET user_pass=:pass WHERE user_id={$_POST['user_id']}");
$insert = $updatepass->execute(array('pass'=>$user_pass1));
if ($insert) {
  
Header("Location:logout.php");
exit();

}
}else {
  Header("Location:profile.php?status=noresetpas&user_id=$user_id");
            exit();
}

         }else{
          Header("Location:profile.php?status=difpass&user_id=$user_id");
          exit();
         }
        }

        // Delete Your Account

        if (isset($_POST['deleteaccount'])) {
          $user_id=$_POST['user_id'];
          $deleteaccount=$db->prepare("DELETE FROM users WHERE user_id={$_POST['user_id']}");
        $control=  $deleteaccount->execute(array('user_id'=>$user_id));
        if ($control) {
          Header("Location:register.php");
          exit();
        }
        }


?>