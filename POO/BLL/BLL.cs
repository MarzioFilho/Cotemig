using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL;
using DTO;
using System.Data;

namespace BLL
{
    public class BLL
    {
        DTO.DTO objDTO = new DTO.DTO();
        DAL.DAL objDAL = new DAL.DAL();

        //INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--
        //INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--INSERIR--

        public void InserirConta()
        {
            string sql = string.Format("INSERT INTO tbl_conta values(null,'{0}',{1})",
                objDTO.descricao_conta, objDTO.saldo);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void InserirPlano()
        {
            string sql = string.Format("INSERT INTO tbl_planoconta values(null, '{0}', '{1}')",
                objDTO.descricao_plano, objDTO.tipo_plano);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void InserirTransacao()
        {
            string sql = string.Format("INSERT INTO tbl_transacao values(null,{0},{1},'{2}','{3}','{4}',{5})",
                objDTO.id_conta_transacao, objDTO.id_plano_transacao, objDTO.descricao_transacao, 
                objDTO.tipo_transacao, objDTO.data_hora.ToString("yyyy/MM/dd"), objDTO.valor);
            objDAL.ExecutarComandoSQL(sql);
        }

        //ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--
        //ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--ALTERAR--

        public void AlterarConta()
        {
            string sql = string.Format("UPDATE tbl_conta set descricao='{0}', saldo={1} where id={2}",
                objDTO.descricao_conta, objDTO.saldo, objDTO.id_conta);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void AlterarPlano()
        {
            string sql = string.Format("UPDATE tbl_planoconta set descricao='{0}', tipo='{1}' where id={2}",
                objDTO.descricao_plano, objDTO.tipo_plano, objDTO.id_plano);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void AlterarTransacao()
        {
            string sql = string.Format("UPDATE tbl_transacao set id_conta={0},id_planoconta={1},descricao='{2}',tipo='{3}',data_hora='{4}',valor={5} where id={6}",
                objDTO.id_conta_transacao, objDTO.id_plano_transacao, objDTO.descricao_transacao, objDTO.tipo_transacao, objDTO.data_hora.ToString("yyyy/MM/dd"),
                objDTO.valor, objDTO.id_transacao);
            objDAL.ExecutarComandoSQL(sql);
        }

        //EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--
        //EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--EXCLUIR--

        public void ExcluirConta()
        {
            string sql = string.Format("DELETE FROM tbl_conta where id={0}",
                objDTO.id_conta);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void ExcluirPlano()
        {
            string sql = string.Format("DELETE FROM tbl_planoconta where id={0}",
                objDTO.id_plano);
            objDAL.ExecutarComandoSQL(sql);
        }

        public void ExcluirTransacao()
        {
            string sql = string.Format("DELETE FROM tbl_transacao where id={0}",
                objDTO.id_transacao);
            objDAL.ExecutarComandoSQL(sql);
        }

        //LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--
        //LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--LISTAR--

        public DataTable ListarConta()
        {
            DataTable dados = new DataTable();
            dados = objDAL.DadosDataTable("SELECT * FROM tbl_conta order by id");
            return dados;
        }

        public DataTable ListarPlano()
        {
            DataTable dados = new DataTable();
            dados = objDAL.DadosDataTable("SELECT * FROM tbl_planoconta order by id");
            return dados;
        }

        public DataTable ListarTransacao()
        {
            DataTable dados = new DataTable();
            dados = objDAL.DadosDataTable("SELECT * FROM tbl_transacao order by id");
            return dados;
        }

    }
}
