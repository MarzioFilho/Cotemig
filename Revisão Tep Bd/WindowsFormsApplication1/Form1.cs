using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class Veículos : Form
    {
        public Veículos()
        {
            InitializeComponent();
        }

        Conectar bd = new Conectar();

        private void btnGravar_Click(object sender, EventArgs e)
        {
            string dados = "insert into carro(placa, marca, modelo) " +
                            "values ('" + mtxtPlaca.Text + "', '" + txtMarca.Text + "', '" + txtModelo.Text + "')";
            
            bd.ExecutarComandoSQL(dados);
            txtId.Clear();
            mtxtPlaca.Clear();
            txtMarca.Clear();
            txtModelo.Clear();
            mtxtPlaca.Focus();

            MessageBox.Show("Dados inseridos com sucesso");
        }

        private void dtgCarros_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            txtId.Text = dtgCarros.Rows[e.RowIndex].Cells[0].Value.ToString();
            mtxtPlaca.Text = dtgCarros.Rows[e.RowIndex].Cells[1].Value.ToString();
            txtMarca.Text = dtgCarros.Rows[e.RowIndex].Cells[2].Value.ToString();
            txtModelo.Text = dtgCarros.Rows[e.RowIndex].Cells[3].Value.ToString();
        }

        private void btnAlterar_Click(object sender, EventArgs e)
        {
            string alterar = "update carro set placa = '" + mtxtPlaca.Text + "', marca ='" + txtMarca.Text + "', modelo ='"+ txtModelo.Text +"' where id = '"+ txtId.Text +"'";

            bd.ExecutarComandoSQL(alterar);
            txtId.Clear();
            mtxtPlaca.Clear();
            txtMarca.Clear();
            txtModelo.Clear();
            mtxtPlaca.Focus();

            MessageBox.Show("Dados alterados com sucesso.");
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            string excluir = "delete from carro where placa = '" + mtxtPlaca.Text + "'";

            bd.ExecutarComandoSQL(excluir);
            mtxtPlaca.Clear();
            txtId.Clear();
            txtMarca.Clear();
            txtModelo.Clear();

            MessageBox.Show("dados deletados com sucesso");
        }

        private void btnPesquisar_Click(object sender, EventArgs e)
        {
            string pesquisar = "select * from carro order by marca";
            DataTable dt = bd.DadosDataTable(pesquisar);
            dtgCarros.DataSource = dt;
        } 
    }
}
