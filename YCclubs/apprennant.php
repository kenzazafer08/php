<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/icon" href="images/YC Clubs.png"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>$(document).ready(function () {
      $('#example').DataTable();
  });</script>
    <title>YCclubs</title>
</head>
<body>
    <header style="display: flex; text-decoration: none;">
        <div class="logo">
            <img src="images/YC Clubs.png"/>
        </div>
        <div class="nav">
            <a href="admin.php" >Clubs</a>
            <a href="apprennant.php" style="color: #0384EE;">Apprenants</a>
        </div>
        <div class="dropdown">
         <span><?php echo $_SESSION['name'] ?></span>
         <div class="dropdown-content">
           <a href="newclub.php">Add Club</a>
           <a href="logout.php">Logout</a>
         </div>
        </div> 
    </header>
    <div class="cont" >
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Class</th>
              <th>Age</th>
              <th style="width: 200PX;">Role</th>
              <th style="width: 300PX;">Club</th>
          </tr>
      </thead>
      <tbody>
      <?php 
            include 'connection.php';
            $conn = conn();
            $p = 'apprenant';
            $sql = select($p);
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
      // output data of each row
           while($row = $result->fetch_assoc()) { 
            if( $row["club"] == NULL){
                echo  '<tr><td><img src=" '. $row["image"].' " style="width: 50px; height:50px; border-radius: 200px;"/></td>
       <td> '. $row["name"] .'</td>
       <td>'. $row["class"] .'</td>
       <td>'. $row["age"] .' ans</td>
        <td>Apprennant</td>
        <td ><a class="span" style="margin-left: 5rem;"href="member.php?id='. $row["id"].'" >Add Club</a></td> 
        </tr>';
            }else{
                echo  '<tr><td><img src=" '. $row["image"].' " style="width: 50px; height:50px; border-radius: 200px;"/></td>
                <td> '. $row["name"] .'</td>
                <td>'. $row["class"] .'</td>
                <td>'. $row["age"] .' ans</td>
                 <td>'. $row["role"] .'</td>
                 <td >'. $row["club"].' <a href="deletemembre.php?id='. $row["id"].'" style="float:right; color:black"><i class="fa fa-remove"></i></a> </td> 
                 </tr>';
            }   
}} else {
  echo "0 results";
}
           ?>
      </tfoot>
  </table>
</div>

</div>
<footer id="footer"  class="footer" style="display: flex;">
  <div class="footer-social">
      <a href="https://www.facebook.com/kenza.zafer.9"><i class="fa fa-facebook"></i></a>	
      <a href="https://www.instagram.com/kenza_zafer/"><i class="fa fa-instagram"></i></a>
      <a href="https://www.linkedin.com/in/kenza-zafer-05a24921b/"><i class="fa fa-linkedin"></i></a>	
  </div>
  <p>
      &copy;copyright. designed and developed by <span style="color: #0384EE;">ZAFER KENZA</span></a>
  </p><!--/p-->
</footer>
</body>
</html>
