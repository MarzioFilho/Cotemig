<?php
	session_start();

if(isset($_POST["nao"]))
	{
		header('location: Exibe.php');
	}
	if(isset($_POST["sim"]))
	{
		header('location: index.php');
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
									<div class="conteudo">
										<div class="info">
										<?php
											$TesteLogin = $_SESSION["LGN"];
										
											if($TesteLogin === true)
											{
										?>			
                                                                                    <h1>Apagar Usuário</h1>
                                                                                    <br><br>
											<h4 class="text-danger">Deseja mesmo apagar esse usuário e todas as suas informações?</h4>
											<br>
                                            <input class="lead btn-danger btn-lg " type="submit" name="enviar" value="Sim">
                                            <input class="lead btn-success btn-lg" type="submit" name="nao" value="Não">
										</div>
									
										<?php
												if(isset($_POST["sim"]))
												{	
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
													
													$sql2="delete from animal where usuario_cod_usuario=".$cod_usuario;
													$executeSQL = $conn->query($sql2);
													$sql3="delete from feedrie where usuario_cod_usuario=".$cod_usuario;
													$executeSQL = $conn->query($sql3);
													$sql4="delete from dieta where usuario_cod_usuario=".$cod_usuario;
													$executeSQL = $conn->query($sql4);
													$sql5="delete from refeicao where dieta_cod_usuario=".$cod_usuario;
													$executeSQL = $conn->query($sql5);
													$sql = "delete from usuario where cod_usuario = ".$cod_usuario;
													if ($conn->query($sql) === TRUE) 
													{
														echo "<script>alert('Usuario removido com sucesso!');</script>";
													}
													else 
													{
														echo "Erro ao deletar uauario: " . $conn->error;
													}
													$conn->close();
												}
												
											}
											else
											{
												ECHO "<script>alert('Não foi possível Realizar a ação, pois não haviam registros de usuários, volte a fazer login.');</script>";
											
												echo"<a type='button' name='erro1' class='btn btn-success' href='index.php'>Voltar</a>";
											}												
										?>
									</div>
								</form>
							</div>
						</div>
					</div>
				</form>
			
		</div>
    </body>
</html>