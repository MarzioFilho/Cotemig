<html>
	<head>
        <meta charset="utf-8">
        <title>Feedrie</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="Estilo.css"> 
    </head>

    <body>
        <form method="POST" action="" id="FeedrieLogin" name="FeedrieLogin">		
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Feedrie</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="https://feedrie-com-br.umbler.net/" class="glyphicon glyphicon-info-sign">  Institucional</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="TelaLoginCadastro.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Cadastre-se</a></li>
      </ul>
    </div>
  </div>
</nav>
			
			<div class="container-fluid">
				<div class="row">					
					<div class="col-sm-12 text-center">
						<div id="login">
							<div class="text-center img-responsive">
								<img src="img/feedrie_vertical.png">  
							</div>
							<label>
							E-mail:
							<input class="lead form-control" type="mail" name="email">
							</label>
							<br>
							<label>
							Senha:
							<input class="lead form-control" type="password" name="senha">
							</label>
							<br>
							<br> 
							<input type="submit" class="but btn-success btn btn-lg" name ="logar" value="Entrar" >
							<a type="button" name="cadastrar" href="TelaLoginCadastro.php" class="btn btn-default btn btn-lg">Cadastre-se</a>
						</div>
					</div>
				</div>
			</div>
		</form>
		
		<?php
        
			session_start();
			
			$_SESSION{"LGN"} = "";	

			$_SESSION["CAD"] = "";
			
			$_SESSION["FLHA"] = "";
			
			$_SESSION["SNH"] = "";
			
			if($_SESSION["SNH"] === "NAO")
			{
				echo "<script>alert('As senhas não são iguais, por favor confirme novamente!');</script>";
				$_SESSION["SNH"] = "Nada";
			}
			if($_SESSION["SNH"] === "Nada")
			{
				echo "";
			}
			if($_SESSION["CAD"] === "NAO")
			{
				echo "<script>alert('Endereço de e-mail já existente');</script>";
				$_SESSION["CAD"] = "Nada";
			}
			if($_SESSION["CAD"] === "SIM")
			{
				echo "<script>alert('Usuário Cadastrado com sucesso! Realize o login.');</script>";
				$_SESSION["CAD"] = "Nada";
			}
			if($_SESSION["CAD"] === "nda")
			{
				echo "";
			}
			
			if(isset($_POST["logar"]))
			{
				$conexao = mysqli_connect('localhost','root','','feedrie');

				$sql = "SELECT cod_usuario,email,senha FROM usuario";
				$resultado = $conexao->query($sql);
				$email = $_POST["email"];
				$senha = $_POST["senha"];
				
				//if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) 
				//{
				//	echo "This ($email_a) email address is considered valid.";
				//}
				
				$verifica = $_SESSION["FLHA"];
				
				if($verifica === true)
				{
					echo "<script>alert('Não há usuários cadastrados');</script>";
				}
			   
			   if($email != "" and $senha != "")
			   {
					if($resultado->num_rows > 0)
					{
						while($row = $resultado->fetch_assoc())
						{
							if(($_POST["email"] == $row["email"])AND($_POST["senha"]== $row["senha"]))
							{
								$_SESSION["cod_usuario"] = $row["cod_usuario"];
								$_SESSION["FLHA"] = false;	
								$_SESSION{"LGN"} = true;							
								header('location:Exibe.php');	
							}
							else
							{
								$logar = "Usuario ou senha incorreto(s)";							
							}
						}
						ECHO $logar;
					}
					else 
					{
						echo "<script>alert('Não há nenhum usuário registrado');</script>";
					}
			   }
			   else if($senha == "" and $email == "")
			   {
					echo "<script>alert('Insira o E-mail e a senha!');</script>";	
			   }
			   else if($email == "")
			   {
					echo "<script>alert('Insira o E-mail!');</script>";	
			   }
			   else if($senha == "")
			   {
					echo "<script>alert('Insira a senha!');</script>";
			   }
			   
			}
        ?>
    </body>
</html>