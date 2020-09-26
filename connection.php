<?php
//Veritaban Baglantısı

try{

	$db=new PDO("mysql:host=localhost;dbname=rsistem;charset=utf8", 'root','asdasd' );
    
	// echo "veritabanı baglantısı başarılı";
}

catch(PDOException  $e){
	echo $e->getMessage();
	
}

?>