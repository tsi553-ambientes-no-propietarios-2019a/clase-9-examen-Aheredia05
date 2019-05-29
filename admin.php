<?php 
include('common/utils.php');

$pedidos = getPedidos($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>Nombre: <?php echo $_SESSION['user']['name']; ?></h2>

	<a href="nuevo_producto.php">Añadir producto</a>

	<table>
		<thead>
			<tr>
				<th>Cliente</th>
				<th>Producto</th>
				<th>Cantidad Pedida</th>
				<th>Total a Pagar</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($pedidos as $p) { ?>
				<tr>
					<td><?php echo $p['client'] ?></td>
					<td><?php echo $p['prod_name'] ?></td>
					<td><?php echo $p['cant_ped'] ?></td>
					<td><?php echo $p['price_pay'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>