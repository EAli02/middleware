<?php
session_start();
if(empty($_SESSION['id'])){
header("location:login.php");
die();}
$id=$_SESSION['id'];
require_once 'connection.php';
    $SELECT=$database->prepare("SELECT * FROM student WHERE id=$id");
    $SELECT->execute();
$SELECT=$SELECT->fetch(PDO::FETCH_ASSOC);
$do=$database->prepare("SELECT * FROM donations WHERE student=:email");
$do->bindParam("email",$SELECT['email']);
    $do->execute();
$sum=0;

foreach($do as $summ)
{
$sum+=$summ['amount'];    
}


?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Student-page </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="student1.css">
    </head>  
    
    <body>

      <nav class="navbar navbar-expand-lg"  style="background-color: #52796f;">
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
                <a class="nav-link active"  href="student.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Student information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="privatedonations.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">The report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="edit.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;"> Edit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="session.php"style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="descriptionn">
          <div class="row">
            <div class="col">
          <span class="icon" style="float: center;margin-bottom:30px; ">
            <img  src="./images/graduation.png" width="60" >
            </span>
          <h1 style="text-align: center;font-family: Montserrat;font-size: 3rem;">Student personal page</h1>
        </div>
      </div>
        <div class="row">
          <p style="text-align: center; font-size:large;font-family: Montserrat;font-size: 1.5rem;"> This page includes the student's information and the amounts donated to him</p>
        </div>
        </div>
      
    
    <hr/>
    

    
   <!-- <span class="icon" style="float: center;">
      <img class="skill" src="information.png" width="60" alt="skill-img">
      </span> -->
       
    
    <div  align="center">
    <table>
      <thead>
        <tr>
          <td colspan="2" style="text-align: center;background-color:gray;font-size:2.5rem;">Student information </td>
        </tr>
      </thead>
      <tr>
        <th > Name </th>
        <td>  <?php echo ucfirst($SELECT['fname'])." ".ucfirst($SELECT['lname']) ?> </td>
      </tr>
      <tr>
        <th> Email </th>
        <td>  <?php echo $SELECT['email']?></td>
      </tr>
      <tr>
        <th> Username </th>
        <td>  <?php echo $SELECT['username']?> </td>
      </tr>
      <tr>
        <th> Phone </th>
        <td>  <?php echo $SELECT['phone']?> </td>
      <tr>
        <th> College </th>
        <td> <?php echo $SELECT['college']?> </td>
      </tr>
      <tr>
        <th > Efawateer </th>
        <td>  <?php echo $SELECT['efawateer']?> </td>
      </tr>
      <tr>
        <th> state </th>
        <td> <?php if( $SELECT['condition']=="reject")
            echo "Not accepted yet";
    else 
        echo $SELECT['condition'];
            ?> </td>
      </tr>

      <tr>
        <th> Reported </th>
        <td> <?php echo $SELECT['report']?>  </td>
      </tr>

      <tr>
        <th> Number of donars </th>
        <td> <?php echo $do->RowCount(); ?> </td>
      </tr>
      <tr>
        <th> Donation Total </th>
        <td> <?php echo $sum ?> </td>
      </tr>
      <tr>
        <th> Remaining Amount </th>
        <td> <?php if($SELECT['amount']===0)
            echo "Is completed";
            else
                echo $SELECT['amount'];
            ?> </td>
      </tr>
         <tr>
        <th> authentication </th>
        <td> <?php if(empty($SELECT['authentication']))
    echo "NO";
    else 
        echo "YES";
            ?> </td>
      </tr>
    </table> 
  </div>
   
    
     
     
 
    <br>
    <hr/>
    <br>
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