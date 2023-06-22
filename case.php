<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> More-info </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="doner.css">
    
    </head>
    <body>
          <nav class="navbar navbar-expand-lg" style="background-color: #A8E890; height: 15%;">
            <a class="navbar-brand" style="color: #000; padding: 20px; padding: 20px; font-size:xx-large;">Middleware</a>
           <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              </button>-->
          <!--  <div class="collapse navbar-collapse"> -->
             <ul class="nav"> <!-- navbar-me-auto mb-2 mb-lg-0-->
              <li class="nav-item">
                <a class="nav-link" href="session.php" style="color: #000;margin-left: 1150px; font-size: large;">Logout</a>
                <!--margin-left: 1200px;-->
              </li>
             </ul> 
           <!-- </div>-->
        </nav>
<?php 


$id= $_GET['id'];
$GLOBALS['ERROR']=0;
require_once 'connection.php';
$select=$database->prepare("SELECT * FROM student WHERE id=$id");
$select->execute();
$select=$select->fetch(PDO::FETCH_ASSOC);
        echo '<br>';
echo '<div class="wrap" style="max-width: 75%;">';
           echo '<h3 style="text-align: center;">'."More Information".'</h3>'.'<br>';
            echo '<p>'."College :".$select['college']."</p>";
        echo '<p>'."gender :". $select['gender']."</p>";
        echo '<p>'."gpa :". $select['gpa']."</p>";
        echo '<p>'."topc :". $select['topc']."</p>";
        echo '<p>'."hours :". $select['hours']."</p>";
        echo '<p>'."amount :". $select['amount']."</p>";
        echo '<p>'."description: :". $select['description']."</p>";
        $max=$select['amount'];
           /*
    echo "college: ".$select['college'].'<br>';
    echo "gender: ".$select['gender'].'<br>';
    echo "gpa: ".$select['gpa'].'<br>';
    echo "topc: ".$select['topc'].'<br>';
    echo "hours: ".$select['hours'].'<br>';
    echo "amount: ".$select['amount'].'<br>';
    echo "description: ".$select['description'].'<br>'; */
       echo '<div class="row">';
             echo  ' <div class="col-md-6"> ';
    echo '<form action="" method="post">';
    echo '<input type="number" name="donation" required min="1" max=',$max,' class="form-control" id="floatingInput" placeholder="$$"  style="  width: 100px; height: 42px; margin-left: 420px;">';
        echo '</div>';
    echo '<button name="check" class="btn" style="background-color: #A8E890;font-size: large; margin-right: 410px; width: 100px;">';
    echo 'pay';
    echo '</button>';
        echo '</form>';
   echo '</div>';
           // echo '</div>';
            echo '<br>';
   echo '<div class="row">';
               echo  '<div class="col-md-12">';

  echo '<a  class="btn" style="background-color: #A8E890;font-size: large;" href=manual.php?id=',$id,'>'."report!!".'</a>';
           echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
            

if(isset( $_POST['check']))
{
     if(($select['amount'] >= $_POST['donation']) && $select['amount']!=0  )
     {
         
         $student=$select['email'];
         $doner=$_SESSION['name'];
         $amount=$_POST['donation'];
         $college=$select['college'];
         $reason=$select['reason'];
         $adddonation=$database->prepare("INSERT INTO donations(doner,student,amount,college,reason) VALUE(:doner,:student,:amount,:college,:reason)");
         $adddonation->bindParam("doner",$doner);
         $adddonation->bindParam("student",$student);
         $adddonation->bindParam("amount",$amount);
         $adddonation->bindParam("college",$college);
         $adddonation->bindParam("reason",$reason);
         $adddonation->execute();
         $select['amount']=$select['amount']-$_POST['donation'];
         $newamount=$select['amount'];
         $uplde=$database->prepare("UPDATE student SET amount= $newamount WHERE id= $id") ;
         $uplde->execute();
         if($uplde->execute()){
            
             header("refresh:5;doner.php");
             echo '<center>'.'<p style="font-size: 30px;font-style: normal;font-family: cursive;/* background-color: burlywood; */">'."Thank you for donation".'</p>'.'</center>';
         }
     }
    else
    {
        echo "WARRNING : error in donation ";
    }

}
?>
    </body>
</html>