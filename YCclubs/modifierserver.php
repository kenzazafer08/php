<?php 
$name = $_POST['name'];
$logo = $_POST['logo'];
$disc = $_POST['disc'];
$categorie = $_POST['categorie'];
$date = $_POST['date'];
include 'connection.php';
$conn= conn();
$sql = "UPDATE `clubs` SET `name`='$name',`discription`='$disc',`categorie`='$categorie',`logo`='$logo',`date`='$date' WHERE `id` = '" . $_GET["id"] . "'";

if ($conn->query($sql) === TRUE) {
 header('location: admin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>