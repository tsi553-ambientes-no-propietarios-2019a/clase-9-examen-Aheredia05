<?php 
session_start();


$conn = new mysqli('localhost', 'root', '', 'examenb1');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

function getProducts($conn) {
	$user_id = $_SESSION['user']['id_user'];
	$sql = "SELECT *
		FROM product
		WHERE id_user='$user_id'";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../home.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}

		return $products;
}

function getSelectProduct($conn){
	$sql_select = "SELECT name
		FROM product";
	
	$result = mysqli_query($conn,$sql_select);

	if ($conn->error) {
		redirect('../cliente.php?error_message=Ocurrió un error: ' . $conn->error);
	}

	while($mostrar = mysqli_fetch_array($result)){
		echo '<option value="'.$mostrar['id_product'].'">'.$mostrar['name'].'</option>';	
	}
echo '<br>';
}


