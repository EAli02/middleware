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
        <title> Donner </title>
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

                    <a class="nav-link active"  href="reportfordoner.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Report Page</a>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="session.php" style="color: #000; font-size: 1.5rem;font-family: Montserrat;">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
   <!--
          <div class="activity-card">
            <h3>Donar Name </h3>
          </div>
        -->
          <div class="descriptionn">
            <div class="skill-row">
              <h1 style="text-align: center;font-family: Montserrat;font-size: 3.5rem;"> Welcome to the donation page</h1>
              <p style="text-align: center; font-size:large;font-family: Montserrat;font-size:larger;"> 
                You have the option of donating to a specific charity. To make things easier, select one of the options below, 
                which include the college you'd like to donate to, the gender, the price, and the reason. He could be an orphan, 
                a sick person, a poor person, a determined person, or for other reasons.</p>
            </div>
          </div>
          

         

          <div class="row" align="center">
            <div class="col-lg-7" id="title">
              <span class="icon" style="float: center;">
                <img class="skill" src="./images/user (1).png" width="60" alt="skill-img">
                </span>
                 <label style=" font-size: 2rem;padding: 10 8px;font-family: Montserrat;color: #2f3e46;"> The Donar information</label>
          <div class="row">
            <div class="col-sm-5">
                <label style=" font-size: 2rem;padding: 10 8px;font-family: Montserrat;color: #2f3e46;">Name</label><br>
                <p style="color: #000;"><?php echo ucfirst($_SESSION['name']); ?></p>
            </div>
            <div class="col">
              <label style=" font-size: 2rem;padding: 10 8px;font-family: Montserrat;color: #2f3e46;">Email </label><br>
              <p><?php echo $_SESSION['email'];?> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4" id="title">
          <span class="icon" style="float: center;">
            <img class="skill" src="./images/education.png" width="60" alt="skill-img">
            </span>
          <label style=" font-size: 2rem;padding: 10 8px;font-family: Montserrat;color: #2f3e46;">The Total Student Case </label><br>
          <p style="font-size: 2rem;"> <?php
              
        require_once 'connection.php';
              $S=$database->prepare("SELECT * FROM student WHERE report='no' AND amount > 0");
              $S->execute();
              echo $S->RowCount();
              ?> </p>
        </div> 
     </div>
     

          
     <h4 style="font-family:Montserrat; font-size: 2.5rem;color: #2f3e46;" align="center"> Filter</h4>
     <p style="font-size: larger;font-family:  Montserrat;" align="center">You have the option of donating to a specific charity. To make things easier, select one of the options below, which include the college you'd like to donate to, the gender, the price, and the reason. He could be an orphan, a sick person, a poor person, a determined person, or for other reasons.</p>

          <br>
        <form action="" method="post" class="dropdown" style="background-color: #52796f; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);" align="center">
                <label style="color: #2f3e46;font-size: 1.5rem;">College</label>
                <select name="college" required style="width: 90px ;">
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
                  <option value="RehabilitationSciences">Rehabilitation Sciences</option>
                  
                </select>


                <label style="color: #2f3e46;font-size: 1.5rem;">Gender</label>
                <select name="gender" style="width: 90px ;">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  
                  
                </select>

                <label style="color: #2f3e46;font-size: 1.5rem;">GPA</label>
                <select name="gpa" style="width: 90px ;">
                    <option value="2.5"> >2.5</option>
                    <option value="3"> >3</option>
                    <option value="3.5"> >3.5</option>
                  
                  
                </select>

                <label style="color: #2f3e46;font-size: 1.5rem;">Reason</label>
                    <select name="reason" style="width: 90px ;">
                       <option value="illness">illness</option>
                       <option value="orphan">orphan</option>
                       <option value="Pockets of poverty">Pockets of poverty</option>
                       <option value="People of determination">People of determination</option>
                       <option value="Others">Others</option>
                     </select>

                <button type="submit"  name="filter" class="btn" style="margin-left: 10px;">Filter </button>
                <button onClick="window.location.reload();" class="btn" >Refresh Page</button>
        </form>
        <hr/>

        <h2 style="font-family:Montserrat;color: #2f3e46;font-size: 3rem;padding-top: 30px;"align="center"> All Cases</h2>
          <br>
          <br>

   <!--     <div class="wrap" style="border-radius: 50px;"  align="center">
       <div class="container-fluid">
        <div class="row">
            
            <div class="col-sm-2">
                <h4 style="margin-top: 15px;">case 9</h4>
            </div>
            <div class="col-sm-2">
                <label>Gender</label><br>
                <p>female</p>
            </div>
            <div class="col-sm-2">
                <label>College </label><br>
                 <p> Law </p>
            </div>
            <div class="col-sm-2">
                <label>GPA </label><br>
              <p> 2.8 </p>
             </div>
            <div class="col-sm-2">
                <label> Resone </label><br>
                <p> orphan </p>
            </div>
            <div class="col-sm-2">
                <a class="more-info" href="info.html" style="color: black;"><button type="submit" class="btn" style=" margin-top: 20px;">More Info. </button></a><br>
            </div> 
           
        </div>
        </div>
        </div> -->

        



 <?php
        require_once 'connection.php';
        
        if(!isset($_POST['filter'])){
$SELECT=$database->prepare("SELECT `id`,`college`,`gender`,`gpa`,`amount` , `hours`,`reason` FROM `student` WHERE `report`='no' AND `amount`>0 AND`condition`='accept'");
$SELECT->execute();

foreach($SELECT as $data)
{
   
    echo '<div class="wrap" style="border-radius: 50px;"  align="center">';
       echo '<div class="container-fluid">';
        echo '<div class="row">';
            
            echo '<div class="col-sm-2">';
                echo '<h4 style="margin-top: 15px;">'."case". $data['id'].'</h4>';
           echo  '</div>';
            echo '<div class="col-sm-2">';
             echo    '<label>'."Gender".'</label>'.'<br>';
                 echo '<p>'.$data['gender'].'</p>';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<label>'."College". '</label>'.'<br>';
                 echo '<p>'. $data['college'] .'</p>';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<label>'."GPA". '</label>'.'<br>';
              echo '<p>' .$data['gpa'] .'</p>';
             echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<label>'. "reason" .'</label>'.'<br>';
                echo '<p>'. $data['reason'] .'</p>';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<a class="more-info" href=newcase.php?id="',$data['id'],'" style="color: black;">'.'<button type="submit" class="btn" style=" margin-top: 20px;">'
                    ."More Info...".'</button>'.'</a>'.'<br>';
            echo '</div>'; 
           
      echo  '</div>';
      echo  '</div>';
        echo '</div>';
            /*  echo  '<a class="more-info" href=case.php?id="',$data['id'],'" style="color: black; font-family: Montserrat, sans-serif; font-size: large;">'.'<button type="submit" class="btn" style="background-color: #A8E890;font-size: large; margin-top: 35px;">'."More Info...". '</button>'.'</a>'.'<br>'.*/
   

    
}}
  if(isset($_POST['filter']))
{
      
    $college=$_POST['college'];
    $gender=$_POST['gender'];
    
    $gpa=(int)$_POST['gpa'];
    $SELECT=$database->prepare("SELECT `id`,`college`,`gender`,`gpa`,`amount` , `hours` , `reason`FROM `student` WHERE `report`='no' AND `amount`>0 AND`condition`='accept'");

$SELECT->execute();
    foreach($SELECT as $data)
{
       
        if(($_POST['gender'] == $data['gender'] )&& ($_POST['college'] == $data['college']) && ($_POST['gpa'] <= $data['gpa'])&&($_POST['reason']==$data['reason']) )
        { 
            
 echo '<div class="wrap" style="border-radius: 50px;"  align="center">';
       echo '<div class="container-fluid">';
        echo '<div class="row">';
            
            echo '<div class="col-sm-2">';
                echo '<h4 style="margin-top: 15px;">'."case". $data['id'].'</h4>';
           echo  '</div>';
            echo '<div class="col-sm-2">';
             echo    '<label>'."Gender".'</label>'.'<br>';
                 echo '<p>'.$data['gender'].'</p>';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<label>'."College". '</label>'.'<br>';
                 echo '<p>'. $data['college'] .'</p>';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<label>'."GPA". '</label>'.'<br>';
              echo '<p>' .$data['gpa'] .'</p>';
             echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<label>'. "Resone" .'</label>'.'<br>';
                echo '<p>'. $data['reason'] .'</p>';
            echo '</div>';
            echo '<div class="col-sm-2">';
                echo '<a class="more-info" href=newcase.php?id="',$data['id'],'" style="color: black;">'.'<button type="submit" class="btn" style=" margin-top: 20px;">'
                    ."More Info...".'</button>'.'</a>'.'<br>';
            echo '</div>'; 
           
      echo  '</div>';
      echo  '</div>';
        echo '</div>';
}
}
}      
        
        ?>
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
        ©️ 2023 Copyright:
        <a class="text-white" href="https://computer.ju.edu.jo/ar/arabic/Home.aspx"> Kasit.com </a>
      </div>
    </footer>
  </section>
       
   
    </body>

</html>         