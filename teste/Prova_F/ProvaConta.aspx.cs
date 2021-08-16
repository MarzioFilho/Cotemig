using System;
using System.Web;
using BLL;
using DTO;

namespace Prova_F
{
    public partial class ProvaConta : System.Web.UI.Page
    {
        TipoContaBLL objTipoConta = new TipoContaBLL();
        ContaBLL  objContaBLL = new ContaBLL();
        ContaDTO objContaDTO = new ContaDTO();

        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                CarregarTipoConta();
                CarregarConta();
            }
        }

        private void CarregarTipoConta()
        {
            drpTipoConta.DataSource = objTipoConta.ListarTiposContas();
            drpTipoConta.DataTextField = "descricao";
            drpTipoConta.DataValueField = "idTipo";
            drpTipoConta.DataBind();
        }

        private void CarregarConta()
        {
            gridConta.DataSource = objContaBLL.ListarContas();
            gridConta.DataBind();
        }

        protected void btnGravar_Click(object sender, EventArgs e)
        {
            objContaDTO.NomeTitular = HttpUtility.HtmlDecode(txtNome.Text);
            objContaDTO.Cpf = txtCPF.Text;
            objContaDTO.IdTipoConta= int.Parse(drpTipoConta.SelectedValue);
            objContaDTO.Agencia= txtAgencia.Text;
            objContaDTO.NumeroConta = txtNConta.Text;
            objContaDTO.DtAbertura = Convert.ToDateTime(txtDtAbertura.Text);

            if (txtIdConta.Text == "")
            {
                objContaBLL.Inserir();
            }
            else
            {
                objContaDTO.IdConta = int.Parse(txtIdConta.Text);
                objContaBLL.Alterar();
            }
            CarregarConta();
            Limpar();
        }

        protected void gridAlunos_SelectedIndexChanged(object sender, EventArgs e)
        {
            txtIdConta.Text = gridConta.SelectedRow.Cells[1].Text;
            txtNome.Text = HttpUtility.HtmlDecode(gridConta.SelectedRow.Cells[2].Text);
            txtCPF.Text = gridConta.SelectedRow.Cells[3].Text;
            drpTipoConta.SelectedValue = gridConta.SelectedRow.Cells[4].Text;
            txtAgencia.Text = gridConta.SelectedRow.Cells[5].Text;
            txtNConta.Text = gridConta.SelectedRow.Cells[6].Text;
            txtDtAbertura.Text = Convert.ToDateTime(gridConta.SelectedRow.Cells[7].Text).ToString("dd/MM/yyyy");
        }

        protected void btnExcluir_Click(object sender, EventArgs e)
        {
            objContaDTO.IdConta = int.Parse(txtIdConta.Text);
            objContaBLL.Excluir();
            CarregarConta();
            Limpar();
        }

        private void Limpar()
        {
            txtIdConta.Text = "";
            txtNome.Text = "";
            txtCPF.Text = "";
            txtAgencia.Text = "";
            txtNConta.Text = "";
            drpTipoConta.SelectedIndex = -1;
            txtDtAbertura.Text = "";
        }

        protected void btnLimpar_Click(object sender, EventArgs e)
        {
            Limpar();
        }
    }
}