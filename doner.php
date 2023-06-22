<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Donner </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="doner.css">
    </head> 
    <body>
        <nav class="navbar navbar-expand-lg" style="background-color: #A8E890; height: 15%;">
            <a class="navbar-brand" style="color: #000; padding: 20px; padding: 20px; font-size:xx-large;">Middleware</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
        </button>
          <div class="collapse navbar-collapse">
             <ul class="nav"> <!-- navbar-me-auto mb-2 mb-lg-0-->
              <li class="nav-item">
                <a class="nav-link" href="session.php" style="color: #000;margin-left: 1150px; font-size: large;">Logout</a>
                <!--margin-left: 1200px;-->
              </li>
             </ul> </div>
           <!-- </div>-->
        </nav><!--
        <form class="dropdown" method="post" action=" " style="background-color: #bfcb9c;">
                <label style="color: rgb(56, 56, 56);">College</label>
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


                <label style="color: rgb(56, 56, 56);">Gender</label>
                <select name="gender" style="width: 90px ;">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  
                  
                </select>

                <label style="color: rgb(56, 56, 56);">GPA</label>
                <select name="gpa" style="width: 90px ;">
                    <option value="2.5"> >2.5</option>
                    <option value="3"> >3</option>
                    <option value="3.5"> >3.5</option>
                  
                  
                </select>

                <button type="submit"  name="filter" class="btn" style="background-color: #A8E890;font-size: large; margin-left: 10%;">Filter </button>
                <button onClick="window.location.reload();" class="btn" style="background-color: #A8E890;font-size: large;">Refresh Page</button>
        </form>-->
         
<form method="post" action=" " class="dropdown" style="background-color: #bfcb9c;">
<label style="color: rgb(56, 56, 56);">college</label>
    <select name="college" required  style="width: 90px ;">
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
  
    </select>
    <label style="color: rgb(56, 56, 56);">GENDER</label>
    <select name="gender" style="width: 90px ;">
    <option value="male">male</option>
    <option value="female">female</option>
</select>
    <lable style="color: rgb(56, 56, 56);">GPA</lable>
    <select name="gpa" style="width: 90px ;">
    <option value="2.5"> >2.5</option>
    <option value="3"> >3</option>
        <option value="3.5"> >3.5</option>
    
        </select>
    <button type="submit" name="filter" class="btn" style="background-color: #A8E890;font-size: large; margin-left: 10%;"> FILTER</button>
    <button onClick="window.location.reload();" class="btn" style="background-color: #A8E890;font-size: large;">Refresh Page</button>
</form>
        <?php
        require_once 'connection.php';
        
        if(!isset($_POST['filter'])){
$SELECT=$database->prepare("SELECT `id`,`college`,`gender`,`gpa`,`amount` , `hours` FROM `student` WHERE `report`='no' AND `amount`>0 AND`condition`='accept'");
$SELECT->execute();

foreach($SELECT as $data)
{
    echo '<div class="wrap" style="border-radius: 50px;" >';
       echo '<div class="container-fluid">';
      echo   '<div class="row">';
   echo '<div class="col-sm-2">';
                echo '<h4>'."case". $data['id'].'</h4>';
           echo '</div>';
   echo '<div class="col-sm-2">';
              echo  '<label style="color: black; font-family: Montserrat, sans-serif; font-size:x-large;">'
                  ."Gender :".'</label>'.'<br>';
                echo '<p>'.$data['gender'].'</p>';
    
           echo '</div>';
   echo '<div class="col-sm-2">';
               echo '<label style="color: black; font-family: Montserrat, sans-serif; font-size: x-large;">'."College :".'</label>'.'<br>';
                echo '<p>'. $data['college'] .'</p>';
            echo'</div>';
     echo '<div class="col-sm-2">';
               echo '<label style="color: black; font-family: Montserrat, sans-serif; font-size: x-large;">'."GPA  :".'</label>'.'<br>';
    echo '<p>'. $data['gpa'] .'</p>';
            echo'</div>';
    echo '<div class="col-sm-2">';
     echo '<label style="color: black; font-family: Montserrat, sans-serif; font-size: x-large;">'."Hours   :".'</label>'.'<br>';
    echo '<p>'. $data['hours'] .'</p>';
            echo'</div>';
    echo '<div class="col-sm-2">';
              echo  '<a class="more-info" href=case.php?id="',$data['id'],'" style="color: black; font-family: Montserrat, sans-serif; font-size: large;">'.'<button type="submit" class="btn" style="background-color: #A8E890;font-size: large; margin-top: 35px;">'."More Info...". '</button>'.'</a>'.'<br>'.
            '</div>'; 
   echo '</div>';
        echo '</div>';
        echo '</div>';
    

    
}}
  if(isset($_POST['filter']))
{
    $college=$_POST['college'];
    $gender=$_POST['gender'];
    $gpa=(int)$_POST['gpa'];
    $SELECT=$database->prepare("SELECT `id`,`college`,`gender`,`gpa`,`amount` , `hours` FROM `student` WHERE `report`='no' AND `amount`>0 AND`condition`='accept'");
    
$SELECT->execute();
    foreach($SELECT as $data)
{
        if($_POST['gender'] == $data['gender'] && $_POST['college'] == $data['college'] && (int)$_POST['gpa'] <= (int)$data['gpa'] ){
echo '<div class="wrap" style="border-radius: 50px;" >';
       echo '<div class="container-fluid">';
      echo   '<div class="row">';
   echo '<div class="col-sm-2">';
                echo '<h4>'."case". $data['id'].'</h4>';
           echo '</div>';
   echo '<div class="col-sm-2">';
              echo  '<label style="color: black; font-family: Montserrat, sans-serif; font-size:x-large;">'
                  ."Gender :".'</label>'.'<br>';
                echo '<p>'.$data['gender'].'</p>';
    
           echo '</div>';
   echo '<div class="col-sm-2">';
               echo '<label style="color: black; font-family: Montserrat, sans-serif; font-size: x-large;">'."College :".'</label>'.'<br>';
                echo '<p>'. $data['college'] .'</p>';
            echo'</div>';
     echo '<div class="col-sm-2">';
               echo '<label style="color: black; font-family: Montserrat, sans-serif; font-size: x-large;">'."GPA  :".'</label>'.'<br>';
    echo '<p>'. $data['gpa'] .'</p>';
            echo'</div>';
    echo '<div class="col-sm-2">';
     echo '<label style="color: black; font-family: Montserrat, sans-serif; font-size: x-large;">'."Hours   :".'</label>'.'<br>';
    echo '<p>'. $data['hours'] .'</p>';
            echo'</div>';
    echo '<div class="col-sm-2">';
              echo  '<a class="more-info" href=case.php?id="',$data['id'],'" style="color: black; font-family: Montserrat, sans-serif; font-size: large;">'.'<button type="submit" class="btn" style="background-color: #A8E890;font-size: large; margin-top: 35px;">'."More Info...". '</button>'.'</a>'.'<br>'.
            '</div>'; 
   echo '</div>';
        echo '</div>';
        echo '</div>';
}}
}      
        
        ?>
    </body>
</html>

