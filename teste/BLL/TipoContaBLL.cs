using DAL;
using System.Data;

namespace BLL
{
    public class TipoContaBLL
    {
        BancoDAL objDAL = new BancoDAL();
        DTO.ContaDTO conta = new DTO.ContaDTO();

        public DataTable ListarTiposContas()
        {
            DataTable setores = new DataTable();
            string sql = "SELECT * FROM tipoConta ORDER BY descricao where idTipoConta = " + conta.IdTipoConta;
            setores = objDAL.DadosDataTable(sql);
            return setores;
        }
    }
}
