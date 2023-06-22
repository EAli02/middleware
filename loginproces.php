<?php
require_once 'connection.php';
if(isset($_POST['login']))
{
    $SELECT=$database->prepare("SELECT email,password FROM student WHERE email= :email AND password = :password");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $SELECT->bindParam("email",$email);
    $SELECT->bindParam("password",$password);
    $SELECT->execute();
    
    $SELECTT=$database->prepare("SELECT email,password FROM doner WHERE email= :email AND password = :password");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $SELECTT->bindParam("email",$email);
    $SELECTT->bindParam("password",$password);
    $SELECTT->execute();
    
      
          
    if($SELECTT->rowCount() xor $SELECT->rowCount())
    {
        if($SELECTT->rowCount()==1){
            //THIS IS FOR DONER
            
            $SELECT=$database->prepare("SELECT name,idd,email FROM doner WHERE email = :email AND password = :password ");
            $email=$_POST['email'];
    $password=$_POST['password'];
            $SELECT->bindParam("email",$email);
    $SELECT->bindParam("password",$password);
            $SELECT->execute();
            session_start();
            foreach($SELECT as $data){
            $_SESSION['email']=$data['email'];    
            $_SESSION['name']=$data['name'];
            $_SESSION['idd']=$data['idd'];
            header("location:newdoner.php");
            die();
            }
            
        }else{};
        if($SELECT->rowCount()==1){
            // THIS IS FOR STUDENT
           /*
           fanme or lastname in statment select if you soluation his oroplem clear this note
           */
            $SELECT=$database->prepare("SELECT email,id FROM student WHERE email = :email AND password = :password ");
            $email=$_POST['email'];
            $password=$_POST['password'];
            $SELECT->bindParam("email",$email);
            $SELECT->bindParam("password",$password);
            $SELECT->execute();
            echo $SELECT->rowCount();
            session_start();
            foreach($SELECT as $data){
            $_SESSION['eamil']=$data['email'];
            $_SESSION['id']=$data['id'];
header("location:student.php");
                           }
                
        }else{};
        
        }
       if(1){
            $S=$database->prepare("SELECT * FROM admin WHERE email= :email AND password = :password");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $S->bindParam("email",$email);
    $S->bindParam("password",$password);
    $S->execute(); 
           if($S->rowCount()==1)
           {
               foreach($S as $data){
               session_start();
                   $_SESSION['name_admin']=$data['name_admin'];
                   $_SESSION['email']=$data['email'];
                header("location:admin.php");
               
               }
            
        } }
    else{} 
    }
$INSERT=$database->prepare("INSERT INTO confirmation(`ip_adress`, `date`, `time`) VALUES(:ip_adress,:date,:time)");
$ip_address = $_SERVER['REMOTE_ADDR'];
$current_date = date("Y-m-d");
$current_time = date("H:i:s");

$INSERT->bindparam("ip_adress",$ip_address);
    $INSERT->bindparam("date",$current_date);
    $INSERT->bindparam("time",$current_time);
$INSERT->execute();
$update = $database->prepare("
  UPDATE confirmation
  SET thecondition = 'block'
  WHERE ip_adress IN (
    SELECT ip_adress
    FROM confirmation
    WHERE date BETWEEN (CURRENT_DATE - INTERVAL 1 WEEK) AND CURRENT_DATE
    GROUP BY ip_adress
    HAVING COUNT(ip_adress) >= 3
  )
");
$update->execute();

   // header("location:login.php");
    
    

      
      
      
      
      
      
      
      
      
?>
<html>
<head>
<meta charset="utf-8">
<title>loginPage</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

 

    </head>

 

    <body>
<div  class="wrap" align="center" style=" padding-top: 20%; color: red;font-size: 3rem;">
<p>  You have entered wrong information </p> 
<p style="color: black;font-size: 1.5rem;"> You only have two attempts, and in case of any error, an id will be sent to you </p>
<a href="login.php"> <button  type="submit" name="signinstudent" style=" font-size: 2.5rem; border-radius: 30px;width: 200px; background-color: #cad2c5;"> Go back</button></a>
</div>    
</body>
</html>