<?php
	class Usuario
	{	//atributos da classe para utilizarmos durante todo o processo, ela receberá os valores escritos no UI
		public $cod_usuario;
		public $nome;
		public $cpf;
		public $email;
		public $senha;
		public $telefone;
		public $logradouro;
		public $numero;
		public $complemento;
		public $bairro;
		public $cidade;
		public $uf;
		public $cep;
		
		//O Método construct executa tudo que estiver dentro
		public function __construct()
		{
			//atributos e métodos que irão se realizar quando a classe for instanciada
			include("Classe_Conexao.php");
			$this->cod_usuario="";
			$this->nome="";
			$this->cpf="";
			$this->email="";
			$this->senha="";
			$this->telefone="";
			$this->logradouro="";
			$this->numero="";
			$this->complemento="";
			$this->bairro="";
			$this->cidade="";
			$this->uf="";
			$this->cep="";
		}
		
		//Método de inserção de clientes, ela será chamada nas páginas quando formos inserir, reutilizando o código
		public function Inserir()
		{	//instanciação da classe de conexão, Dividimos a programação em três ou quatro camdas, a DAL(Data Acess Layer), a BLL(Business Logical Layer)
			//a UI (User Interface) e a DTO(Data Transfer Object). A DAL é a classe de conexão, a nossa Classe_Conexao, e ela não necessita de nenhuma
			//instanciação de outras classes, sendo uma base. A BLL e essa classe(Classe_Cliente), e ela trabalha tudo envolvo em lóogica de CRUD(Create,Retrieve,Update,Delete)
			//ou afins, e ela necessita da DAL e da DTO(Não estamos utilizando DTO nesse sistema). Por último, a UI, ela é página em que trabalhamos, 
			//a única camada que o usuário urá interagir, e ela necessita da BLL e da DTO, sendo a BLL usando a DAL.
			$objConexao = new Conexao();
			$sql = "insert into usuario (cod_usuario, nome, email, senha, telefone) values(null, '".$this->nome."', '".$this->email."', '".$this->senha."','".$this->telefone."')";
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
		
		public function UltimoCod()
		{
			$objConexao = new Conexao();
			
			$sql = "select * from usuario order by cod_usuario desc limit 1";
			$ExecutarSQL = mysqli_query($objConexao->conexao,$sql);
			$DataTable = mysqli_fetch_assoc($ExecutarSQL);
			$this->cod_usuario = $DataTable["cod_usuario"];
		}
		
		public function NomeUsu()
		{
			$objConexao = new Conexao();
			
			$sql = "select nome from usuario where cod_usuario=".$this->cod_usuario;
			$ExecutarSQL = mysqli_query($objConexao->conexao,$sql);
			$DataTable = mysqli_fetch_assoc($ExecutarSQL);
			$this->nome = $DataTable["cod_usuario"];
		}
		
		public function Pesquisar()
		{
			$objConexao = new Conexao();
			//Query de seleção
			$sql = "select * from usuario where cod_usuario = ".$this->cod_usuario;
			//Query de execução da sql acima
			$ExecuteSQL = $objConexao->conexao->query($sql);
			//Essa variável irá armazenar por em índice textual, ou seja, a identificação dos dados ocerrerá atraves de índices escritos ao invés de números.
			//A variável carrega consigo todas as informações do usuário especificado.
			$DataTableP = mysqli_fetch_assoc($ExecuteSQL);
			//a atribuição dos dados armazenados na variável DataTableP, nos atributos da classe.
			$this->cod_usuario = $DataTableP["cod_usuario"];
			$this->nome = $DataTableP["nome"];
			$this->cpf = $DataTableP["cpf"];
			$this->email = $DataTableP["email"];
			$this->senha = $DataTableP["senha"];
			$this->telefone = $DataTableP["telefone"];
			$this->logradouro = $DataTableP["logradouro"];
			$this->numero = $DataTableP["numero"];
			$this->complemento = $DataTableP["complemento"];
			$this->bairro = $DataTableP["bairro"];
			$this->cidade = $DataTableP["cidade"];
			$this->uf = $DataTableP["uf"];
			$this->cep = $DataTableP["cep"];
		}
		
		public function Alterar()
		{
			$objConexao = new Conexao();
			
			$sql = "update usuario set 
			nome='".$this->nome."',
			cpf='".$this->cpf."',
			email='".$this->email."',
			senha='".$this->senha."',
			telefone='".$this->telefone."',
			logradouro='".$this->logradouro."',
			numero=".$this->numero.",
			complemento='".$this->complemento."',
			bairro='".$this->bairro."',
			cidade='".$this->cidade."',
			uf='".$this->uf."',
			cep='".$this->cep."' 
			where cod_usuario=".$this->cod_usuario."";
			if ($objConexao->conexao->query($sql) === TRUE) 
			{
				echo "Record updated successfully";
			}
			else 
			{
				echo "Error updated record: " . $objConexao->conexao->error;
			}
		}
		
		public function Deletar()
		{
			$objConexao = new Conexao();
			
			$sql2="delete from animal where usuario_cod_usuario=".$cod_usuario;
			$executeSQL = $conn->query($sql2);
			
			$sql3="delete from feedrie where usuario_cod_usuario=".$this->cod_usuario;
			$executeSQL = $conn->query($sql3);

			$sql4="delete from dieta where usuario_cod_usuario=".$this->cod_usuario;
			$executeSQL = $conn->query($sql4);

			$sql5="delete from refeicao where dieta_cod_usuario=".$this->cod_usuario;
			$executeSQL = $conn->query($sql5);
			
			$sql = "delete from usuario where cod_usuario = ".$this->cod_usuario;
			if ($conn->query($sql) === TRUE) 
			{
				echo "<script>alert('Usuario removido com sucesso!');</script>";
			}
			else 
			{
				echo "Erro ao deletar uauario: " . $conn->error;
			}
		}
	}
?>











