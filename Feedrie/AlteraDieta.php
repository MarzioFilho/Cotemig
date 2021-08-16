<?php
    session_start();
	$TesteLogin = $_SESSION["LGN"];
	
	if($TesteLogin === true)
	{
    $cod_usuario = $_SESSION["cod_usuario"];
	
	if(isset($_POST["enviar"]))
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
                                                                    <h1>Alterar Dietas</h1>
                                                                    <br>
                                                                    <div id="bordas">
									<p class="texto">Escolha a Dieta que deseja atualizar os dados</p>
									<?php									
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbName = "feedrie";					
										$conn = new mysqli($servername, $username, $password, $dbName);
										if ($conn->connect_error) 
										{
											die("Conexão Falha: " . $conn->connect_error);
										}
										$sql2 = "SELECT * FROM dieta where usuario_cod_usuario =".$cod_usuario;
										$executarSQL = $conn->query($sql2);
										$row = mysqli_num_rows($executarSQL);
										
										if($row > 0)
										{
											$verificaDi = true;
											
											ECHO"<select name='dieta' class='form-control' required>";
											while($row > 0)
											{
												$DataTable = mysqli_fetch_assoc($executarSQL);
												ECHO"<option value='".$DataTable['cod_dieta']."'>".$DataTable['nome']."</option>";
												
												$row = $row - 1;
											}
											ECHO" </select>";
										}
										else 
										{
											$verificaDi = false;
											echo "Não há registros de dieta";
										}
									?>	<br>
									<input type="submit" name="editar" value="Editar" class="btn btn-success"><br><br>
									<?php
										if(isset($_POST["editar"]))
										{
											if($verificaDi === true)
											{
													$IndexCBX1 = $_POST["dieta"];
													$SQL="select * from dieta where cod_dieta=".$IndexCBX1;
													$ExecuteSQL=$conn->query($SQL);
													$DataTableAni=mysqli_fetch_assoc($ExecuteSQL);
													$ROW=mysqli_num_rows($ExecuteSQL);	

											?>
                                                                        
									<label> Nome da dieta:</label>
									   <input type="text" name="nome" value="<?php echo $DataTableAni["nome"]?>" class="form-control" required>
									
                                                                           <br><br>
                                                                        <div class="form-inline">
									<label> Quantidade(g):</label>
									   <input type="number" name="quantidade" value="<?php echo $DataTableAni["quantidade"]?>" class="form-control" required>
									<label>Hora:</label>
									<input type="time" name="hora" class="form-control"  required>
									</div>
                                                                        <br><br>
									<div id="textos">
										<label>Dias:</label>
										<br>
											<div class="group-form">
                                                                                                <div class="form-inline">
												<label><input type="checkbox" name="segunda" value="segunda">
												Segunda</label>
												<label><input type="checkbox" name="terca" value="terca">
												Terça</label>
												<label><input type="checkbox" name="quarta" value="quarta">
												Quarta</label>
												<label><input type="checkbox" name="quinta" value="quinta">
												Quinta</label>
												</div>
                                                                                            <div class="form-inline">       
												<input type="checkbox" name="sexta" value="sexta">
												<label>Sexta</label>
												<input type="checkbox" name="sabado" value="sabado">
												<label>Sabado</label>
												<input type="checkbox" name="domingo" value="domingo">
												<label>Domingo</label>
												<br><br>
												<br><br>
											</div>
										</div>
                                                                                <div class="form-inline">     
										<?php
											$sql = "SELECT * FROM animal where usuario_cod_usuario =".$cod_usuario;
											$dados = mysqli_query($conn,$sql);
											$qtdeLinhas = mysqli_num_rows($dados);
											
											if($qtdeLinhas > 0)
											{
												$verificaAni = true;
												
												ECHO"<label>Animal :</label>";
												ECHO"<select name='animal' class='form-control' required>";

												for($x = 0; $x < $qtdeLinhas ;$x++)
												{
													$linha = mysqli_fetch_assoc($dados);

													ECHO"<option value='".$linha['cod_animal']."'>".$linha['nome']."</option>";
												}	
											 
												ECHO" </select>";
											}
											else
											{
												$verificaAni = false;
												echo "Não há registros de animais";
											}											
											?>
											<br>
											<p class="texto">Escolha a máquina que deseja atualizar os dados</p>
											<?php										
											
											$sql = "SELECT * from feedrie where usuario_cod_usuario =".$cod_usuario;
											$dados = mysqli_query($conn,$sql);
											$qtdeLinhas = mysqli_num_rows($dados);
											
											if($qtdeLinhas > 0)
											{
												$verificaAni = true;
																								
												ECHO"<select name='feedrie' class='form-control' required>";

												for($x = 0; $x < $qtdeLinhas ;$x++)
												{
													$linha = mysqli_fetch_assoc($dados);

													ECHO"<option value='".$linha['cod_feedrie']."'>".$linha['nome']."</option>";
												}	
											 
												ECHO" </select>";
											}
											else
											{
												$verificaAni = false;
												echo "Não há registros de máquina";
											}
										?>  
                                                                                </div> 
                                                                                <br><br>
                                                                                </div>
									
									<div id="botoes">
										<input type="submit" name="enviar" value="Enviar" class="btn-success btn btn-lg">
										<input type="reset" name="limpar" value="Limpar"  class="btn-warning btn btn-lg">  
									</div>
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>
		<?php
											}
											else if($verificaDi === false)
											{
												echo "não há como alterar sem registros, clique aqui para cadastrar: <a class='btn btn-success' href='CadastraDieta.php'>Registrar</a>";
											}												
										}		
			  if(isset($_POST['enviar']))
				{
					$feedrie = $_POST["feedrie"];
					$IndexCBX = $_POST["dieta"];
					$nome = $_POST["nome"];
					$quantidade = $_POST['quantidade'];
					$hora = $_POST['hora'];
					$cod_animal = $_POST['animal']; // nome do cachorro
					$cod_usuario = $_SESSION["cod_usuario"];
					
					if(isset($_POST["segunda"]))
					{
						$segunda = true;
					}
					else
					{
						$segunda = false;
					}
					
					if(isset($_POST["terca"]))
					{
						$terca = true;
					}
					else
					{
						$terca = false;
					}
					
					if(isset($_POST["quarta"]))
					{
						$quarta = true;
					}
					else
					{
						$quarta = false;
					}
					
					if(isset($_POST["quinta"]))
					{
						$quinta = true;
					}
					else
					{
						$quinta = false;
					}
					
					if(isset($_POST["sexta"]))
					{
						$sexta = true;
					}
					else
					{
						$sexta = false;
					}
					
					if(isset($_POST["sabado"]))
					{
						$sabado = true;
					}
					else
					{
						$sabado = false;
					}
					
					if(isset($_POST["domingo"]))
					{
						$domingo = true;
					}
					else
					{
						$domingo = false;
					}
					$sql9 = "update dieta set nome='".$nome."',quantidade=".$quantidade.",hora='".$hora."',Monday='".$segunda."',Tuesday='".$terca."',Wednesday='".$quarta."',Thursday='".$quinta."',Friday='".$sexta."',Saturday='".$sabado."',Sunday='".$domingo."',realizado = null, animal_cod_animal=".$cod_animal.", usuario_cod_usuario = ".$cod_usuario.", feedrie_cod_feedrie=".$feedrie." where cod_dieta=".$IndexCBX;
					if ($conn->query($sql9) === TRUE) 
					{
						echo "<script>alert('Dieta Alterada com sucesso!');</script>";
						$_SESSION["MSG"] = "certo";
					}
					else 
					{
						echo "Erro ao alterar dieta: " . $conn->error;
						$_SESSION["FLHA"] = true;
					}
					$conn->close();			

					if($verificaDi === false)
					{
						$_SESSION["FLHA"] = true;
					}
				}
			}
			else
			{
				header('location: index.php');
			}
		?>
	</body>
</html>