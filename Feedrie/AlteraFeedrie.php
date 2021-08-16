<?php
	session_start();
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

					
							
							<div class=" text-center">	
								<form name="formulario" method="POST" action="">
                                                                    <div id="bordas">
									<h1><meta http-equiv="refresh" content=url="index.php">Cadastro Feedrie</h1>
											<?php
											$TesteLogin = $_SESSION["LGN"];
										
											if($TesteLogin === true)
											{
											?>
                                                                        <br><br>
											<label>Escolha o Feedrie que deseja alterar</label>
									<br><br>	
                                            <?php												
												$verifica = "";
												$cod_usuario = $_SESSION["cod_usuario"];
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbName = "feedrie";					
												$conn = new mysqli($servername, $username, $password, $dbName);
												if ($conn->connect_error) 
												{
													die("Conexão Falha: " . $conn->connect_error);
												}
												$sql2 = "SELECT * FROM feedrie where usuario_cod_usuario =".$cod_usuario;
												$executarSQL = $conn->query($sql2);
												$row = mysqli_num_rows($executarSQL);
												
												if($row > 0)
												{
													$verifica = true;
													
													ECHO"<select name='feedrie' class='form-control' required>";
													while($row > 0)
													{
														$DataTable = mysqli_fetch_assoc($executarSQL);
														ECHO"<option value='".$DataTable['cod_feedrie']."'>".$DataTable['nome']."</option>";
														
														$row = $row - 1;
													}
													ECHO" </select>";
												}
												else 
												{
													$verifica = false;
													echo "Não há Máquinas registradas.Clique aqui para registrar: <a href='CadastraFeedrie.php'>Registrar</a> ";
												}
											?>
                                        </form>  
											<p>Nome:</p>
											<input type="text" name="nome" class="lead form-control" required>
											<br>
											<p>Número de série:</p>
											<input type="number" name="numero_serie" class="lead form-control" required>
											<br>
											<input type="submit" name="enviar" value="Enviar" class="but btn-success btn btn-lg">
											</div>
												<?php												
												if(isset($_POST["enviar"]))
												{
													if($verifica === true)
													{
														$IndexCBX = $_POST["feedrie"];
														$nome = $_POST["nome"];
														$num_serie = $_POST["numero_serie"];
														$sql = "update feedrie set nome='".$nome."',num_serie=".$num_serie.",usuario_cod_usuario=".$cod_usuario." where cod_feedrie=".$IndexCBX;
														if ($conn->query($sql) === TRUE) 
														{
															echo "Record updated successfully";
															ECHO "<script type='text/javascript'>alert('Dados Alterados com sucesso!');<script/>";
															header('location: Exibe.php');
														}
														else 
														{
															echo "Error updating record: " . $conn->error;
														}
														$conn->close();
													}
													else
													{
														$_SESSION["FLHA"] = true;
														header('location: Exibe.php');
													}
												}
											?>
											</div>
											<?php
											}
											else
											{
												ECHO "<script>alert('Não foi possível Realizar a ação, pois não haviam registros de usuários, volte a fazer login.');</script>";
											
												echo"<a type='button' name='erro1' class='btn btn-success' href='index.php'>Voltar</a>";
											}												
		?>
    </body>
</html>