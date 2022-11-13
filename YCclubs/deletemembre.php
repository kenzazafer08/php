<?php 
session_start();
include 'connection.php';
$conn= conn();
$sql = "UPDATE `apprenant` SET `club`=NULL,`role`=NULL WHERE `id`= '" . $_GET["id"] . "'";

if ($conn->query($sql) === TRUE) {
 header('location: apprennant.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>