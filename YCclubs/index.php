<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/icon" href="images/YC Clubs.png"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>YCclubs</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/YC Clubs.png"/>
        </div>
        <div class="nav">
            <a href="index.php" style="color: #0384EE;">Clubs</a>
            <a href="About.html">About</a>
            <a href="contact.html">Contact</a>
        </div>
        <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
    </header>
    <div class="clubs">
        <?php 
        include 'connection.php';
        $conn = conn();
        $p = 'clubs';
        $sql = select($p);
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
  // output data of each row
       while($row = $result->fetch_assoc()) { 
       ?>
       <div class="club">
       <?php echo  '<img src=" '. $row["logo"].' " style="width: 150px; height:150px"/>
       <h2> '. $row["name"] .'</h2>
        <p>'. $row["discription"] .'</p>
        <p class="date">'. $row["date"] .'</p>
        <span class="categorie">'. $row["categorie"] .'</span>
        </div>';
}} else {
  echo "0 results";
}
        ?>
       </div>
    <footer id="footer"  class="footer">
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