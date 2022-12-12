<html>
<head>
	<title>Register</title>
</head>

<body>
<a href="index.php">Home</a> <br />
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$nome = $_POST['nome'];
	$telefone_celular = $_POST['telefone_celular'];
	$email = $_POST['email'];
	$CPF = $_POST['CPF'];
	$endereco = $_POST['endereco'];
	$complemento = $_POST['complemento'];
	$cidade = $_POST['cidade'];
	$UF = $_POST['UF'];
	$CEP = $_POST['CEP'];

	if($nome == "" || $telefone_celular == "" || $email == "" || $CPF == "" $endereco == "" $complemento == "" $cidade == "" $UF == "" $CEP == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO clientes(nome, telefone_celular, email, CPF, endereco, complemento, cidade, UF, CEP) VALUES('$nome','$telefone_celular','$email', '$CPF','$endereco','$complemento', '$cidade', '$UF', '$CEP')")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
	}
} else {
?>
	<p><font size="+2">Register</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Full Name</td>
				<td><input type="text" nome="nome"></td>
			</tr>
			<tr> 
				<td>telefone_celular</td>
				<td><input type="text" name="telefone_celular"></td>
			</tr>
			<tr> 	
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
