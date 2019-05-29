<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>Nombre: <?php echo $_SESSION['user']['name']; ?></h2>

	<a href="nuevo_pedido.php">Nuevo Pedido</a>

</body>
</html>