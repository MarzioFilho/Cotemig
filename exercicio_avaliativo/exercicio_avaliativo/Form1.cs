using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace exercicio_avaliativo
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        produto objproduto = new produto();

        private void btnVerificar_Click(object sender, EventArgs e)
        {
            try
            {
                objproduto.Codigo = int.Parse(txtCodigo.Text);
                objproduto.Descricao = txtDescricao.Text;
                objproduto.Quantidade = int.Parse(txtQuantidade.Text);
                objproduto.Tipo = cmbTipo.Text;
                if (rdbP.Checked)
                {
                    objproduto.Tamanho = rdbP.Text;
                }
                else if (rdbM.Checked)
                {
                    objproduto.Tamanho = rdbM.Text;
                }
                else if (rdbG.Checked)
                {
                    objproduto.Tamanho = rdbG.Text;
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Preencha os dados sua anta.");
            }            
        }

    }
}
