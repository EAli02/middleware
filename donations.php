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
$T=$database->prepare("SELECT  * FROM donations");
  $T->execute();
}
?>
<html>
<head><meta charset="utf-8">
    <title>Donate operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="newdoner1.css">
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
          <p> <?php echo $_SESSION['email'];?></p>
        </div>
      </div>
    </div>
    <div class="col" id="title">
      <span class="icon" style="float: center;">
        <img class="skill" src="./images/education.png" width="60" alt="skill-img">
        </span>
      <label>The Total cases </label><br>
      <p style="font-size: 2rem;"> <?php echo $T->RowCount();?> </p>
    </div>
  </div>
  <hr/>
       <!-- <h1 style="text-align: center; font-size: 3rem;  font-family: Montserrat;">Donation Table</h1>
    <br>
    <table>
      <tr style="background-color:#A8E890;">
        <th style="text-align: center; font-size: 2rem;background-color:#52796f;"> Name of donor </th>
        <th style="text-align: center; font-size: 2rem;background-color:#52796f;">  Student email </th>
        <th style="text-align: center; font-size: 2rem;background-color:#52796f;">  Amount </th>
      </tr>-->
      <h1 style="text-align: center; font-size: 3rem;  font-family: Montserrat;">Donation Table</h1>
  <div class="table-box">
    <div class="table-row" style="background: #354f52; color: #000;">
      <div class="table-cell">
        <p> Name of donor </p>
      </div>
      <div class="table-cell">
        <p> Student Email </p>
      </div>
      <div class="table-cell">
        <p> Amount </p>
      </div>
    </div>
</div>

<?php


require_once 'connection.php';
$select=$database->prepare("SELECT * FROM `donations`");
            $select->execute();
                      foreach($select as $data)
            {
              echo'<div class="table-row">';
                echo'<div class="table-cell">';
                  echo'<p>'. $data['doner'].'</p>';
                echo'</div>';
                echo'<div class="table-cell">';
                  echo'<p>'.$data['student'].'</p>';
                echo'</div>';
                echo'<div class="table-cell">';
                  echo'<p>'. $data['amount'].'</p>';
                echo'</div>';
              echo'</div>';
            
}
/*echo '<tr>';
    echo '<td>'.ucfirst($data['doner']).'</td>';
    echo '<td>'.ucfirst($data['student']).'</td>';
                echo '<td>'.$data['amount'].'</td>';
          
  echo '</tr>';

            }*/

?>
            </table>
       <br>
        <br>
        </body>
    </html>