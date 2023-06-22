<?php
session_start();
if(empty($_SESSION['idd']))
{
    header("location:login.php");
    die();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Student-report </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="newdoner1.css">
        <style>
table {
    font-family: "Montserrat";
    border-collapse: collapse;
    border-width: 10px;
   width: 75%;
    margin-top: 100px;
    margin-bottom: 60px;
    
  }

  td, th {
    border: 1px solid  #2f3e46;
    text-align: left;
    padding: 8px;
    font-size:1.4rem;
    border-width: 3px;
    color: #000;
    text-align: center;
  }

  tr:nth-child(even) {
    background-color:  #cad2c5;
  }
  tr:nth-child(odd) {
    background-color:  #52796f;
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
                    <a class="nav-link active"  href="newdoner.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Main page</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="reportfordoner.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Report page</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="session.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

      <div class="descriptionn">
       
          <div class="row">
            <div class="col">
          <span class="icon" style="float: center;margin-bottom:30px; ">
            <img  src="./images/information.png" width="60" >
            </span>
          <h1 style="text-align: center;font-family: Montserrat;font-size: 3rem;"> Donations made by the donor</h1>
        </div>
      </div>
        <div class="row">
          <p style="text-align: center; font-size:large;font-family: Montserrat;font-size: 1.5rem;"> This page includes information about donations made by the donor. 
            In the table is the donation number and the amount that was donated</p>
        </div>
        </div>
      
    
    <hr/>
<h1 style="text-align: center; font-size: 3rem;  font-family: Montserrat;"> Donations made </h1>

    <div class="table-box">

      <div class="table-row" style="background: #354f52; color: #000;">

        <div class="table-cell">

          <p style="font-size: 1.6rem;"> Donation number </p>

        </div>

        <div class="table-cell">

          <p style="font-size: 1.6rem;"> Amount </p>

        </div>

      </div>



<?php
        require_once 'connection.php';
            $namee=$_SESSION['email'];
            
            $SELECT=$database->prepare("SELECT * FROM `donations` WHERE `doner` = :name");
            $SELECT->bindParam("name",$namee);
            $SELECT->execute();
            foreach($SELECT as $data){
    echo  '<div class="table-row">';

        echo '<div class="table-cell">';

          echo'<p>' .$data['numberofDonation']. '</p>';

echo '</div>';

       echo '<div class="table-cell">';

        echo ' <p>'.$data['amount']  .'</p>';

        echo'</div>';

     echo '</div>';
            }
?>
    </div>
 <!--  <div  align="center">
        <table>
          <thead>
            <tr>
              <td colspan="2" style="text-align: center;background-color: #cad2c5;font-size:2rem;"> Donations made </td>
            </tr>
          </thead>
          <tr>
            <th style="text-align: center; font-size: 2rem;background-color:#52796f;"> Donation number </th>
            <th style="text-align: center; font-size: 2rem;background-color:#52796f;">  Amount </th>
          </tr>
            <?/*php
            $username="root";
$password="";
$database=new pdo("mysql:host=localhost;dbname=middleware;",$username,$password);
            $namee=$_SESSION['name'];
            
            $SELECT=$database->prepare("SELECT * FROM `donations` WHERE `doner` = :name");
            $SELECT->bindParam("name",$namee);
            $SELECT->execute();
            foreach($SELECT as $data)
            {
         echo '<tr>';
            echo '<td>'. $data['numberofDonation']. '</td>';
            echo '<td>'. $data['amount']. '</td>';
         echo '</tr>';
            }*/?>
         
         
        </table> 
      </div>-->
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