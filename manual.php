<?php 


require_once 'connection.php';
$id=$_GET['id'];
$newamount="yes";
$uplde=$database->prepare("UPDATE student SET report= :report WHERE id= $id") ;$uplde->bindParam("report",$newamount);
         $uplde->execute();
header("location:newdoner.php");
?>