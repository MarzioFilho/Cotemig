<?php
	session_start();
?>
<html lang="pt-BR" hreflang="pt-br">
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Feedrie</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
                <link rel="stylesheet" href="Estilo.css">
    </head>

    <body bgcolor="#ecd8c6">
        <form method="POST" action="" id="FeedrieExibir" name="FeedrieExibir">		
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
					  <li class="active dropdown">
					  <a class="dropdown-toggle glyphicon glyphicon-home" data-toggle="dropdown" href="#">  Usuario <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="AlteraPerfil.php">Alterar Dados do Perfil</a></li>
						  <li><a href="DeletaUsuario.php">Apagar Perfil de Usuario</a></li>
						  <li><a href="Exibe.php">Perfil do Usuario</a></li>
					  </ul>
					</li>
					  <li class="dropdown">
						  <a class="dropdown-toggle glyphicon glyphicon-home" data-toggle="dropdown" href="#">  Feedrie <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="AlteraFeedrie.php">Altera Dados do Feedrie</a></li>
						  <li><a href="DeletaFeedrie.php">Apagar Feedrie</a></li>
						  <li><a href="CadastraFeedrie.php">Novo Feedrie</a></li>
						  <li><a href="RetornaFeedrie.php">Mostrar Dados do Feedries</a></li>
					  </ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle glyphicon glyphicon-heart" data-toggle="dropdown">  Animais<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="AlteraAnimal.php">Alterar Dados do Animal</a></li>
						  <li><a href="DeletaAnimal.php">Apagar Animal</a></li>
						  <li><a href="CadastraAnimal.php">Novo Animal</a></li>
						  <li><a href="RetornaAnimal.php">Mostrar Dados dos Animais</a></li>
					  </ul>
					
					</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle glyphicon glyphicon-apple" data-toggle="dropdown">  Dietas<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							  <li><a href="AlteraDieta.php">Alterar Dados de Dietas</a></li>
							  <li><a href="DeletaDieta.php">Apagar Dietas</a></li>
							  <li><a href="CadastraDieta.php">Nova Dieta</a></li>
							  <li><a href="RetornaDieta.php">Mostrar Dietas Cadastradas</a></li>
							  <li><a href="indexRefeicao.php">Realizar Refeição</a></li>
					  </ul>
					
					</li>
					<li><a href="https://feedrie-com-br.umbler.net/" class="glyphicon glyphicon-info-sign">  Institucional</a></li>
					
				  </ul>
				  <ul class="nav navbar-nav navbar-center">
					  <li><a href="sair.php"><span class="glyphicon glyphicon glyphicon-log-out"></span> Sair</a></li>
						<?php
							if($_SESSION["LGN"] === true)
								{
									$cod_usuario = $_SESSION["cod_usuario"];
									$conn = mysqli_connect('localhost','root','','feedrie');
									$sql1 = "select * from usuario where cod_usuario = ".$cod_usuario;
									$dadosUsu = $conn->query($sql1);
									$qtdeLinhasUsu = mysqli_num_rows($dadosUsu);
									$linhaUsu = mysqli_fetch_assoc($dadosUsu);
						?>
				  </ul>
				</div>
			  </div>
			</nav>
			<form name="form" method="POST" action="">
                <div >
					<div class="text-center img-responsive">
						<img src="img/feedrie.png">  
					</div>
					<h1 class="text-center">Bem Vindo <?php echo $linhaUsu["nome"]?>! Esse é o seu perfil.</h1><br><br>
					
						<?php									
									echo"<div class='col-md-6' align='center' style='border:2px black;'>Nome: ".$linhaUsu["nome"]."</div>";
									echo"<div class='col-md-6' align='center'>CPF: ".$linhaUsu["cpf"]."</div><br>";
									echo"<div class='col-md-6' align='center'>Telefone: ".$linhaUsu["telefone"]."</div>";
									echo"<div class='col-md-6' align='center'>Logradouro: ".$linhaUsu["logradouro"]."</div><br>";
									echo"<div class='col-md-6' align='center'>Número: ".$linhaUsu["numero"]."</div>";
                                    echo"<div class='col-md-6' align='center'>Complemento: ".$linhaUsu["complemento"]."</div><br>";
									echo"<div class='col-md-6' align='center'>Bairro: ".$linhaUsu["bairro"]."</div>";
									echo"<div class='col-md-6' align='center'>Cidade: ".$linhaUsu["cidade"]."</div><br>";
									echo"<div class='col-md-6' align='center'>UF: ".$linhaUsu["uf"]."</div>";
									echo"<div class='col-md-6' align='center'>CEP: ".$linhaUsu["cep"]."</div><br><br>";
							?>
                </div>
                <div class="info container animais text-center">
					<?php										
						$sql = "SELECT cod_animal,nome FROM animal WHERE usuario_cod_usuario=".$cod_usuario;
						$dados = mysqli_query($conn,$sql);
						$qtdeLinhas = mysqli_num_rows($dados);
						
						/*if($qtdeLinhas > 0)
							{ 
								$verani = true;
								ECHO"<label>Animal :</label>";
								ECHO"<select class='form-control' name='animal' class='drpAnimal' id='animal'>";
								
								while($qtdeLinhas > 0)
								{
									$linha = mysqli_fetch_assoc($dados);
									ECHO"<option value='".$linha['cod_animal']."'>".$linha['nome']."</option>";
									
									$qtdeLinhas = $qtdeLinhas - 1;
								} 
								ECHO" </select>";
							}
							else
								{				
									$verani = false;
									echo "Não há registros de animais, clique aqui para registrar: <a href='CadastraAnimal.php'>Registrar</a>";
								}
						*/
					?>
					<br><br>
					
					<br>
					<?php
						$_SESSION["MSG"] = "";
					
						$Verifica = $_SESSION["FLHA"];
						if($Verifica === true)
							{
								echo "<script>alert('Não foi possível Realizar a ação, pois não haviam registros.');</script>";
								$_SESSION["FLHA"] = false;
							}
							if($_SESSION["MSG"] === "certo")
							{
								echo "<script>alert('Dieta Alterada com sucesso!');</script>";
								$_SESSION["MSG"] = "nada";
							}
							/*if(isset($_POST["enviar"]))
								{
									if($verani === true)
										{
											$var = $_POST["animal"];
											
											$conn = mysqli_connect('localhost','root','','feedrie');
											$sql="select * from dieta where animal_cod_animal = ".$var;
											$dados = mysqli_query($conn, $sql);
											$qtdelinhas = mysqli_num_rows($dados);
											$datatable = mysqli_fetch_assoc($dados);
											
											echo"<p> Quantidade: ".$datatable['quantidade']."g </p>";
											echo"<p> Hora: ".$datatable['hora']."</p>";
											echo"<p> Animal: ".$datatable['animal_cod_animal']."</p>";
											echo"<p> Usuário: ".$datatable['usuario_cod_usuario']."</p>";
										}
										else if($verani === false)
											{
												echo "<script>alert('Não foi possível Realizar a ação, pois não haviam registros de animais');</script>";
											}
								}*/
							}										
							else if($_SESSION["LGN"] === "")
								{
									ECHO "<script>alert('Não foi possível Realizar a ação, pois não haviam registros de usuários, volte a fazer login.');</script>";
									
									echo"<a type='button' name='erro1' class='btn btn-success' href='index.php'>Voltar</a>";
								}
								else
									{
										ECHO "<script>alert('o erro está aqui!');</script>";
									}
								
					?>
				</div>			
			</form>
		</form>
    </body>
</html>