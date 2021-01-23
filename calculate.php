<?php 

function isValidNumber($nombre)
{
	return is_numeric($nombre);
}
function isValidSigne($signe)
{
	$signesArray = ["+", "-", "*", "/"];
	return in_array($signe, $signesArray);
}

if (isset($_POST['submit'])) {
	if (isValidNumber($_POST['nombre1']) && isValidNumber($_POST['nombre2']) && isValidSigne($_POST['signe'])) {
		$result_string = $_POST['nombre1']. $_POST['signe'] .$_POST['nombre2'];
		$result = eval("return $result_string;");
		echo $result;
	}else{
		echo "Non validé";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculate</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="nombre1" placeholder="nombre : 1">
		<input type="text" name="signe" placeholder="signe : +">
		<input type="text" name="nombre2" placeholder="nombre : 5">
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>