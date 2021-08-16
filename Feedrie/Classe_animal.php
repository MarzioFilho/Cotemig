<?php
	class Animal
	{	//atributos da classe para utilizarmos durante todo o processo, ela receberá os valores escritos no UI
		public $cod_animal;
		public $nome;
		public $especie;
		public $raca;
		public $idade;
		public $peso;
		public $usuario_cod_usuario;
		public $verifica;
		public $IndexCBX;

		//O Método construct executa tudo que estiver dentro
		public function __construct()
		{
			//atributos e métodos que irão se realizar quando a classe for instanciada
			include("Classe_Conexao.php");
			include("Classe_usuario.php");
			$this->cod_animal="";
			$this->nome="";
			$this->especie="";
			$this->raca="";
			$this->idade="";
			$this->peso="";
			$this->usuario_cod_usuario="";
			$this->verifica="";
			$this->IndexCBX="";
		}
		
		//Método de inserção de clientes, ela será chamada nas páginas quando formos inserir, reutilizando o código
		public function Inserir()
		{	//instanciação da classe de conexão, Dividimos a programação em três ou quatro camdas, a DAL(Data Acess Layer), a BLL(Business Logical Layer)
			//a UI (User Interface) e a DTO(Data Transfer Object). A DAL é a classe de conexão, a nossa Classe_Conexao, e ela não necessita de nenhuma
			//instanciação de outras classes, sendo uma base. A BLL e essa classe(Classe_Cliente), e ela trabalha tudo envolvo em lóogica de CRUD(Create,Retrieve,Update,Delete)
			//ou afins, e ela necessita da DAL e da DTO(Não estamos utilizando DTO nesse sistema). Por último, a UI, ela é página em que trabalhamos, 
			//a única camada que o usuário urá interagir, e ela necessita da BLL e da DTO, sendo a BLL usando a DAL.
			$objConexao = new Conexao();
			$sql = "insert into animal values(null, '".$this->nome."', '".$this->especie."', '".$this->raca."','".$this->idade."','".$this->peso."','".$this->usuario_cod_usuario."')";
			//Verificação se a variável de inserção retornará true do Banco de Dados
			if ($objConexao->conexao->query($sql) === TRUE) 
			{
				echo "Record inserted successfully";
			}
			else 
			{
				//Neste echo, ele apresentará que a query retornou false, e que nela contém um erro, apresentando tabém o erro e a linha em que se encontra
				echo "Error inserting record: " . $objConexao->conexao->error;
			}
		}

		public function Pesquisar()
		{
			$objConexao = new Conexao();
			$objUsuario = new Usuario();
			//Query de seleção
			$sql = "select * from animal where usuario_cod_usuario = ".$this->usuario_cod_usuario;
			//Query de execução da sql acima
			$ExecuteSQL = $objConexao->conexao->query($sql);
			$Row = mysqli_num_rows($ExecuteSQL);
			//Essa variável irá armazenar por em índice textual, ou seja, a identificação dos dados ocerrerá atraves de índices escritos ao invés de números.
			//A variável carrega consigo todas as informações do usuário especificado.
			$DataTableP = mysqli_fetch_assoc($ExecuteSQL);
			//a atribuição dos dados armazenados na variável DataTableP, nos atributos da classe.
			$this->cod_animal= $DataTableP["cod_animal"];
			$this->nome= $DataTableP["nome"];
			$this->especie= $DataTableP["especie"];
			$this->raca= $DataTableP["raca"];
			$this->idade= $DataTableP["idade"];
			$this->peso= $DataTableP["peso"];
			$this->usuario_cod_usuario= $DataTableP["usuario_cod_usuario"];
			
			$objUsuario->NomeUsu();
		}
		
		public function AnimalESP()
		{
			$objConexao = new Conexao();
			//$objAnimal->IndexCBX = $IndexCBX;
			$sql = "select * from animal where cod_animal=".$this->IndexCBX;
			$ExecuteSQL = $objConexao->conexao->query($sql);
			$DataTableAni = mysqli_fetch_assoc($ExecuteSQL);
			$this->cod_animal=$DataTableAni["cod_animal"];
			$this->nome=$DataTableAni["nome"];
			$this->especie=$DataTableAni["especie"];
			$this->raca=$DataTableAni["raca"];
			$this->idade=$DataTableAni["idade"];
			$this->peso=$DataTableAni["peso"];
			$this->usuario_cod_usuario=$DataTableAni["usuario_cod_usuario"];
		}
		
		public function TodosAnimais()
		{
			$objConexao = new Conexao();
			
			$sql2 = "select * from animal where usuario_cod_usuario=".$this->usuario_cod_usuario;
			$ExecuteSQL = $objConexao->conexao->query($sql);
			$Row = mysqli_num_rows($ExecuteSQL);
			
			if($Row > 0)
			{
				$this->verifica = true;
				echo"<select name='animais' class='form-control' id='animais' required><br>";
				
				while($Row > 0)
				{
					$DataTableTA = mysqli_fetch_assoc($ExecuteSQL);
					echo"<option value='".$DataTable['cod_animal']."'>".$DataTable['nome']."</option>";
					$Row = $Row -1;
				}
				echo"</select>";
			}
			else
			{
				echo"Não há registros de animais, clique aqui para registrar: <a href='CadastraAnimal.php'>Registrar</a>";
			}
		}
		
		public function Alterar()
		{
			$objConexao = new Conexao();
			
			$sql = "update animal set 
			nome='".$this->nome."',
			especie='".$this->especie."',
			raca='".$this->raca."',
			idade='".$this->idade."',
			peso='".$this->peso."'
			where cod_animal=".$this->IndexCBX."";
			if ($objConexao->conexao->query($sql) === TRUE) 
			{
				header('location: Exibe.php');
			}
			else 
			{
				echo "Error updated record: " . $objConexao->conexao->error;
			}
		}
		
		public function Deletar()
		{
			$objConexao = new Conexao();

			$sql4="delete from dieta where animal_cod_animal=".$this->IndexCBX;
			$executeSQL = $conn->query($sql4);

			$sql5="delete from refeicao where dieta_cod_animal=".$this->IndexCBX;
			$executeSQL = $conn->query($sql5);
			
			$sql = "delete from animal where cod_animal = ".$this->IndexCBX;
			if ($conn->query($sql) === TRUE) 
			{
				echo "<script>alert('Animal removido com sucesso!');</script>";
			}
			else 
			{
				echo "Erro ao deletar animal: " . $conn->error;
			}
		}
	}
?>











