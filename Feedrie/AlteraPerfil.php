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
                  <li><a href="FeedrieMark1.2/index.php">Realizar Refeição</a></li>
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
					

				
					<div class="container col-sm-6" id="bordas">
						<div class="row">						
								<h1 class="text-center">Cadastro Feedrie</h1>
								<?php									
									$TesteLogin = $_SESSION["LGN"];
										
									if($TesteLogin === true)
									{
										$cod_usuario = $_SESSION["cod_usuario"];
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbName = "feedrie";
										
										$conn = new mysqli($servername, $username, $password, $dbName);
										
										if ($conn->connect_error) 
										{
											die("Connection failed: " . $conn->connect_error);
										} 
										$sql1 = "select * from usuario where cod_usuario =".$cod_usuario;
										$executarSQL = $conn->query($sql1);
										$DataTable = mysqli_fetch_assoc($executarSQL);
										$row = mysqli_num_rows($executarSQL);
										
										if($row == 0)
										{
											$_SESSION["FLHA"] = true;
											header('location: index.php');
										}									
								?>
								<form name="formulario" method="POST" action="">
										
                                                                                   
                                                                                     <div class="form-inline form-group"> 
										<label>Nome<br>
                                                                                <input type="text" class="form-control"name="nome" value="<?php echo $DataTable["nome"]?>" required min="4">
                                                                                </label>   
                                                                                  
                                                                                    <label>CPF <br>
                                                                                        <input type="text" class="form-control" name="cpf" required minlength="11" maxlength="11">
											   </label>
                                                                                        <label>E-mail   <br>
                                                                                        <input type="email"class="form-control"  name="email" value="<?php echo $DataTable["email"]?>" required>   
                                                                                           </label>
                                                                                        </div>
                                                                                 <div class="form-inline form-group"> 
                                                                                <label>Senha <br>
                                                                                        <input type="password" class="form-control" name="senha" value="<?php echo $DataTable["senha"]?>" required minlength="6">
                                                                                 </label>
                                                                                
                                                                                        <label>Telefone  <br> 
											<input type="text" class="form-control" name="telefone" value="<?php echo $DataTable["telefone"]?>" required minlength="8" maxlength="12">
                                                                                         </label>
                                                                                        <label>Logradouro <br> 
											<input type="text" class="form-control" name="logradouro" required>
											 </label>
                                                                                     </div>
                                                                                      <div class="form-inline form-group"> 
                                                                                        <label>Número <br>
											<input type="number" class="form-control" name="numero" required>
                                                                                        </label>
                                                                                        <label>Complemento  <br>
											<input type="text" class="form-control" name="complemento" required>
											</label>
                                                                                        <label>Bairro <br>
											<input type="text" class="form-control" name="bairro" required>
											</label>
                                                                                        </div>
                                                                                <div class="form-inline form-group"> 
                                                                                    <label>Cidade   <br>
											<input type="text" class="form-control" name="cidade" required>
                                                                                        </label>
                                                                                
											<label>UF<br>
											<input type="text" class="form-control" name="uf" required maxlength="2" minlength="2">
											</label>
                                                                                        <label>CEP  <br>  
                                                                                        <input type="text" class="form-control" name="cep" required minlength="8" maxlength="8">
                                                                                        </label>
                                                                                </div>        
                                                
                                                                                            <div class="text-center">
                                                                                        <input type="submit" class="btn-success btn-lg" name="enviar" value="Atualizar">
											</div>
										
                                                                                
                                                                
                                            </div>
										<?php																						
											if(isset($_POST["enviar"]))
											{												
												$nome = $_POST["nome"];
												$cpf = $_POST["cpf"];
												$email = $_POST["email"];
												$senha = $_POST["senha"];
												$telefone = $_POST["telefone"];
												$logradouro = $_POST["logradouro"];
												$numero = $_POST["numero"];
												$complemento = $_POST["complemento"];
												$bairro = $_POST["bairro"];
												$cidade = $_POST["cidade"];
												$uf = $_POST["uf"];
												$cep = $_POST["cep"];									
												$sql = "UPDATE usuario set nome='".$nome."',cpf='".$cpf."',email='".$email."',senha='".$senha."',
															telefone='".$telefone."',logradouro='".$logradouro."',numero=".$numero.",complemento='".$complemento."',
															bairro='".$bairro."',cidade='".$cidade."',uf='".$uf."',cep='".$cep."' WHERE cod_usuario=".$cod_usuario;
												if ($conn->query($sql) === TRUE) 
												{
													echo "Record updated successfully";
													header('location: Exibe.php');
												}
												else 
												{
													echo "Error updating record: " . $conn->error;
												}
												$conn->close();
											}
									}
									else
									{
										header('location: index.php');
										$_SESSION["CAD"] = "nda";
									}
										?>
									</div>
								</form>
							</div>
    </body>
</html>