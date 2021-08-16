<?php
	session_start();
	
if(isset($_POST["sim"]))
	{
		header('location: Exibe.php');
	}

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

    <body>
        <form method="POST" action="" id="FeedrieExibir" name="FeedrieExibir">		
			
        <div class="text-center img-responsive">
            <img src="img/LogoSite.png">  
        </div>
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
      <ul class="nav navbar-nav navbar-right">
          <li><a href="sair.php"><span class="glyphicon glyphicon glyphicon-log-out"></span> Sair</a></li>

      </ul>
    </div>
  </div>
</nav>			
					<div class="container">
						<div class="row">					
							<div class="col-sm-12 text-center">	
								
								<form name="formulario" method="POST" action="">
									<div id="bordas">
										<div class="info">
                                                                                    <br>
                                                                                    <h1>Deletar Animal</h1>
										<br><br>	
                                                                                    <h4 class="text-danger">Deseja realmente apagar este animal do sistema?</h4>
											<br>
											<?php											
										$TesteLogin = $_SESSION["LGN"];
										
										if($TesteLogin === true)
										{
											$cod_usuario = $_SESSION["cod_usuario"];
											$verifica = "";
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbName = "feedrie";					
											$conn = new mysqli($servername, $username, $password, $dbName);
											if ($conn->connect_error) 
											{
												die("Conexão Falha: " . $conn->connect_error);
											} 
											
											$sql8 = "SELECT * FROM animal where usuario_cod_usuario =".$cod_usuario;
											$executarSQL = $conn->query($sql8);
											$row = mysqli_num_rows($executarSQL);
												
											if($row > 0)
											{
												$verifica = true;
											
												ECHO"<select name='animal' class='form-control'>";
												while($row > 0)
												{
													$DataTable = mysqli_fetch_assoc($executarSQL);
													ECHO"<option value='".$DataTable['cod_animal']."'>".$DataTable['nome']."</option>";
													
													$row = $row - 1;
												}
												ECHO" </select>";
											}
											else
											{
												$verifica = false;
												echo "Não há animais registrados. Clique aqui para Registrar: <a href='CadastraAnimal.php'>Registrar</a>";
											}
											
											if(isset($_POST["sim"]))
											{				
												if($verifica == true)
												{
													$IndexCBX = $_POST["animal"];
													
													$sql = "DELETE FROM animal WHERE cod_animal=".$IndexCBX;
													
													$sql3 = "select * from dieta where animal_cod_animal=".$IndexCBX;
													$ExecutarSQL = $conn->query($sql3);
													$Row = mysqli_num_rows($ExecutarSQL);
													
													$sql4 = "select * from refeicao where dieta_cod_animal=".$IndexCBX;
													$ExecutarSQL1 = $conn->query($sql4);
													$Row2 = mysqli_num_rows($ExecutarSQL1);
													
													$sql5 = "delete from refeicao where dieta_cod_animal=".$IndexCBX;
													
													$sql2 = "delete from dieta where animal_cod_animal=".$IndexCBX;
													
													if($Row2 > 0)	
													{			
														if($conn->query($sql5) === TRUE)
														{
															if($Row > 0)
															{
																if($conn->query($sql2) === TRUE)
																{																							
																	if ($conn->query($sql) === TRUE) 
																	{
																		echo "Animal removido com sucesso!";
																		header('location: Exibe.php');
																	}
																	else 
																	{
																		echo "Erro ao deletar animal0: " . $conn->error;
																	}
																}
																else 
																{
																	echo "Erro ao deletar Dieta: " . $conn->error;
																}
															}
															else 
															{
																if ($conn->query($sql) === TRUE) 
																{
																	echo "Animal removido com sucesso!";
																	header('location: Exibe.php');
																}
																else 
																{
																	echo "Erro ao deletar animal1: " . $conn->error;
																}
															}
														}
														else 
														{
															echo "Erro ao deletar Refeição: " . $conn->error;
														}
													}
													else
													{
														if($Row > 0)
														{
															if($conn->query($sql2) === TRUE)
															{																							
																if ($conn->query($sql) === TRUE) 
																{
																	echo "Animal removido com sucesso!";
																}
																else 
																{
																	echo "Erro ao deletar animal2: " . $conn->error;
																}
															}
															else 
															{
																echo "Erro ao deletar Dieta1: " . $conn->error;
															}
														}
														else 
														{
															if ($conn->query($sql) === TRUE) 
															{
																echo "Animal removido com sucesso!";
																header('location: Exibe.php');
															}
															else 
															{
																echo "Erro ao deletar animal3: " . $conn->error;
															}
														}
													}
												}
												else
												{	
													$_SESSION["FLHA"] = true;
													header('location: Exibe.php');
												}
											}
											if(isset($_POST["nao"]))
											{
												header('location: Exibe.php');
											}
										}
										else
										{
											header('location: index.php');
										}
											?>
											<br>
											<input type="submit" name="sim" class="btn btn-danger btn-lg" value="Apagar">										
											<a type="button" href="Exibe.php" class="btn btn-warning btn-lg">Voltar</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
    </body>
</html>