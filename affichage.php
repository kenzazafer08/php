<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
</head>
<body style="background-color : darkred; display: flex;
   justify-content: center;
   align-items: center; height: 100vh;
overflow: hidden;" >
<?php 
if(isset($_POST['submit'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$adress = $_POST['adress'];
$About = $_POST['About'];
$Formation = $_POST['Formation'];
$datefd = $_POST['datefd'];
$dateff = $_POST['dateff'];
$Education = $_POST['Experience'];
$dateed = $_POST['dateEd'];
$dateef = $_POST['dateEf'];
echo '<div class="cv">';
echo '<h1>About</h1>';
echo '<div class="info"><div>', $nom ,'<br>';
echo $prenom ,'<br>';
echo $Email ,'<br>';
echo $Phone ,'<br>';
echo $adress ,'<br></div><div>';
echo $About ,'<br></div></div>';
echo '<h1>Formation</h1><div class="exp">';
echo '<p style="width:20%">',$Formation ,'</p><br>';
echo '<p> Date de debut : <br>',$datefd ,'</p><br>';
echo '<p> Date de fin : <br>',$dateff ,'</p><br></div>';
echo '<h1>Experience</h1><div class="Edu">';
echo '<p>',$Education ,'</p><br>';
echo '<p> Date de debut : <br>',$dateed ,'</p><br>';
echo '<p> Date de fin : <br>',$dateef ,'</p><br> </div></div>';
echo '</div>';
}else{
    header('Location: ./index.php');
    exit;
}
?>
</body>
</html>
