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
    public partial class frmAcessorios : Form
    {
        public frmAcessorios()
        {
            InitializeComponent();
        }

        CamadasDeNegocios.AcessoriosBLL objAcessorios = new CamadasDeNegocios.AcessoriosBLL();

        private void Limpar()
        {
            txtId.Clear();
            txtDescricao.Clear();
            txtId.Focus();
        }

        private void CarregarGrid()
        {
            dtgAcessorios.DataSource = objAcessorios.ListarAcessorios();
        }

        private void btnGravar_Click(object sender, EventArgs e)
        {
            try
            {
                objAcessorios.Id = int.Parse(txtId.Text);
                objAcessorios.Descricao = txtDescricao.Text;

                objAcessorios.inserir();

                MessageBox.Show("Dados Inseridos com Sucesso!");
                
            }
            catch(Exception ex)
            {
                MessageBox.Show("Preencha os dados sua anta!");
            }
        }

        private void btnPesquisar_Click(object sender, EventArgs e)
        {
            CarregarGrid();
        }

        private void btnAlterar_Click(object sender, EventArgs e)
        {
            try
            {
                objAcessorios.Id = int.Parse(txtId.Text);
                objAcessorios.Descricao = txtDescricao.Text;

                objAcessorios.Alterar();

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
                    objAcessorios.Id = int.Parse(txtId.Text);
                    objAcessorios.Excluir();
                    CarregarGrid();
                    Limpar();
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

        private void btnVoltar_Click(object sender, EventArgs e)
        {
            Form2 telavoltar = new Form2();
        }
    }
}
