<?php
include('common/utils.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="php/process_login.php" method="post">
        <div>
            <label>Nombre de Usuario: </label>
            <input type="text" name="username" placeholder="Usuario">
        </div>
        <div>
            <label>Contraseña: </label>
            <input type="password" name="password" placeholder="contraseña">
        </div>
        
        <button>Ingresar</button>
        
        <br>
        <a href="registro.php">Registrame, no tengo usuario :(</a>
    </form>
</body>
</html>