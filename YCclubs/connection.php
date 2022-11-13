<?php 
function conn(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ycclubs";  
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    if ($conn->connect_error) {
        return null;
      }else{
        return $conn;
      }
}
function select($par){
  $sql = "SELECT * FROM $par";
  return $sql;
}

?>