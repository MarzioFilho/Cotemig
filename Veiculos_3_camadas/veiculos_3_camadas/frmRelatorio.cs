using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql;
using MySql.Data.MySqlClient;
using System.Data;
using CamadasDeNegocios;

namespace veiculos_3_camadas
{
    public partial class frmRelatorio : Form
    {
        public frmRelatorio()
        {
            InitializeComponent();
        }

        VendasBLL objVenda = new VendasBLL();

        private void btnRelatorioGerar_Click(object sender, EventArgs e)
        {
            DataTable data = objVenda.ListarVendasPorPeriodo(DateTime.Parse(dataInicial.Text), DateTime.Parse(dataFinal.Text));
            if(data.Rows.Count == 0)
            {
                MessageBox.Show("Não há registro de vendas no periodo informado");
            }
            else
            {
                dtgRelatorio.DataSource = data;

                double total = 0;

                for (int i = 0; 1 < data.Rows.Count; i++)
                {
                    total += double.Parse(data.Rows[i]["valor"].ToString());
                }

                lblTotal.Text = "Total de Vendas: " + total.ToString("c");
            }
        }
    }
}
