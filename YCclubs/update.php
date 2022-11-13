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
        <title>YCclubs</title>
    </head>
<body>
    <div class="container">
        <h1>YC Clubs</h1>
        <?php 
include 'connection.php';
$conn= conn();
$sql = "select * FROM `clubs` WHERE `id` = '" . $_GET["id"] . "'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) { 
        echo '<form action="modifierserver.php?id='.$_GET["id"].'" method="post">
                <input placeholder="Logo"  name="logo" value="'.$row["logo"].'" required/>
                <input placeholder="Name" value="'.$row["name"].'"  name="name" required/>
                <select name="categorie" ">
                    <option value="'.$row["categorie"].'">
                    '.$row["categorie"].'
                    </option>
                    <option value="Art">
                        Art
                    </option>
                    <option value="Sport">
                        Sport
                    </option>
                    <option value="Robotic">
                        Robotic
                    </option>
                    <option value="Envirement">
                        Envirement
                    </option>
                    <option value="Social">
                        Social
                    </option>
                </select>
                <input placeholder="Date" type="date" value="'.$row["date"].'" name="date" required/>
                <textarea placeholder="Discription" value= "" cols="5" name="disc" required>'.$row["discription"].'</textarea>
                <br>
                <button>Done</button>
        </form>';  }}?>
        <a href="admin.php">Go back</a>
    </div>
</body>
</html>