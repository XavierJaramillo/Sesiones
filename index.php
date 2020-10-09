<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Services</title>
</head>
<body>


<div class="login">
<h3>Login Services</h3>
    <div class="contenido">
    <form action="./services/login.proc.php" method="POST">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..." required>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" placeholder="Your password...">
    
        <input type="submit" value="Login">
    </form>
    </div>
</div>

</body>
</html>