<?php
session_start();
include "connect.php";

if(isset($_POST["submit"])){
	$email= $_POST['email'];
	$password = md5($_POST['senha']);
	$tipo = $_POST['tipo'];

	if($tipo === 'cliente'){
		$sql="SELECT * FROM cliente WHERE email_cliente='{$email}' AND senha_cliente='{$password}'";

		$run_sql=mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
		if(mysqli_num_rows($run_sql) > 0){
			$_SESSION['status_login'] = true;
			$_SESSION['login_cliente'] = true; 
			while($row=mysqli_fetch_assoc($run_sql)){
				$_SESSION["id_cliente"] = $row["id_cliente"];
				$_SESSION['message']="login com sucesso";
				header("Location:../../painel.php");
			}
		}else{
			$_SESSION['status_login'] = false;
			header("Location:../../login.php");
		}
	}else{
		$sql="SELECT * FROM corretor WHERE email_corretor='{$email}' AND senha_corretor='{$password}'";

		$run_sql=mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
		if(mysqli_num_rows($run_sql) > 0){
			$_SESSION['status_login'] = true;
			$_SESSION['login_corretor'] = true;
			while($row=mysqli_fetch_assoc($run_sql)){
				$_SESSION["id_corretor"] = $row["id_corretor"];
				$_SESSION['message']="login com sucesso";
				header("Location:../../painel.php");
			}
		}else{
			$_SESSION['status_login'] = false;
		}
	}
}