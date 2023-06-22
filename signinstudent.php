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
            <a class="nav-link active"  href="indx.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="login.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Sign in</a>
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
<form  class= form action="processignin.php" method="post" enctype="multipart/form-data">
  <div class="row">
  <div class="col">
    <label >First name</label><br>
      <input type="text" name="fname" required="required"><br>
    </div>
    <div class="col">
    <label>Last name</label><br>
      <input type="text" name="lname"  required="required"><br>
    </div>
    <div class="col">
    <label>Email</label><br>
      <input type="email" name="email"  required="required"><br>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label>Password</label><br>
      <input type="password" name="password"  required="required" ><br>
    </div>
    <div class="col">
      <label>Phone</label><br>
      <input type="text" name="phone"  required="required"><br>
    </div>
    <div class="col">
      <label>Username</label><br>
      <input type="text" name="username"  required="required"><br>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label>Gpa</label><br>
      <input type="number" name="gpa" min="2" max="4" step=".1" required><br>
    </div>
    <div class="col">
      <label> Total of pass credits</label><br>
      <input type="number" name="topc" required><br>
    </div>
    <div class="col">
      <label> Hours</label><br>
      <input type="number" name="hours" max="21" required><br>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
    <label>Registration screen</label><br>
      <input type="file" name="rs"><br>
    </div>
    <div class="col-sm-6">
    <label>Financial voucher</label><br>
      <input type="file" name="fv"><br>
      </div>
  </div>

  <div class="row">
    <div class="col">
    <label>College</label><br>
    <select name="college" style="width:70% ;" required>
      <option value="Arts">Arts</option>
      <option value="Business">Business</option>
      <option value="Sharia">Sharia</option>
      <option value="Educational Sciences">Educational Sciences</option>
      <option value="Law">Law</option>
      <option value="SportScience">Sport Science</option>
      <option value="ArtsandDesign">Arts and Design</option>
      <option value="InternationalStudies">Prince Al Hussein Bin Abdullah II School of International Studies</option>
      <option value="ForeignLanguages">Foreign Languages</option>
      <option value="ArchaeologyandTourism">ArchaeologyandTourism</option>
      <option value="Science">Science</option>
      <option value="Agriculture">Agriculture</option>
      <option value="Engineering">Engineering</option>
      <option value="IT">IT</option>
      <option value="Medicine">Medicine</option>
      <option value="Nursing">Nursing</option>
      <option value="Pharmacy">Pharmacy</option>
      <option value="Dentistry">Dentistry</option>
      <option value="RehabilitationSciences">RehabilitationSciences</option>
    </select><br>
    </div>
      <div class="col">
        <label>Gender</label><br>
    <select name="gender" style="width:70% ;" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
     </select><br>
      </div>
    <div class="col">
     <label>The Main Reason</label><br>
    <select name="reason" style="width:70% ;" required>
      <option value="illness">illness</option>
      <option value="orphan">orphan</option>
      <option value="Pockets of poverty">Pockets of poverty</option>
      <option value="People of determination">People of determination</option>
      <option value="Others">Others</option>
    </select>
    </div>
  </div>
    
  <div class="row-lg-2">
    <div class="col">
    <label>Description your case</label><br>
    <textarea name="description" style="width: 70%; height:20%; display: block;" required></textarea><br>
    </div>
  </div>
  <br>
    <div class="row">
      <div class="col">
    <button class=btn type="submit" name="signinstudent" style="background-color: #84a98c; font-size: large;">Sign Up</button>
      </div>
    </div>
    <br>
    <br>
  
  </form> 
  </div> 
   
  
   
     <div class="col-3" id="right">
      <div class="row">
      <p id="pa" style="font-family: Montserrat;text-align: center;"> Please fill in the complete and correct information because it will be verified and this case will be considered 
        and the validity of the case will be presented to the donor and you will be notified 
        of rejection or acceptance</p>
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
<!--...<html>
<head>
    <title>signin</title>
</head>
<body>
    <div></div>
<form action="processignin.php" method="post" enctype="multipart/form-data">
    <label>first name</label><br>
<input type="text" name="fname"><br>
    <label>last name</label><br>
<input type="text" name="lname"><br>
<label>email</label><br>
<input type="email" name="email"><br>
    <label>password</label><br>
<input type="password" name="password"><br>
    <label>phone</label><br>
<input type="text" name="phone"><br>
        <label>username</label><br>
<input type="text" name="username"><br>
    <label>college</label><br>
<select name="college">
  <option value="Arts">Arts</option>
  <option value="Business">Business</option>
  <option value="Sharia">Sharia</option>
  <option value="Educational Sciences">Educational Sciences</option>
  <option value="Law">Law</option>
  <option value="SportScience">Sport Science</option>
  <option value="ArtsandDesign">Arts and Design</option>
  <option value="InternationalStudies">Prince Al Hussein Bin Abdullah II School of International Studies</option>
  <option value="ForeignLanguages">Foreign Languages</option>
  <option value="ArchaeologyandTourism">ArchaeologyandTourism</option>
  <option value="Science">Science</option>
  <option value="Agriculture">Agriculture</option>
  <option value="Engineering">Engineering</option>
  <option value="IT">IT</option>
  <option value="Medicine">Medicine</option>
  <option value="Nursing">Nursing</option>
  <option value="Pharmacy">Pharmacy</option>
  <option value="Dentistry">Dentistry</option>
  <option value="RehabilitationSciences">RehabilitationSciences</option>
  
</select><br>
    <label>gender</label><br>
<select name="gender">
    <option value="male">male</option>
    <option value="female">female</option>
</select><br>
    <label>gpa</label><br>
    <input type="number" name="gpa" min="2" max="4" step=".1"><br>
    <label> Total of pass credits</label><br>
    <input type="number" name="topc"><br>
    <label> hours</label><br>
    <input type="number" name="hours" max="21"><br>
    <label>registration screen</label><br>
    <input type="file" name="rs"><br>
    <label>financial voucher</label><br>

    <input type="file" name="fv"><br>
    <label>description your case</label><br>
    <textarea name="description"></textarea><br>
    <br>
    <button type="submit" name="signinstudent">signin</button>
</form>    
</body>
</html>-->