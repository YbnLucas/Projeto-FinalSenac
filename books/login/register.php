<?php
include 'code/connection.inc.php';

$msg = '';
if (isset($_POST['submit'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$idade = mysqli_real_escape_string($conn, $_POST['idade']);
	$secure_pwd = md5($password);

	$sql = "SELECT * FROM registration WHERE email='$email'";
	$sql_qry = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($sql_qry);
	$regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
	$pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{8,36}$/';
	
	if ($count > 0 || preg_match($regex,$email) && preg_match($pattern, $password) && $idade > 8 && strlen($name) > 2) {
	
		$insert_sql = "INSERT INTO registration (name,email,password,idade) VALUES('$name','$email','$secure_pwd','$idade')";
		$insert_qury = mysqli_query($conn, $insert_sql);
		header('location:login.php');
	} else {
		$msg = "Email Inexistente";
	}

}










?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>   
<style>
    body{
    text-align: center;
    background: url('banner.jpg') 0px 0px no-repeat;
    background-size:cover;
    background-attachment: fixed;
    }
    
    .container{
        width: 490px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 20% 0;
        box-shadow: 1px 2px 20px #000, 2px 6px 50px #000;
        padding: 50px 20px;
    }
    
    h1{
      color: white;
        -webkit-text-stroke: 1px black;
    }
    
    label{
        color: white;
    }
	.caixa{
  background-color:white;
  width: 366px;
  border: 5px solid;
  padding: 4px;
  border-radius: 10px;
  height: 45px;
}
  </style>
 

<title>cadastro</title>
</head>
<body>
<br><br><br><br>
	<div class="row">
		<div class="col-sm-4">

		</div>
		<div class="col-sm-4">
		<section class="">
	
				
				
	<?php if ($msg) : ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $msg; ?>
		</div>
	<?php endif; ?>

	<div class="card-body p-5">
		<form method="POST" name="dados" class="needs-validation" novalidate="" autocomplete="off">
		<h1>Cadastre-se</h1>
			
				<label style="color:white; font-size:25px; -webkit-text-stroke: 1px black;" for="name">Nome</label>
				<input id="name" type="text" maxlength="20" class="form-control" name="name" value="" placeholder="Digite o Nome">
			

			
				<label style="color:white; font-size:25px; -webkit-text-stroke: 1px black;" for="email">E-mail</label>
				<input id="email" type="email" maxlength="100" class="form-control" name="email" value="" placeholder="Digite o E-mail">
			

			<div class="mb-3">
				<label style="color:white; font-size:25px; -webkit-text-stroke: 1px black;" for="password">Senha</label>
				<input id="password" type="password" maxlength="12" class="form-control" name="password" placeholder="Digite o Senha">
			
				<label style="color:white; font-size:25px; -webkit-text-stroke: 1px black;" for="idade">Idade</label>
				<input id="idade" type="number" class="form-control" name="idade" placeholder="Digite sua idade">
			
			</div>
			
			<div class="d-grid gap-2" style="font-family: 'Poppins', sans-serif;">
				<button class="btn btn-primary" onclick="enviardados()" type="submit" name="submit" class="btn btn-success">
					Cadastrar
				</button>
				<a class="btn btn-primary" href="../index.html">voltar para a pagina inicial</a>
				<center>
				<div class="caixa">
				<p style="color:black;">já tem uma conta? <a href="login.php" style="color:green; ">Logar agora</a></p> 
				</div>
				</center>
			</div>
			<script>
			
			</script>
		</form>
	</div>
	<div class="card-footer py-3 border-0">
		
	</div>



</section>
		</div>
		<div class="col-sm-4">

		</div>
	</div>
</body>
</html>




