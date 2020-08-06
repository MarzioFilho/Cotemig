using System.Data;
using DTO;
using DAL;

namespace BLL
{
    public class ContaBLL
    {
        BancoDAL objDAL = new BancoDAL();
        ContaDTO conta = new ContaDTO();

        public void Inserir()
        {
            string sql = string.Format(@"INSERT INTO conta VALUES (null,'{0}', '{1}', '{2}', '{3}', '{4}', '{5}')",
                                         conta.NomeTitular, conta.Cpf, conta.IdTipoConta, conta.Agencia, conta.NumeroConta, conta.DtAbertura.ToString("yyyy/MM/dd"));
            objDAL.ExecutarComandoSQL(sql);
        }

        public void Alterar()
        {
            string sql = string.Format(@"UPDATE conta SET nomeTitular='{0}', cpfTitular='{1}', idTipoConta='{2}', agencia='{3}', numeroConta='{4}', dtAbertura='{5}' WHERE idConta = {6}",
                                        conta.NomeTitular, conta.Cpf, conta.IdTipoConta, conta.Agencia, conta.NumeroConta, conta.DtAbertura.ToString("yyyy/MM/dd"), conta.IdConta);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void Excluir()
        {
            string sql = string.Format("DELETE FROM conta WHERE idConta = {0}", conta.IdConta);
            objDAL.ExecutarComandoSQL(sql);
        }

        public DataTable ListarContas()
        {
            DataTable dadosAlunos = new DataTable();
            dadosAlunos = objDAL.DadosDataTable("SELECT * FROM conta ORDER BY nomeTitular");
            return dadosAlunos;
        }

        public DataTable RetornaConta()
        {
            DataTable dadoconta = new DataTable();
            dadoconta = objDAL.DadosDataTable("select * from conta where idTipoConta =" + conta.IdTipoConta);
            return dadoconta;
        }
    }
}
