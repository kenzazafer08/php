<?php 
session_start();
include 'connection.php';
$conn= conn();
$sql = "select * FROM `clubs` WHERE `id` = '" . $_GET["id"] . "'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) { 
            $c = $row['name'];
$sql1 = "UPDATE `apprenant` SET `club`=NULL,`role`=NULL WHERE `club`= '$c'";}}
$sql2 = "DELETE FROM `clubs` WHERE `id` = '" . $_GET["id"] . "'";
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE ) {
 header('location: admin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>