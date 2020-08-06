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
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        Cliente objCliente = new Cliente();
        public NotaFiscal objNotaFiscal = new NotaFiscal();

        private void button1_Click(object sender, EventArgs e)
        {
            objCliente.Nome = txtNome.Text;
            objCliente.DataNascimento = Convert.ToDateTime(mtxData.Text);
            objNotaFiscal.lstCliente.Add(objCliente);

            CarregaGrid();
        }

        private void CarregaGrid()
        {
            double total = 0;
            dgvNotaFiscal.Rows.Clear();
            for (int i = 0; i < objNotaFiscal.lstProdutos.Count; i++)
            {
                dgvNotaFiscal.Rows.Add();
                if(objNotaFiscal.lstItemDaNotaFiscal[i].quantidade > 1)
                {
                    total += (objNotaFiscal.lstItemDaNotaFiscal[i].ValorUnitario / 100) * objNotaFiscal.lstItemDaNotaFiscal[i].quantidade;
                }
                else
                {
                    total += (objNotaFiscal.lstItemDaNotaFiscal[i].ValorUnitario / 100);
                }
                dgvNotaFiscal.Rows[i].Cells["Cliente"].Value = objNotaFiscal.lstCliente[0].Nome;
                dgvNotaFiscal.Rows[i].Cells["Produto"].Value = objNotaFiscal.lstProdutos[i].Nome;
                dgvNotaFiscal.Rows[i].Cells["ValorUnitario"].Value = (objNotaFiscal.lstItemDaNotaFiscal[i].ValorUnitario / 100);
                dgvNotaFiscal.Rows[i].Cells["Quantidade"].Value = objNotaFiscal.lstItemDaNotaFiscal[i].quantidade;
                dgvNotaFiscal.Rows[i].Cells["Total"].Value = total;
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
