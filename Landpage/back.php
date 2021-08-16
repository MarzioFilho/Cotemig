<?php
	if(isset($_POST['enviar']))) 
	{
		$data = $_POST['name'] . '-' . $_POST['email'] . "\n";
		$filename = date('YmdHis').".txt";
		
		if (!file_exists($filename)) 
		{
			$fh = fopen($filename, 'w') or die("Não foi possível criar o arquivo");
		}

		$ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
		
		if($ret === false) 
		{
			die('Tivemos um erro ao criar e gravar os dados no arquivo');
		}
		else 
		{
			echo "$ret dados armazenados no arquivo";
		}
	}
	else {
	die('no post data to process');
	}
?>