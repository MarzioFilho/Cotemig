<?php
	if(isset($_POST["enviar"]))
	{
		header('location:Exibe.php'); 
	}
	
    session_start();
	$TesteLogin = $_SESSION["LGN"];

	if($TesteLogin === true)
	{
    $cod_usuario = $_SESSION["cod_usuario"];
    
	$verifica = "";
    $segunda = false;
    $terca = false;
    $quarta = false;
    $quinta = false;
    $sexta = false;
    $sabado = false;
    $domingo = false;
	
    if(isset($_POST['segunda']))
    {
        $segunda = true;
    }
    
    if(isset($_POST['terca']))
    {
        $terca = true;
    }
    
    if(isset($_POST['quarta']))
    {
        $quarta = true;
    }
    
    if(isset($_POST['quinta']))
    {
        $quinta = true;
    }
    
    if(isset($_POST['sexta']))
    {
        $sexta = true;
    }
    if(isset($_POST['sabado']))
    {
        $sabado = true;
    }
    
    if(isset($_POST['domingo']))
    {
        $domingo = true;
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
							<div id="bordas" class=" text-center">
								<div class="text-center img-responsive">
									<img src="img/feedrie.png">  
								</div>
								<form name="formulario" method="POST" action="">
									<h1>Nova Dieta</h1>
                                        <br>
                                        <label> Nome da dieta:</label>
									   <input type="text" name="nome" value="" class="form-control" required>
                                                                           <br><br>
                                                                           <div class="form-inline">	
									<label> Quantidade(g):</label>
									   <input type="number" name="quantidade" value="" class="form-control" placeholder="Exemplo:10" required min="1">
                                                                
                                                                	<label>Hora:</label>
									<input type="time" name="hora" class="form-control" placeholder="Exemplo: 12:12:12" required>
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
												<label><input type="checkbox" name="sexta" value="sexta">
												Sexta</label>
												<label><input type="checkbox" name="sabado" value="sabado">
												Sabado</label>
												<label><input type="checkbox" name="domingo" value="domingo">
												Domingo</label>
												<br><br>
												
											</div>
										</div>
                                                                                <div class="form-inline">
										<?php 
										   $conexao = mysqli_connect('localhost','root','','feedrie');

											$sql = "SELECT cod_animal,nome FROM animal where usuario_cod_usuario =".$cod_usuario;
											$dados = mysqli_query($conexao,$sql);
											$qtdeLinhas = mysqli_num_rows($dados);
											
											if($qtdeLinhas > 0)
											{
												$verifica = true;
												ECHO"<label>Animal :</label>";
												ECHO"<select name='animal' class='form-control' >";

												for($x = 0; $x < $qtdeLinhas ;$x++)
												{
													$linha = mysqli_fetch_assoc($dados);

													ECHO"<option value='".$linha['cod_animal']."'>".$linha['nome']."</option>";
												}												 
												ECHO" </select>";
											}
											else
											{
												$verifica = false;
												echo "Não há registros de animais, Clique aqui para registrar: <a href='CadastraAnimal.php'>Registrar</a>";
											}
										?>   
										<br><br><label>Escolha a máquina</label>
										<?php
											$sql = "SELECT * from feedrie where usuario_cod_usuario =".$cod_usuario;
											$dados = mysqli_query($conexao,$sql);
											$qtdeLinhas = mysqli_num_rows($dados);
											
											if($qtdeLinhas > 0)
											{
												$verifica = true;
												ECHO"<select name='feedrie' class='form-control' >";

												for($x = 0; $x < $qtdeLinhas ;$x++)
												{
													$linha = mysqli_fetch_assoc($dados);

													ECHO"<option value='".$linha['cod_feedrie']."'>".$linha['nome']."</option>";
												}												 
												ECHO" </select>";
											}
											else
											{
												$verifica = false;
												echo "Não há registros de Feedrie, Clique aqui para registrar: <a href='CadastraFeedrie.php'>Registrar</a>";
											}
											?>
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
		</div>
		<?php
		  if(isset($_POST['enviar']))
			{
				if($verifica === true)
				{
					$nome = $_POST["nome"];
					$quantidade = $_POST['quantidade'];
					$hora = $_POST['hora'];
					echo $hora;
					$cod_animal = $_POST['animal']; // nome do cachorro
					$cod_usuario = $_SESSION["cod_usuario"];
					$feedrie=$_POST["feedrie"];

					$conexao = mysqli_connect('localhost', 'root','','feedrie');
					$sql = "INSERT INTO dieta(cod_dieta,nome,quantidade,hora,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday,animal_cod_animal,usuario_cod_usuario,feedrie_cod_feedrie) values(NULL,'".$nome."','".$quantidade."','".$hora."','".$segunda."','".$terca."','".$quarta."','".$quinta."','".$sexta."','".$sabado."','".$domingo."','".$cod_animal."','".$cod_usuario."',".$feedrie.")";
					
					//sabado,domingo

					$dados = mysqli_query($conexao, $sql);
										 
				}
				else
				{
					$_SESSION["FLHA"] = true;
					header('location: Exibe.php');
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