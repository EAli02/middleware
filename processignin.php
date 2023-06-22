<?php
require_once 'connection.php';
if(isset($_POST['signinstudent']))
{
    $emaildatabase=$_POST['email'];
    $verification=$database->prepare("SELECT email FROM student WHERE email = :email");
    $verification->bindParam("email",$emaildatabase);
    $verification->execute();
   // echo $verification->rowCount();
    if ($verification->rowCount()==0)
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['username'];
        $college=$_POST['college'];
        $gender=$_POST['gender'];
        $gpa=$_POST['gpa'];
        $topc=$_POST['topc'];
        $description=$_POST['description'];
        $hours=$_POST['hours'];
        $reason=$_POST['reason'];
       
        $fileDatars=file_get_contents($_FILES['rs']["tmp_name"]);
            $fileDatafv=file_get_contents($_FILES['fv']["tmp_name"]);
        $reject="reject";
        $no="no";
        $INSERT=$database->prepare("INSERT INTO student(email,password,phone,fname,lname,username,college,gender,gpa,topc,rs,fv,description,hours,reason) VALUE (
        :email,:password,:phone,:fname,:lname,:username,:college,:gender,:gpa,:topc,:rs,:fv,:description,:hours,:reason)");
        
        $INSERT->bindParam("email",$email);
        $INSERT->bindParam("password",$password);
        $INSERT->bindParam("phone",$phone);
        $INSERT->bindParam("fname",$fname);
        $INSERT->bindParam("lname",$lname);
        $INSERT->bindParam("username",$username);
        $INSERT->bindParam("college",$college);
        $INSERT->bindParam("gender",$gender);
        $INSERT->bindParam("gpa",$gpa);
        $INSERT->bindParam("topc",$topc);
        $INSERT->bindParam("rs",$fileDatars);
        $INSERT->bindParam("fv", $fileDatafv);
        $INSERT->bindParam("description",$description);
        $INSERT->bindParam("hours",$hours);
        $INSERT->bindParam("reason",$reason);
        $INSERT->execute();
        $update=$database->prepare("UPDATE `student` SET `condition`='reject', `report`='no' WHERE `email`=:email ");
        $update->bindParam("email",$email);
        $update->execute();
        $query = "SELECT MAX(id) as max_id FROM student";
         $get = $database->prepare($query); 
         $get->execute(); 
         $result = $get->fetch();
         $last_id = $result['max_id'];
         $last_id+=1;
         $update=$database->prepare("UPDATE `student` SET `id`=:last_id WHERE `email`=:email ");
         $update->bindParam("last_id",$last_id);
         $update->bindParam("email",$email);
         $update->execute();
         if($update->execute())
        {

            require_once 'C:\xampp\htdocs\app\mail.php';
            $mail->setfrom('enasalnairat@gmail.com','MIDDLEWARE');
$mail->addAddress($email);
$mail->Subject='authnticotion';
$mail->Body='<h1> شكرا لتسجيلك في موقعنا</h1>'
          . "<div> رابط تحقق من حساب" . "<div>" . 
          "<a href='http://localhost/middleware/makecheck.php?code=".md5($password)  . "'>
           " . "http://localhost/middleware/makecheck.php?code=" .md5($password) . "</a>";
$mail->send();
if($mail->send())
        {
            $code=md5($password);
             $t=$database->prepare("UPDATE `student` SET `securitycode`='$code' WHERE `email`= '$email'");
            $t->execute();
            if($t->execute())
            header("location:login.php");
        }
        }
        
    }
}
if(isset($_POST['signindoner']))
{
    $emaildatabase=$_POST['email'];
    $verification=$database->prepare("SELECT email FROM doner WHERE email = :email");
    $verification->bindParam("email",$emaildatabase);

    $verification->execute();
    if($verification->rowCount()==0)
    {
        $INSERT=$database->prepare("INSERT INTO doner(name,email,password,phone,cardnumber)
        VALUE(:name,:email,:password,:phone,:card)");
        
        $email=$_POST['email'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $card=$_POST['card'];
        
        $INSERT->bindParam("name",$name);
        $INSERT->bindParam("email",$email);
        
        $INSERT->bindParam("password",$password);
        $INSERT->bindParam("phone",$phone);
        $INSERT->bindParam("card",$card);
    $INSERT->execute();
    $query = "SELECT MAX(idd) as max_idd FROM doner";
         $get = $database->prepare($query); 
         $get->execute(); 
         $result = $get->fetch();
         $last_idd = $result['max_idd'];
         $last_idd+=1;
         $update=$database->prepare("UPDATE `doner` SET `idd`=:last_idd WHERE `email`=:email ");
         $update->bindParam("last_idd",$last_idd);
         $update->bindParam("email",$email);
         $update->execute();
         header("location:login.php");
    
}
}
//header("location:login.php");
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
          <p> This email has already been used </p> 
          <a href="login.php"> <button  type="submit" name="signinstudent" style=" font-size: 2.5rem; border-radius: 30px;width: 200px; background-color: #cad2c5;"> Go back</button></a>
    </div>    
    </body>
</html>