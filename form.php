<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="affichage.php" method="post">
        <h1 >Personal informations</h1>
        <div id="name"><input name="nom" required placeholder="Nom" type="text"/>
        <input name="prenom" required placeholder="Prenom" type="text"/>
        </div>
        <div id="info">
            <br>
        <input name="email" required placeholder="Email" type="email"/>
        <br>
        <input name="phone" required placeholder="Phone" type="number"/>
        <br>
        <input name="adress" required placeholder="Adress" type="text"/>
        </div>
        <h1 >About</h1>
        <textarea name="About" rows="4" cols="52" ></textarea>
        <h1>Your Education</h1>
        <div id="F">
        <input name="Formation" required placeholder="Title" type="text"/>
        <br>
        <input name="datefd" required  type="date" style="color : #888"/>
        <br>
        <input name="dateff" required  type="date" style="color : #888"/>
        </div>
        <h1>Your Last Experience</h1>
        <div id="E">
        <input name="Experience" required placeholder="Title" type="text"/>
        <br>
        <input name="dateEd" required  type="date" style="color : #888"/>
        <br>
        <input name="dateEf" required  type="date" style="color : #888"/>
        </div>
        <br>
        <button type="submit" name="submit" class="button2">Done</a>
        <br>
    </form>
</body>
</html>