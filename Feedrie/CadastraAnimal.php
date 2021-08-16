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
							<div class="col-sm-12 text-center">	
								<form name="formulario" method="POST" action="">
									<div class="text-center img-responsive">
										<img src="img/feedrie.png">  
									</div>
									<h1><meta http-equiv="refresh" content=url="index.php">Cadastro de Animal</h1>
									<?php
										$TesteLogin = $_SESSION["LGN"];
										
										if($TesteLogin === true)
										{
									?>
									<div id="bordas">
										<div class="info">
											<div id="textos">
												<label> Nome:</label>
												<input type="text" name="nome" value="" class="form-control" placeholder="Exemplo:Bob" required>
												<br><br>
											</div>
											
											<div id="textos">
												<label>Espécie:</label>
												<br>

                                                                                                <label>Gato   <input class="" type="radio" name="especie" value="gato"></label>
                                                                                                    <br>
												<label>Cachorro   <input class="" type="radio" name="especie" value="cachorro"></label>	
											</div>                
											<br><br>
											<div id="textos">
												<label>Raça: </label>
                                                                                                <input class="form-control" type="text" name="raca" id="raca" placeholder="Ex:Pastor Alemão" required>
												<br><br>
												<label>Idade:</label>
												<input type="number" min="1" name="idade" class="form-control" placeholder="Exemplo:5" required>
												<br><br> 
												<label>Peso:</label> 
													<input type="number" min="1" name="peso" class="form-control" placeholder="Exemplo:14.5" required>
												<br><br>
											</div> 
											
											<div id="botoes">
												<input type="submit" name="enviar" value="Enviar" class="btn-success btn btn-lg">
												<input type="reset" name="limpar" value="Limpar"  class="btn-warning btn btn-lg">  
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>
		
		<?php
				if(isset($_POST['enviar']))
				{
					$nome = $_POST['nome'];
					$especie = $_POST['especie'];
					$raca = $_POST['raca'];
					$idade = $_POST['idade'];
					$peso = $_POST['peso'];
					$cod_usuario = $_SESSION["cod_usuario"];
					

					$conexao = mysqli_connect('localhost', 'root','','feedrie');
					$sql = "INSERT INTO animal(cod_animal,nome,especie,raca,idade,peso,usuario_cod_usuario) "
					. "VALUES (NULL,'".$nome."','".$especie."','".$raca."','".$idade."','".$peso."','".$cod_usuario."')";

					$dados = mysqli_query($conexao, $sql);
					ECHO "<script type='text/javascript'>alert('Dados inseridos com sucesso!');<script/>";
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