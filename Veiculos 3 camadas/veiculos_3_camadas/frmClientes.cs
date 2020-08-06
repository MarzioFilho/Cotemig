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
    public partial class frmClientes : Form
    {
        public frmClientes()
        {
            InitializeComponent();
        }

        CamadasDeNegocios.ClientesBLL objCliente = new CamadasDeNegocios.ClientesBLL();

        private void Limpar()
        {
            txtId.Clear();
            txtNome.Clear();
            txtEmail.Clear();
            txtCPF.Clear();
            txtTelefone.Clear();
            txtId.Focus();
        }

        private void CarregarGrid()
        {
            dtgClientes.DataSource = objCliente.ListarClientes();
        }


        private void btnInserir_Click(object sender, EventArgs e)
        {

            try
            {
                objCliente.Id = int.Parse(txtId.Text);
                objCliente.Nome = txtNome.Text;
                objCliente.Email = txtEmail.Text;
                objCliente.Cpf = txtCPF.Text;
                objCliente.Telefone = txtTelefone.Text;

                objCliente.inserir();

                MessageBox.Show("Dados inseridos com sucesso.");

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

        private void btnAtualizar_Click(object sender, EventArgs e)
        {
            try
            {
                objCliente.Id = int.Parse(txtId.Text);
                objCliente.Nome = txtNome.Text;
                objCliente.Email = txtEmail.Text;
                objCliente.Cpf = txtCPF.Text;
                objCliente.Telefone = txtTelefone.Text;

                objCliente.Alterar();

                MessageBox.Show("Dados Atualizados com sucesso.");

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
                    objCliente.Id = int.Parse(txtId.Text);
                    objCliente.Nome = txtNome.Text;
                    objCliente.Email = txtEmail.Text;
                    objCliente.Cpf = txtCPF.Text;
                    objCliente.Telefone = txtTelefone.Text;
                    CarregarGrid();
                    Limpar();
                    txtId.Focus();

                    MessageBox.Show("Dados excluidos com sucesso!");

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
            Form2 telavoltar = new Form2();
        }
    }
}
