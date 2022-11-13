<?php 
$name = $_POST['name'];
$logo = $_POST['logo'];
$disc = $_POST['disc'];
$categorie = $_POST['categorie'];
$date = $_POST['date'];
include 'connection.php';
$conn= conn();
$sql = "INSERT INTO clubs (name, logo, discription,categorie,date)
VALUES ('$name',' $logo', '$disc','$categorie','$date')";

if ($conn->query($sql) === TRUE) {
 header('location: admin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>