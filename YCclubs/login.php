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
        <h1>YC Clubs Admin</h1>
        <form action="authentification.php" method="POST">
                <input placeholder="Username"  name="username" required/>
                <input placeholder="Password" type="password"  name="password" required/>
                <br>
                <button name="submit" type="submit">Sign In</button>
        </form>
        <a href="index.php">Go back</a>
    </div>
</body>
</html>