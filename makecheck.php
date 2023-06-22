<?php 
$cod=$_GET['code'];


require_once 'connection.php';
$INSERT=$database->prepare("UPDATE `student` SET `authentication`='yes' WHERE `securitycode`= '$cod'");
$INSERT->execute();
if($INSERT->execute())
{
    session_start();
    session_unset();
session_destroy();
    header("location:login.php");
}
?>