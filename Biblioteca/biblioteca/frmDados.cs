using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace biblioteca
{
    public partial class frmDados : Form
    {
        public frmDados()
        {
            InitializeComponent();
        }

        conexao bd = new conexao();

        private void dtgBiblioteca_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            txtTitulo.Text = dtgBiblioteca.Rows[e.RowIndex].Cells[0].Value.ToString();
            txtEditora.Text = dtgBiblioteca.Rows[e.RowIndex].Cells[1].Value.ToString();
            txtAutor.Text = dtgBiblioteca.Rows[e.RowIndex].Cells[2].Value.ToString();
            txtNumeroPag.Text = dtgBiblioteca.Rows[e.RowIndex].Cells[3].Value.ToString();
            txtGenero.Text = dtgBiblioteca.Rows[e.RowIndex].Cells[4].Value.ToString();
        }

        private void btnInserir_Click(object sender, EventArgs e)
        {
            int best=0;

            if(rdbBestSim.Checked)
            {
                best = 1;
            }
            else if(rdbBestNao.Checked)
            {
                best = 0;
            }

            if(txtTitulo.Text == "")
            {
                MessageBox.Show("Insira um título");
                txtTitulo.Focus();
            }
            else if(txtEditora.Text == "")
            {
                MessageBox.Show("Insira uma editora");
                txtEditora.Focus();
            }
            else if(txtAutor.Text == "")
            {
                MessageBox.Show("Insira uma autor");
                txtAutor.Focus();
            }
            else if(txtNumeroPag.Text == "")
            {
                MessageBox.Show("Insira o número de páginas");
                txtNumeroPag.Focus();
            }
            else if(txtGenero.Text == "")
            {
                MessageBox.Show(" Insira o gênero do livro");
                txtGenero.Focus();
            }
            else if (rdbBestSim.Checked)
            {
                best = 1;
            }
            else if (rdbBestNao.Checked)
            {
                best = 0;
            }
            else
            {
                string dados = "insert into livros(id, titulo, editora, autor, isbn, numero_de_paginas, genero, best_seller) " +
                                "values ('null', '" + txtTitulo.Text + "', '" + txtEditora.Text + "', '" + txtAutor.Text + "', 'null','" + txtNumeroPag.Text + "', '" + txtGenero.Text + "', '" + best + "')";

                bd.ExecutarComandoSQL(dados);
                txtTitulo.Clear();
                txtEditora.Clear();
                txtAutor.Clear();
                txtNumeroPag.Clear();
                txtGenero.Clear();
                txtTitulo.Focus();

                MessageBox.Show("Dados inseridos com sucesso");
            }
        }

        private void btnPesquisar_Click(object sender, EventArgs e)
        {
            string pesquisar = "select * from livros order by titulo";
            DataTable dt = bd.DadosDataTable(pesquisar);
            dtgBiblioteca.DataSource = dt;
        }

    }
}
