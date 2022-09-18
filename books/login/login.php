
  <?php
include 'code/connection.inc.php';
$msg = '';

if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$secure_pwd = md5($password);
	$idade = mysqli_real_escape_string($conn, $_POST['idade']);

	$sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$secure_pwd'";

	$sql_qry = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($sql_qry);
	$array = mysqli_fetch_array($sql_qry);



	if ($count > 0) {
		$_SESSION['USER_LOGIN'] = $array['email'];
		$_SESSION['name_login'] = $array['name'];
		$_SESSION['PASSWORD_LOGIN'] = $array['password'];
		$_SESSION['IDADE_LOGIN'] = $array['idade'];
		header('LOCATION:../logado.php');
	} else {
		$msg = '
		Por favor, insira os dados corretamente';
	}
}


?>

<!DOCTYPE html>
<html lang="br">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <style>
    body{
    text-align: center;
    background: url('banner2.jpg') 0px 0px no-repeat;
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
       
    }
    
    label{
        color: white;
    }
	.caixa{
  background-color:white;
  width: 470px;
  border: 5px solid;
  padding: 4px;
  border-radius: 10px;
  height: 45px;
}
  </style>
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#2e3842">
                      <h5 class="modal-title" id="exampleModalLabel" style="color:white">Alteração de dados</h5>
                    </div>
                    <div class="modal-body" style="background-color:orange">
                  <form action="" method="POST">
            <div class="form-group">
              <label style="color:black" for="exampleInputEmail1">Nome:</label>
              <input name="name" type="nome" class="form-control" placeholder="<?php if(!isset($_SESSION)){session_start();} echo $_SESSION['name_login'];?>">
    
            <label style="color:black" for="exampleInputPassword1">Email:</label>
              <input name="email" type="password" class="form-control" placeholder="<?php if(!isset($_SESSION)){session_start();}echo $_SESSION['USER_LOGIN'];?>">
           
              <label style="color:black" for="exampleInputPassword1">senha:</label>
              <input name="password" type="password" class="form-control" placeholder="">
  
            </div>
            <div class="form-group">
              
            </div><br>
            
          </form>
                    </div>
                    <div class="modal-footer" style="background-color:#2e3842">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      <button type="submit" name="save" class="btn btn-secondary">Alterar</button>
                    </div>
                  </div>
                </div>
              </div>
</head>
<body>


<br><br><br><br><br><br><br><br><br>
<div class="conteiner">
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
					
					<h1 style=" -webkit-text-stroke: 1px black;">Login</h1> 
						<form method="POST" class="needs-validation" novalidate="" autocomplete="on">
							
								<label style="color:white; font-size:20px; -webkit-text-stroke: 1px black;" for="email">Email</label>
								<input id="email" type="email" class="form-control" name="email" value="" placeholder="Digite o E-mail" required autofocus>
						

						
							
									<label style="color:white; font-size:20px; -webkit-text-stroke: 1px black;" for="password">Senha</label>
								<input id="password" type="password" name="password" class="form-control" placeholder="Digite a Senha" required><br>
							
							<div class="d-grid gap-2" style="font-family: 'Poppins', sans-serif;">
								<button class="btn btn-primary" style="font-size: 15px;" type="submit" name="submit" class="btn btn-success" required>
									Entrar
								</button>

								<a class="btn btn-primary" style="font-size: 15px;" href="../index.html">voltar para a pagina inicial</a>
								<div class="caixa">
								<p style="color:black; font-size:15px;">Não possui conta? <a href="register.php" style="color:green;">Criar agora</a></p>  
                


                
								</div>
							</div>
						</form>
      
      <div class="col-sm-4">
       
      </div>
    </div>
  </div>
</div>
</body>
</html>

    
