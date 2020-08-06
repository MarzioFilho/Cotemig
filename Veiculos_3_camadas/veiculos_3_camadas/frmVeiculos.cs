using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using CamadasDeNegocios;

namespace veiculos_3_camadas
{
    public partial class frmPrincipal : Form
    {
         public frmPrincipal()
        {
            InitializeComponent();
        }

        //criação de objeto para ultilização da camada de negocios
        CarroBLL objBLL = new CarroBLL();
        private void CarregarGrid()
        {
            dtgVeiculos.DataSource = objBLL.ListarCarros();
        }
        private void Limpar()
        {
            txtId.Clear();
            mtxtPlaca.Clear();
            txtMarca.Clear();
            txtModelo.Clear();
            mtxtPlaca.Clear();
        }
        private void frmPrincipal_Load(object sender, EventArgs e)
        {
            CarregarGrid();
        }

        CamadaDeDados.DAL bd = new CamadaDeDados.DAL();

        private void btnGravar_Click(object sender, EventArgs e)
        {
            if (txtId.Text == "")
            {
                MessageBox.Show("Insira um id para o carro.");
            }
            else if (mtxtPlaca.Text == "")
            {
                MessageBox.Show("Insira uma placa para o carro.");
            }
            else if (txtMarca.Text == "")
            {
                MessageBox.Show("Insira uma marca para o carro.");
            }
            else if (txtModelo.Text == "")
            {
                MessageBox.Show("Insira um modelo para o carro.");
            }
            else
            {
                //preenchimento dos atributos com os dados do usuario
                objBLL.Placa = mtxtPlaca.Text;
                objBLL.Marca = txtMarca.Text;
                objBLL.Modelo = txtModelo.Text;

                objBLL.inserir();
                CarregarGrid();

                /* string dados = "insert into carro(placa, marca, modelo) " +
                                 "values ('" + mtxtPlaca.Text + "', '" + txtMarca.Text + "', '" + txtModelo.Text + "')";

                 bd.ExecutarComandoSQL(dados);
                 txtId.Clear();
                 mtxtPlaca.Clear();
                 txtMarca.Clear();
                 txtModelo.Clear();
                 mtxtPlaca.Focus();
                 */
                MessageBox.Show("Dados inseridos com sucesso");
            }
        }

        private void btnAlterar_Click(object sender, EventArgs e)
        {
             if (txtId.Text == "")
            {
                MessageBox.Show("Insira um id para o carro.");
            }
            else if (mtxtPlaca.Text == "")
            {
                MessageBox.Show("Insira uma placa para o carro.");
            }
            else if (txtMarca.Text == "")
            {
                MessageBox.Show("Insira uma marca para o carro.");
            }
             else if (txtModelo.Text == "")
             {
                 MessageBox.Show("Insira um modelo para o carro.");
             }
             else
             {

                 objBLL.Placa = mtxtPlaca.Text;
                 objBLL.Marca = txtMarca.Text;
                 objBLL.Modelo = txtModelo.Text;
                 objBLL.Id = int.Parse(txtId.Text);
                 objBLL.Alterar();
                 CarregarGrid();

                 /*string alterar = "update carro set placa = '" + mtxtPlaca.Text + "', marca ='" + txtMarca.Text + "', modelo ='" + txtModelo.Text + "' where id = '" + txtId.Text + "'";

                 bd.ExecutarComandoSQL(alterar);
                 txtId.Clear();
                 mtxtPlaca.Clear();
                 txtMarca.Clear();
                 txtModelo.Clear();
                 mtxtPlaca.Focus();
                 */
                 MessageBox.Show("Dados alterados com sucesso.");
             }
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            if(txtId.Text != "")
            {
                if(MessageBox.Show("Deseja realmente excluir o registro selecionado?", "Atenção",
                    MessageBoxButtons.YesNo,
                    MessageBoxIcon.Question,
                    MessageBoxDefaultButton.Button2) == System.Windows.Forms.DialogResult.Yes)
                {
                    objBLL.Id = int.Parse(txtId.Text);
                    objBLL.Excluir();
                    CarregarGrid();
                    Limpar();
                }

            }

            /*string excluir = "delete from carro where placa = '" + mtxtPlaca.Text + "'";

            bd.ExecutarComandoSQL(excluir);
            mtxtPlaca.Clear();
            txtId.Clear();
            txtMarca.Clear();
            txtModelo.Clear();
             */

            MessageBox.Show("dados deletados com sucesso");
        }

        private void btnPesquisar_Click(object sender, EventArgs e)
        {

            CarregarGrid();

           /* string pesquisar = "select * from carro order by marca";
            DataTable dt = bd.DadosDataTable(pesquisar);
            dtgVeiculos.DataSource = dt;
           */
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {

            Limpar();

           /* dtgVeiculos.ClearSelection();
            txtId.Clear();
            txtMarca.Clear();
            txtModelo.Clear();
            mtxtPlaca.Clear();
            */
        }

        private void btnSair_Click(object sender, EventArgs e)
        {

            Close();

            //Application.Exit();
        }

        private void dtgVeiculos_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            //e.RowIndex retona a linha do grid que o usuário clicou

            txtId.Text = dtgVeiculos.Rows[e.RowIndex].Cells[0].Value.ToString();
            mtxtPlaca.Text = dtgVeiculos.Rows[e.RowIndex].Cells[1].Value.ToString();
            txtMarca.Text = dtgVeiculos.Rows[e.RowIndex].Cells[2].Value.ToString();
            txtModelo.Text = dtgVeiculos.Rows[e.RowIndex].Cells[3].Value.ToString();
        }
    }
}
