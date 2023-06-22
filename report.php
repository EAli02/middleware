<?php
session_start();
if (empty($_SESSION['name_admin'])) {
  header("Location: login.php");
  exit;
}
else
{
  require_once 'connection.php';
$re="reject";
$T=$database->prepare("SELECT  `report` FROM `student` WHERE `report`=\"yes\";");
  $T->execute();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Report</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="don.css">
        <style>
        .collapse{
  display: flex;
  align-items: center;
  justify-content: end;
}
        </style>
</head>
   <body>
 <nav class="navbar navbar-expand-lg "  style="background-color: #52796f;">
        <div class="container-fluid">
          <span class="icon" style="float: center;">
            <img class="skill" src="./images/logo.png" width="60" alt="skill-img">
            </span>
          <a class="navbar-brand" href="#" style="color: #000; padding: 20px; padding: 20px; font-size:2.5rem;font-family: Montserrat;">Middleware</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-auto" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex   mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="admin.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Student case</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="report.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Report case</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="donations.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Donate operation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="recycle.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Recycle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="information.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">The report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="session.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <div class="row">

        <div class="col-sm-5" id="title">
          <span class="icon" style="float: center;">
            <img class="skill" src="./images/setting.png" width="60" alt="skill-img">
            </span>
             <label> The Admin information</label>
      <div class="row">
        <div class="col-sm-5">
            <label>Name</label><br>
            <p style="color: #000;"><?php echo ucfirst($_SESSION['name_admin']);?></p>
        </div>
        <div class="col">
          <label>Email </label><br>
          <p> <?php echo $_SESSION['email'];?> </p>
        </div>
      </div>
    </div>
    <div class="col" id="title">
      <span class="icon" style="float: center;">
        <img class="skill" src="./images/reportpic.png" width="80" alt="skill-img">
        </span>
      <label>The Total Reported Cases </label><br>
      <p style="font-size: 2rem;"> <?php echo $T->RowCount();?>  </p>
    </div>
  </div>
  <hr/>
       <p style="text-align: center; font-size: 2rem;  font-family: Montserrat;">All Report cases</p>
<?php

//require_once 'connection.php';

$SELECT=$database->prepare("SELECT  * FROM student WHERE report != 'no'");
       $SELECT->execute();
       if($SELECT->rowCount()>0)
       {
           foreach($SELECT as $data)
           {
              $id=$data['id'];
               echo  '<div class="wrap">';
            echo '<h2>'."Student Case" .'</h2>';
               //here is new update
               echo '<p>'."No.".$id. '</p>';
           echo'<br>';
   
    echo'<div class="container-fluid">';

        echo '<div class="row">';
            echo'<div class="col-sm-3">';
                echo'<label >'."Name:".'</label>'.'<br>';
                echo'<p>'.ucfirst($data['fname'])." ".ucfirst($data['lname']).'</p>';
            echo'</div>';
            echo'<div class="col-sm-3">';
                echo '<label >'."Username:".'</label>'.'<br>';
                 echo'<p>'. $data['username'] .'</p>';
            echo '</div>';
            echo '<div class="col-sm-3">';
                echo'<label>'."Email:".'</label>'.'<br>';
              echo'<p>'. $data['email'] .'</p>';
             echo '</div>';
            echo '<div class="col-sm-3">';
                echo '<label>'."Phone:" .'</label>'.'<br>';
                echo '<p>'. $data['phone'].'</p>';
            echo '</div>';
           
        echo '</div>';
           

        echo'<div class="row">';
            echo'<div class="col-sm-3">';
                echo '<label>'."Gender:".'</label>'.'<br>';
               echo'<p>'. $data['gender'] .'</p>';
            echo '</div>';

            echo '<div class="col-sm-3">';
                echo '<label >'."College:".'</label>'.'<br>';
                echo '<p>'. $data['college'].'</p>';
            echo '</div>';
            echo '<div class="col-sm-3">';
                echo '<label>'."GPA:".'</label>'.'<br>';
                echo '<p>'. $data['gpa']. '</p>';
            echo '</div>';
            echo '<div class="col-sm-3">';
                echo'<label>' ."Total of pass credits:".'</label>'.'<br>';
             echo'<p>'. $data['topc'] .'</p>';
            echo'</div>';
           echo'</div>';
           
            echo'<div class="row">';
            echo'<div class="col-sm-3">';
                echo'<label>'."Hours:".'</label>'.'<br>';
               echo'<p>'. $data['hours'] .'</p>';
            echo'</div>';echo'</div>';
            
        echo'<hr/>';

    echo    '<div class="row">';
        echo    '<div class="col-sm-3 col-md-6 col-lg-4">';
         echo       '<label>'."Description of the case".'</label>'.'<br>';
            echo   '<p>'. $data['description'].'</p>';
            echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '<hr/>';
        echo '<br>';
        echo '<div class="row">';
            echo '<div class="col">';
                echo'<div class="p-3">';
                echo '<label >'."Registration screen".'</label>'.'<br>';
        $img = $data['rs'];
        echo '<img class="skill" src="data:image/jpeg;base64,'.base64_encode($img).'" height=400px width=400px/>';

                
            echo '</div>';
            echo'</div>';
            echo'<div class="col">';
                echo '<div class="p-3">';
               echo '<label>'."Financial voucher".'</label>'.'<br>';
        $img = $data['fv'];
        echo '<img class="skill" src="data:image/jpeg;base64,'.base64_encode($img).'"height=400px width=400px/>';

               
            echo'</div>';
        echo'</div>';
            
        
        echo '<hr/>';
             
               echo '<form method="get" action=" ">';
             // echo '<div class="row">';
               //   echo  '<div class="col-lg-1">';
                 //      echo '<div class="p-1">';
               //echo '<button type="submit" value=" '.$id.'" name="delete" type="submit" class="btn" style="background-color: #A8E890;font-size: 1.5rem;height: 70px; width:400px;">'."delete".'</button>';
              /* echo '<button type="submit" value=" '.$id. ' " name="delete" class="btn" style="background-color: #A8E890;font-size: 1.5rem;height: 70px; width:400px;">'."delete".'</button>';*/
               echo '<button type="submit" value=" '.$id. ' " name="delete" class="btn" style="background-color: #52796f;font-size: 1.5rem;height: 70px; width:400px;">'."Delete".'</button>';
              /* echo '</div>';
                echo '</div>';
                echo '</div>';*/
               
            
               echo '</form>';
               
               echo '<form method="get" action=" ">';
               //echo '<div class="row">';
                 // echo  '<div class="col-lg-1">';
                   //    echo '<div class="p-1">';
              /* echo '<button type="submit" value=" '.$id.'" name="report" class="btn" style="background-color: #A8E890;font-size: 1.5rem;height: 70px; width:400px; ">'."NO REPORT".'
               </button>'; */
             echo  '<button type="submit" class="btn" value=" '.$id.'" name="report" style="background-color: #52796f;font-size: 1.5rem;height: 70px; width:400px;">'."No report".'</button>'; 
              // echo '</div>';
               //echo '</div>';
               // echo '</div>';
               
            
              echo '</form>';
               //echo '<br>';
               echo '</div>'; echo '</div>';
               echo '</div>';
               echo '<hr>';
    
     /*
               $id=$data['id'];
               echo $id.'<br>';
               echo "email: ".$data['email'].'<br>';
    echo "name: ".$data['fname']." ".$data['lname'].'<br>';
    echo "username: ".$data['username'].'<br>';
    echo "college: ".$data['college'].'<br>';
    echo "gender: ".$data['gender'].'<br>';
    echo "gpa: ".$data['gpa'].'<br>';
    echo "topc: ".$data['topc'].'<br>';
    echo "description: ".$data['description'].'<br>';
        echo "condition: ".$data['condition'].'<br>';

        echo "hours: ".$data['hours'].'<br>';

       // echo "efawateer: ".$data['efawateer'].'<br>';

        echo "topc: ".$data['topc'].'<br>';
        echo "report: ".$data['report'].'<br>';
            $img = $data['rs'];
echo '<img src="data:image/jpeg;base64,'.base64_encode($img).'" height=400px width=600px/>';
        echo "                                                 ";
            $img = $data['fv'];
echo '<img src="data:image/jpeg;base64,'.base64_encode($img).'"height=400px width=600px/>';
               echo '<form method="get" action=" ">'; 
               echo '<button type="submit" value=" '.$id.'" name="delete" >'."delete".'</button';
               echo '</form>';
               echo "       ";
               echo '<form method="get" action=" ">'; echo '<button type="submit" value=" '.$id.'" name="report" >'."no report".'</button'; echo '</form>';
               echo '</div>';*/
           }
       }
       else
       {
           echo '<br>';
           echo '<center>'.'<p style="font-size: 30px;font-style: normal;font-family: cursive;/* background-color: burlywood; */">'."we dont have any report".'</p>'.'</center>';
       }
       if(isset($_GET['delete']))
       {
             $id=$_GET['delete'];
    
    $SLECT=$database->prepare("SELECT `username`,`email`,`fname` FROM `student` WHERE `id`= $id");
    $SLECT->execute();
   if($SLECT->rowCount()==1)
   {
       foreach($SLECT as $data)
       {
           $INSERT=$database->prepare("INSERT INTO recycle(
username,email,admin_email,name,reason) VALUE(:username,:email,:admin_email,:name,:reson)");
           $email=$data['email'];
           $username=$data['username'];
           $name=$data['fname'];
           $reason="report";
           $INSERT->bindparam("username",$username);
           $INSERT->bindparam("email",$email);
           $INSERT->bindparam("admin_email",$_SESSION['email']);
           $INSERT->bindparam("name",$name);
           $INSERT->bindparam("reson",$reason);
           
           $INSERT->execute();
       }
   }
   $delet=$database->prepare("DELETE FROM student WHERE id = $id ");
    $delet->execute();
       }
       
       if(isset($_GET['report']))
       {
           $id=$_GET['report']; 
            $update=$database->prepare("UPDATE `student` SET `report`='no' WHERE `id`= $id") ;
    $update->execute();
       }
?>
       </body> 
 </html>