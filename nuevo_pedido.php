<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Pedido</title>
</head>
<body>
	<h1>Nuevo Pedido</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php_newOrder.php" method="post">
		
		<div>
			<label>Producto</label>
			<select name="type" required="required">
				<option value="0">Seleccione...</option>
                    <?php 
                    $query = "SELECT product FROM productos";

                    while($productos = mysqli_fetch_array($query)){
                        echo '<option value="'.$productos[id].'"</option>';
                    }
                ?>
            </select>                
        </div>
        
		<div>
			<label>Cantidad</label>
			<input type="number" name="quantity" required="required">
		</div>
		<div>
			<button>Enviar Pedido</button>
		</div>
	</form>
</body>
</html>