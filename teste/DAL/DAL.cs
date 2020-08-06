using System;
using MySql.Data.MySqlClient;
using System.Data;

namespace DAL
{
    public class BancoDAL
    {
        private string string_conexao = "Server=localhost; Database=bd_ProvaBanco; Uid=root;Pwd=";
        public MySqlConnection conexao;

        public void Conectar()
        {
            try
            {
                conexao = new MySqlConnection(string_conexao);
                conexao.Open();
            }
            catch (MySqlException ex)
            {
                throw new Exception(ex.Message);
            }
        }

        public void ExecutarComandoSQL(string sql)
        {
            Conectar();
            MySqlCommand comando = new MySqlCommand(sql, conexao);
            comando.ExecuteNonQuery();
            conexao.Close();
        }

        public DataTable DadosDataTable(string sql)
        {
            Conectar();
            DataTable dados = new DataTable();
            MySqlDataAdapter da = new MySqlDataAdapter(sql, conexao);
            da.Fill(dados);
            conexao.Close();
            return dados;
        }
    }
}
