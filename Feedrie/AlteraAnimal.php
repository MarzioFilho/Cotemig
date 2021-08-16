<?php
    session_start();
?>
<?php 
if(isset($_POST['enviar']))
    {
        header('location:Exibe.php');  
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
							<div class="text-center" id="bordas">	
								<form name="formulario" method="POST" action="">
								<div class="text-center img-responsive">
									<img src="img/feedrie.png">  
								</div>
									<h1><meta http-equiv="refresh" content=url="index.php">Alterar Animal</h1>
									
										<div class="info">
											<div id="col-md-6">
                                                <div class="text-center">
												<?php
												$TesteLogin = $_SESSION["LGN"];
												if($TesteLogin === true)
												{
													$cod_usuario = $_SESSION["cod_usuario"];
												?>
													<p>Escolha o animal que deseja atualizar os dados</p>
													</div>
                                                 <?php
												
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
													$sql2 = "SELECT * FROM animal where usuario_cod_usuario =".$cod_usuario;
													$executarSQL = $conn->query($sql2);
													$row = mysqli_num_rows($executarSQL);
													
													if($row > 0)
													{
														$verifica = true;
														
														ECHO"<select name='animais' class='form-control' id='animais' required><br>";
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
														ECHO "Não há registros de animais, clique aqui para registrar: <a href='CadastraAnimal.php'>Registrar</a>";
													}													
												?>	
												<br><input type="submit" name="editar" value="Editar" class="btn btn-success">
												<?php
													if(isset($_POST["editar"]))
													{
														if($verifica === true)
														{
															$IndexCBX1 = $_POST["animais"];
															$SQL="select * from animal where cod_animal=".$IndexCBX1;
															$ExecuteSQL=$conn->query($SQL);
															$DataTableAni=mysqli_fetch_assoc($ExecuteSQL);
																
														
												?>
											</div>
											<br>
											<div id="textos">
												<label> Nome:</label>
												<input type="text" name="nome" class="form-control" value="<?php echo $DataTableAni["nome"]?>" required>
												<br><br>
											</div>
											
											<div class="form-inline">
												<label>Espécie:</label>
												<br>
												<div id="form-group">
													<label>Gato<input type="radio" name="especie" value="gato"></label>
                                                                                                        <label>Cachorro<input type="radio" name="especie" value="cachorro"></label>
												</div>
											</div>                
											<br><br>
											<div id="textos">
												<label>Raça: </label>
													<input type="text" class="form-control" name="raca" id="raca" placeholder="Ex:Pastor Alemão" value="<?php echo $DataTableAni["raca"];?>" required>
												<br><br>
                                                                                        <div id="form-inline">
												<label>Idade:<input type="number" min="0" name="idade" class="form-control" placeholder="Exemplo:5" value="<?php echo $DataTableAni["idade"];?>" required min="1">
                                                                                                    </label>
                                                                                                <label>Peso:<input type="number" min="1" name="peso" class="form-control" placeholder="Exemplo:14.5" value="<?php echo $DataTableAni["peso"];?>" required>
                                                                                                    </label>
											</div> 
											
											<div id="botoes">
												<input type="submit" name="enviar" value="Enviar" class="btn-success btn btn-lg">
												<input type="reset" name="limpar" value="Limpar"  class="btn-warning btn btn-lg">  
											</div>
										</div>
									</div>
								
							</div>
						</div>
					</div>
				
			</div>
		
		<?php		
														}
														else
														{
															echo "<br>";
															echo "não há como alterar sem registros, clique aqui para cadastrar: <a class='btn btn-success' href='CadastraAnimal.php'>Registrar</a>";
														}
													}
			if(isset($_POST['enviar']))
			{
				$IndexCBX = $_POST["animais"];
				
				$nome = $_POST['nome'];
				$especie = $_POST['especie'];
				$raca = $_POST['raca'];
				$idade = $_POST['idade'];
				$peso = $_POST['peso'];
				
				$sql = "update animal set nome='".$nome."', especie='".$especie."', raca='".$raca."', idade=".$idade.", peso=".$peso." where cod_animal= ".$IndexCBX;
				if ($conn->query($sql) === TRUE) 
				{
					header('location: Exibe.php');
				}
				else 
				{	
					echo "Error inserting record: " . $conn->error;
				}
				$conn->close();
				
				if($verifica != true)
				{
					$_SESSION["FLHA"] = true;
				}
			}
												}
												else
												{
													ECHO "<script>alert('Não foi possível Realizar a ação, pois não haviam registros de usuários, volte a fazer login.');</script>";
											
													echo"<a type='button' name='erro1' class='btn btn-success' href='index.php'>Voltar</a>";
												}
		?>
    </body>
</html>