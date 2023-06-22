<?php
session_start();
if(empty($_SESSION['idd']))
{
    header("location:login.php");
    die();
}
?><html>
    <head>
        <meta charset="utf-8">
        <title> More-info </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="newdoner.css">
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
                    <a class="nav-link active"  href="newdoner.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Main page</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="session.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="descriptionn">
            <div class="skill-row">
              <h1 style="text-align: center;font-family: Montserrat;font-size: 3.5rem;"> More information about the Student</h1>
              <p style="text-align: center; font-size:large;font-family: Montserrat;font-size:larger;"> 
                Here you will find all of the submitted student's information after it has been checked and confirmed to be correct.
                 You can read a description of the student's
                 condition and then donate the amount you want to the student.</p>
            </div>
          </div>

          <?php
        $id= $_GET['id'];
        require_once 'connection.php';
$select=$database->prepare("SELECT * FROM student WHERE id=$id");
$select->execute();
$select=$select->fetch(PDO::FETCH_ASSOC);
        ?>
<div class="wrap1">
    <h2> Student information </h2>
   <br>
<div class="row">
    <div class="col-sm-4">
        <label> College </label><br>
        <p><?php echo $select['college']?></p>
    </div>
    <div class="col-sm-4">
        <label> Gender </label><br>
         <p> <?php echo $select['gender']?> </p>
    </div>
    <div class="col-sm-4">
        <label> GPA </label><br>
      <p> <?php echo $select['gpa']?> </p>
     </div>
    
   
</div>
   

<div class="row">
  <div class="col-sm-4">
    <label> Total of pass credits </label><br>
    <p> <?php echo $select['topc']?></p>
</div>
    <div class="col-sm-4">
      <label>Hours </label><br>
      <p> <?php echo $select['hours']?> </p>
    </div>
    <div class="col-sm-4">
        <label> Amount </label><br>
       <p> <?php echo $select['amount']?> </p>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <label> Reasone </label><br>
        <p> <?php echo $select['reason']?></p>
      </div>
</div>
</div>





  
   <div class="row">
      <label> Description </label>
      <p> <?php echo $select['description']; $max=$select['amount'];?></p>
    </div>

    <hr/>
    <form action="" method="post">
<div class="row" align="center">
    <div class="col-md-6">  
     <?php   
echo '<input type="number" required min="1" max=',$max,' name="donation" class="form-control" id="floatingInput" placeholder="$$" value="" style="  width: 50%; height: 42px; margin-left: 420px;">'?>
    </div>
    <div class="col-md-6">
<button type="submit" name="check" class="btn" style="margin-right: 210px; width: 30%;">Pay </button>
    </div>
</div>
<br>
<div class="row" align="center">
    <div class="col-md-12">
        
       <?php 
    //name="id" value="'.$id.'
    echo '<a  href=manual.php?id=',$id,' class="btn" style="width: 30%;">'."Report".'</a>' ?>
    </div>
</div></form>
  </div>
    

  <br>
 
         <?php
if(isset( $_POST['check']))
{
     if(($select['amount'] >= $_POST['donation']) && $select['amount']!=0  )
     {
         
         $student=$select['email'];
         $doner=$_SESSION['email'];
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
         echo' <meta http-equiv="refresh" content="5;url=newdoner.php">';

             echo '<center>'.'<p style="font-size: 30px;font-style: normal;font-family: cursive;/* background-color: burlywood; */">'."Thank you for donation".'</p>'.'</center>';
         }
     }
    else
    {
        echo "WARRNING : error in donation ";
    }

}
?>
         <br>
  <hr/>
  <br>
            <!--Footer-->
<section class="">
    <footer style="background-color: #354f52;">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase"> Middleware </h5>
  
            <p>
              We hope that this site will serve your needs as a student or as a donor seeking to help students.
               The aim of this site is to be a safe and secure link between those who need help and those who want help. We are keen to display cases that really need a donation, 
              so the student's status is confirmed, so we check each submitted case. before it is displayed on the site
            </p>
          </div>
          <div class=" col-lg-5 col-md-6 mb-4 mb-md-0">
            <div class="contact-form">
            <h5 class="text-uppercase mb-0">Contact Us</h5>
            <form action="index.html" method="post">
              <input type="email" name="email" class="contact-input" placeholder="Your Email...">
              <br>
              <textarea name="message" class="contact-input" placeholder="Your message..."></textarea>
              <br>
              <button type="submit" class="btnn" style="background-color:#52796f; font-size: large;">Send</button>
            </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ©️ 2023 Copyright:
        <a class="text-white" href="https://computer.ju.edu.jo/ar/arabic/Home.aspx"> Kasit.com </a>
      </div>
    </footer>
  </section>
       
        </body>
       
        </html>  