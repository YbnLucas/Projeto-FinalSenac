


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  .botao{
    background-color: #4CAF50;
    border-radius: 12px;
    
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }
    .image{
  margin: 0 auto;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 1px solid gray;
  display: inline-block;
  padding: 3px;
  border: 3px solid #d2d6de;
  margin-top: 20px;
  margin-right: 57px;
  margin-left: 57px;
}
    .caixa{
        background-color: orange;
  width: 450px;
  border: 5px rgb(7, 43, 78);
  padding: 50px;
  margin: 20px;
  border-radius: 10px;
  text-align: center;
    }
    body{
        background-color: #2e3842;
        text-align: center;
    }
    h1{
        color: white;
    }
    label{
        color: white;
    }
</style>   
<title>Perfil</title>
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
<br><br><br>
<div class="container">
<div class="row">
<div class="col-sm-4">

</div>
<div class="col-sm-4">
    <div class="caixa">
        <h1>Perfil</h1>
        
            <div class="">
                <img class="image" src="12.jpg" alt="" />
                <br><br>
            </div>
        <br>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nome:</label>
              <input type="nome" class="form-control" disabled placeholder="<?php if(!isset($_SESSION)){session_start();} echo $_SESSION['name_login'];?>">
    
            <label for="exampleInputPassword1">Email:</label>
              <input type="password" class="form-control" disabled placeholder="<?php if(!isset($_SESSION)){session_start();}echo $_SESSION['USER_LOGIN'];?>">
           
             
              
              <label for="exampleInputPassword1">idade:</label>
              <input type="text" class="form-control" disabled placeholder="<?php if(!isset($_SESSION)){session_start();}echo $_SESSION['IDADE_LOGIN'];?>">

            </div>
            <div class="form-group">
              
            </div><br>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@mdo">Editar</button>
            <a class="btn btn-secondary" href="../logado.php">voltar para a pagina inicial</a>
          </form>
    </div>
</div>
<div class="col-sm-4">

</div>
</div>
</div>


   
    
</body>
</html>