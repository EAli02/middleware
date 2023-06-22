<html>
    <head>
        <meta charset="utf-8">
        <title>loginPage</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css">

            <style>
                 .btn{
                    width: 150px;
                    height: 50px;
                 }
                 input{
                  height: 50px;
                 }
            </style>
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
                <a class="nav-link active"  href="indx.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Home</a>
              </li>
              <li class="nav-item dropdown" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">
                <a class="nav-link active dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sign Up
                </a>
                <ul class="dropdown-menu" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">
                  <li><a class="dropdown-item" href="signinstudent.php">Student</a></li>
                  <li><a class="dropdown-item" href="signindoner.php">Donor</a></li>
                </ul>
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
          <h1 style="text-align: center; font-family: Montserrat;font-size: 3.5rem;">Sign in</h1>
          <p style="text-align: center; font-size:large;font-family: Montserrat;font-size: 1.5rem;">If you have already an account in this website just fill the required information to log in to your account</p>
        </div>
      </div>
    
    <hr/>
       <div class="row" id="st">
        <div class="col-lg-8">
          <div class="wrap">
            <h2 style="padding-bottom: 30px;font-family: Montserrat;font-size: 2.5rem; color: #2f3e46;">Sign in </h2>
      
           <form action="loginproces.php" method="post">
              <!-- <label for="exampleInputEmail1" class="form-label">Email:</label><br>-->
               <input type="email" name="email" class="form-control" placeholder="E-mail" aria-describedby="passwordHelpInline" required="required" style="margin-bottom: 30px;"><br>
              
               <!-- class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" -->
             <!-- <label for="inputPassword6" class="col-form-label">Password</label><br> -->
               <input type="password" name="password" class="form-control"placeholder="password" aria-describedby="passwordHelpInline" required="required" style="margin-bottom: 30px;"><br>
               
              <!-- Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters -->
               <button type="submit" name="login" class="btn" style="background-color:#2f3e46; color: #cad2c5; font-family: Montserrat;font-size: 1.5rem;"> Sign in</button>
               <!--#393E46-->
               </form>
           </div>
        </div>
        <div class="col-lg-3">
          <span class="icon" style="float: center;margin-top: 80px;">
            <img class="skill" src="./images/logo.png" width="300" alt="skill-img">
            </span>
        </div>
       </div>
       

           <br>
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
        ©? 2023 Copyright:
        <a class="text-white" href="https://computer.ju.edu.jo/ar/arabic/Home.aspx"> Kasit.com </a>
      </div>
    </footer>
  </section>


       </body>
   </html>
<!--<form action="loginproces.php" method="post">
<label>email:</label><br>
<input type="email" name="email"><br>
<label>password</label><br>
<input type="password" name="password"><br>
<button type="submit" name="login"> login</button>
</form>-->