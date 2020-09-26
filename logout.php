<?php
if (@$_GET['durum']=="yenissifre") {

	session_start();

session_destroy();

header("Location:index.php?durum=exit");

}

session_start();

session_destroy();

header("Location:index.php?durum=exit");
?>