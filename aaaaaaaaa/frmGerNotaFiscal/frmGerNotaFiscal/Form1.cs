using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace frmGerNotaFiscal
{
    public partial class frmGerNotaFiscal : Form
    {
        public frmGerNotaFiscal()
        {
            InitializeComponent();
        }

    #region Instâncias
    Produto objProduto = new Produto();
    NotaFiscal objNotaFiscal = new NotaFiscal();
    ItemDaNotaFiscal objItemDaNotaFiscal = new ItemDaNotaFiscal();
    Cliente objCliente = new Cliente();
    #endregion

    #region Variáveis
    #endregion

    private void button1_Click(object sender, EventArgs e)
    {
            if (Validacao())
            {
                objProduto = new Produto();
                objItemDaNotaFiscal = new ItemDaNotaFiscal();
                objCliente = new Cliente();

                objProduto.Nome = txtNomeProduto.Text;
                objNotaFiscal.DataEmissao = DateTime.Now;
                objItemDaNotaFiscal.ValorUnitario = Convert.ToDouble(txtValorUnitario.Text);
                objItemDaNotaFiscal.quantidade = Convert.ToInt32(txtQuantidade.Text);

                objNotaFiscal.lstProdutos.Add(objProduto);
                objNotaFiscal.lstItemDaNotaFiscal.Add(objItemDaNotaFiscal);

                dgvCarrinho.Rows.Clear();

                for (int i = 0; i < objNotaFiscal.lstProdutos.Count; i++)
                {
                    dgvCarrinho.Rows.Add();
                    dgvCarrinho.Rows[i].Cells["Produto"].Value = objNotaFiscal.lstProdutos[i].Nome;
                    dgvCarrinho.Rows[i].Cells["valorunitario"].Value = (objNotaFiscal.lstItemDaNotaFiscal[i].ValorUnitario / 100);
                    dgvCarrinho.Rows[i].Cells["quantidade"].Value = objNotaFiscal.lstItemDaNotaFiscal[i].quantidade;
                }
                LimparCampos();
            }
    }

        private void LimparCampos()
        {
            txtNomeProduto.Clear();
            txtQuantidade.Clear();
            txtValorUnitario.Clear();
            txtNomeProduto.Focus();
        }

        private bool Validacao()
        {
            if (txtNomeProduto.Text.Equals(""))
            {
                MessageBox.Show("Insira o produto desejado!");
                txtNomeProduto.Focus();
                return false;
            }
            else if (txtValorUnitario.Text.Equals("  ."))
            {
                MessageBox.Show("Insira o valor unitário do produto " + txtNomeProduto.Text);
                txtValorUnitario.Focus();
                return false;
            }
            else if (txtQuantidade.Text.Equals(""))
            {
                MessageBox.Show("Insira a quantidade do produto " + txtNomeProduto.Text);
                txtQuantidade.Focus();
                return false;
            }
            return true;
        }

    private void btnCalcular_Click(object sender, EventArgs e)
    {
            objNotaFiscal.CalcularValorTotal();

            Form2 frm = new Form2();
            frm.objNotaFiscal = this.objNotaFiscal;
            frm.ShowDialog();
    }

    private void button2_Click(object sender, EventArgs e)
    {
      this.Close();
    }
  }
}
