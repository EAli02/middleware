<html>
    <head>
        <meta charset="utf-8">
        <title>signin</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
      <nav class="navbar navbar-expand-lg "  style="background-color: #52796f;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: #000; padding: 20px; padding: 20px; font-size:2.5rem;font-family: Montserrat;">Middleware</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-auto" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex   mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="indx.php" style="color: #000; font-size: large;font-size:1.5rem;font-family: Montserrat;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="login.php" style="color: #000; font-size: large;font-size:1.5rem;font-family: Montserrat;">Sign in</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="descriptionn">
        <div class="skill-row">
          <!--<span class="icon" style="float: center;margin-bottom:30px; ">
            <img class="skill" src="logo.png" width="60" alt="skill-img">
            </span>-->
          <h1 style="text-align: center;font-family: Montserrat;font-size: 3.5rem;">Sign up</h1>
          <p style="text-align: center; font-size:large;font-family: Montserrat;font-size: 1.5rem;"> Welcome to our website please fill your required information</p>
        </div>
      </div>
    
    <hr/>

    <div class="row">
    
      <div class="col-9">
    <form class= form method="post" action="processignin.php">
    <div class="row">
    <div class="col">
      <label>Name</label><br>
      <input type="text" name="name" required="required"><br>
      </div>
      <div class="col">
        <label>Email</label><br>
        <input type="email" name="email" required="required"><br>
      </div>
      <div class="col">
        <label>Password</label><br>
        <input type="password" name="password" required="required"><br>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label>Phone</label><br>
        <input type="text" name="phone" required="required"><br>
      </div>
      <div class="col">
        <label> Card</label><br>
        <input type="tel" name="card"  placeholder="xxxx-xxxx-xxxx-xxxx" max="16" required="required" style="color: grey;">
        <!--pattern="[0-9]{13,16}"-->
         <br>
      </div>
      <div class="col">
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col">
        <button name="signindoner" type="submit" class=btn class="btn"  style="background-color: #84a98c; font-size: large;">Sign Up</button>
      </div>
    </div>
    </form>
      </div>
      
      
      
      <div class="col-3" id="right">
        <div class="row">
        <p id="pa" style="font-family: Montserrat; text-align: center;"> Please fill in the complete and correct and make sure the card number are correct  
         and we guarantee you that the cases on the website need your help , the money goes quickly to the university student's account
         and the student's tuition is paid.
         </p>
       </div>
       
       <div class="row">
        <span class="icon" style="float: center;margin-top: 80px;">
          <img class="skill" src="./images/logo.png" width="300" alt="skill-img">
          </span>
       </div>
    
       </div>
  </div>

  <br>
<br>
<hr/>
<br>
<br>
    
       
<!--
          <div class="wrap">
            <h2>Sign in </h2>
            <br>

       <form class= form method="post" action="processignin.php">
            <label>Name</label><br>
            <input type="text" name="name" required="required" style="color: grey;"><br>
            <label>Email</label><br>
            <input type="email" name="email" required="required" style="color: grey;"><br>
            <label>Password</label><br>
            <input type="password" name="password" required="required" style="color: grey;"><br>
            <label>Phone</label><br>
            <input type="text" name="phone" required="required" style="color: grey;"><br>
            <label> Card</label><br>
            <input type="tel" name="card" pattern="[0-9]{13,16}" placeholder="xxxx-xxxx-xxxx-xxxx" max="16" required="required" style="color: grey;">
               <br>
               <br>
              <button name="signindoner" type="submit" class=btn class="btn" style="background-color:#A8E890; font-size: large;">signin</button>
        </form>
          </div>

        -->
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
        ©? 2023 Copyright:
        <a class="text-white" href="https://computer.ju.edu.jo/ar/arabic/Home.aspx"> Kasit.com </a>
      </div>
    </footer>
  </section>

         
    </body>
    </html>  <!-- <html>
<form method="post" action="processignin.php">
            <label>name:</label><br>
            <input type="text" name="name"><br>
            <label>email:</label><br>
            <input type="email" name="email"><br>
            <label>password:</label>
            <input type="password" name="password"><br>
            <label>phone:</label>
            <input type="text" name="phone"><br>
    <label> card:</label>
    <input type="tel" name="card" pattern="[0-9]{13,16}" placeholder="xxxx-xxxx-xxxx-xxxx" max="16">
    <br>
    <button name="signindoner" type="submit">signin</button>
    </form>
    </html>-->