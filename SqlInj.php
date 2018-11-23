<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Exemple de lectura de dades a MySQL</h1>
	<?php
		echo "<form method='POST'>";
			echo "<label>User:</label>";
			echo "<input type='text' name='usuario'>";
			echo "<br>";
			echo "<label>Pass:</label>";
			echo "<input type='password' name='pass'>";
			echo "<br>";
			echo "<input type='submit' value='Tramet la consulta' name='tramet'>";
		echo "</form>";

		$usuario=$_POST["usuario"];
		$pass=$_POST["pass"];

		$conn = mysqli_connect('localhost','khalid','khalid123');
 		mysqli_select_db($conn, 'usuarios');

 		$consulta = "select * from dades where user='".$usuario."'and password=SHA2('khalid321',512);";

 		$resultat = mysqli_query($conn,$consulta);


 		if ($row=mysqli_fetch_array($resultat)){
 			echo "hola";
 		}
 		
 		




	?>

</body>
</html>