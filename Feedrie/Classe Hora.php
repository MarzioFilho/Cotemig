<html>

	<head>
		<?php
		echo "<meta HTTP-EQUIV='refresh' CONTENT='10';URL=textehora new.php'>"; //recarrega a pagina de 10 em 10 segundos
		?>		
	</head>
	
	
	<body>
	
	<?php 
        
		date_default_timezone_set('America/Sao_Paulo'); // indicar o fuso horario
		
		$conexao = mysqli_connect('localhost','root','','feedrie'); //conecta ao banco de dados feedrie
		$sql = "SELECT * FROM dieta";//cria a quary que buscara o id da dieta, a hora e se já foi realizada ou não
		$dados = mysqli_query($conexao,$sql);//executa a quary
		
		echo "horario atual :".date("H:i:s")."<br>";
		
		echo "-5 ".date("H:i:s", strtotime('-5 minute'))."<br>";
		
		echo "+5 ".date("H:i:s", strtotime('+5 minute'))."<br>";
		
		$diasemana = date('l');// verificar o dia da semana 
		
		foreach($dados as $key => $dados) // iniciar o loop
		{
			if($dados[$diasemana] == 1 )// verificar se há alguma dieta no dia de hoje
			{
				if(date("H:i:s", strtotime('-5 minute')) < $dados['hora']  && date("H:i:s", strtotime('+5 minute')) > $dados['hora'])//verifica se a hora do sistema é maior ou igual que a hora da dieta 
				{
					echo "a refeição com codigo : ".$dados['usuario_cod_usuario']." esta pronta para ser executada ou já foi porem esta em seu intervlado de 10 minutos de correção<br>";
					
					if($dados['realizado'] != 1)//verifica se já foi realizada hoje
					{
					echo "Iniciar dieta : ".$dados['nome'] ; // aqui deu bom
					
					$sqlRealizar = "UPDATE dieta SET realizado= 1 WHERE cod_dieta=".$dados['cod_dieta']; //insere no banco de dados que essa refeição já foi realizada hoje
					$dadosRealizar  = mysqli_query($conexao,$sqlRealizar);//executa a quary acima
					/*
					$sqlRefeicao = "Insert INTO refeicao (cod_refeicao,quantidade, data_hora_ref, dieta_cod_usuario, dieta_cod_dieta,dieta_cod_animal,dieta_cod_feedrie)
					VALUES (NULL,".$dados['quantidade'].",'".date("Y-m-d H:i:s")."',".$dados['usuario_cod_usuario'].",".$dados['cod_dieta'].",".$dados['animal_cod_animal'].",".$dados['feedrie_cod_feedrie'].")";
					$dadosRefeicao  = mysqli_query($conexao,$sqlRefeicao);//
					*/
					
					
					}
				}	
			}
		}
		
		if(date("H:i:s") == '00:00:00')//verifica se são meia noite no horario do sistema
		{
			$sql = "UPDATE dieta SET realizado= 0";//coloco que todas as dietas não foram realizadas naquele dia ainda
			$dados = mysqli_query($conexao,$sql);//executa a quary acima
		}
	?>

	</body>
	
</html>
