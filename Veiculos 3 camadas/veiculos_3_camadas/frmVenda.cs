using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace veiculos_3_camadas
{
    public partial class frmVenda : Form
    {
        public frmVenda()
        {
            InitializeComponent();
        }

        CamadasDeNegocios.VendasBLL objVendas = new CamadasDeNegocios.VendasBLL();

        private void Limpar()
        {
            txtId.Clear();
            txtObs.Clear();
            txtId.Focus();
        }

        private void CarregarGrid()
        {
            dtgVenda.DataSource = objVendas.ListarVenda();
        }

        private void btnInserir_Click(object sender, EventArgs e)
        {
            try
            {
                objVendas.Id = int.Parse(txtId.Text);
                objVendas.Id_cliente = int.Parse(cmbCliente.Text);
                objVendas.Id_Veiculos = int.Parse(cmbVeiculo.Text);
                objVendas.Data = System.DateTime.Parse(dtpData.Text);
                objVendas.Observacao = txtObs.Text;

                objVendas.inserir();

                MessageBox.Show("Dados Inseridos com Sucesso!");

            }
            catch (Exception ex)
            {
                MessageBox.Show("Preencha os dados sua anta!");
            }
        }

        private void btnPesquisar_Click(object sender, EventArgs e)
        {
            CarregarGrid();
        }

        private void btnPesquisarCliente_Click(object sender, EventArgs e)
        {
            try
            {
                objVendas.Id = int.Parse(txtId.Text);
                objVendas.Id_cliente = int.Parse(cmbCliente.Text);
                objVendas.Id_Veiculos = int.Parse(cmbVeiculo.Text);
                objVendas.Data = System.DateTime.Parse(dtpData.Text);
                objVendas.Observacao = txtObs.Text;

                objVendas.Alterar();

                MessageBox.Show("Dados Atualizados com Sucesso!");

            }
            catch (Exception ex)
            {
                MessageBox.Show("Preencha os dados sua anta!");
            }
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            try
            {
                if (MessageBox.Show("Deseja realmente excluir o registro selecionado?", "Atenção",
                    MessageBoxButtons.YesNo,
                    MessageBoxIcon.Question,
                    MessageBoxDefaultButton.Button2) == System.Windows.Forms.DialogResult.Yes)
                {
                    objVendas.Id = int.Parse(txtId.Text);
                    objVendas.Excluir();
                    CarregarGrid();
                    Limpar();

                    MessageBox.Show("Dados excluídos com sucesso!");
                }

            }
            catch (Exception ex)
            {
                MessageBox.Show("Preencha os dados sua anta!");
            }
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            Limpar();
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            Form2 telaVoltar = new Form2();
        }
    }
}
