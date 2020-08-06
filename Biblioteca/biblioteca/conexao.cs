using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql;
using MySql.Data.MySqlClient;
using System.Data;

namespace biblioteca
{
    class conexao
    {

        private static string servidor = "localhost";
        private static string banco = "sistema_veiculos";
        private static string user = "root";
        private static string password = "";

        private static string string_conexao = "Server=" + servidor +
                                               ";Database=" + banco +
                                               ";Uid=" + user +
                                               ";Pwd=" + password;
        public MySqlConnection conexao;
        public void Conectar()
        {
            conexao = new MySqlConnection();
            conexao.ConnectionString = string_conexao;
            conexao.Open();

        }

        //Insert, Update e Delete
        public void ExecutarComandoSQL(string sql)
        {
            Conectar();       //Chama o método para conectar ao banco
            MySqlCommand comando = new MySqlCommand(sql, conexao);
            comando.ExecuteNonQuery();
        }

        public DataTable DadosDataTable(string sql)
        {
            Conectar();
            DataTable dados = new DataTable();      //Retorno para o meu GRID ou COMBOBOX
            MySqlDataAdapter da = new MySqlDataAdapter(sql, conexao); //Adaptador de dadoa de Mysql para o C#
            da.Fill(dados);     //Preenche o objeto "dados com os resultados recuperados do bd
            return dados;
        }

    }
}
