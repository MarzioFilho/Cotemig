using System;
using System.Data;
using BLL;
using System.Web;

namespace ElaboracaoExercicios
{
    public partial class WebForm2 : System.Web.UI.Page
    {

        FilmeBLL objFilme = new FilmeBLL();

        GeneroBLL objGenero = new GeneroBLL();

        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                preencheGeneros();
                CarregarFilmes();
            }
        }

        protected void btnAdicionar_Click(object sender, EventArgs e)
        {
            if (txtNomeFilme.Text != "")
                lstFilmes.Items.Add(txtNomeFilme.Text);

            if (rdb18.Checked)
                lblQtProibidos.Text = (int.Parse(lblQtProibidos.Text) + 1).ToString();
        }

        private void preencheGeneros()
        {
            /*string[] filmes = { "Comédia", "Romance", "Aventura", "Ficção Científica", "Terror", "Drama" };

            foreach (string i in filmes)
            {
                drpGenero.Items.Add(i.ToString());
            }
             * */

            drpGenero.DataSource = objGenero.ListarGeneros();
            drpGenero.DataTextField = "descricao";
            drpGenero.DataValueField = "idgenero";
            drpGenero.DataBind();
        }

        protected void btnDescartar_Click(object sender, EventArgs e)
        {
            txtID.Text = "";
            txtNomeFilme.Text = "";
            txtDtLancamento.Text = "";
            txtSinopse.Text = "";
            drpGenero.SelectedIndex = -1;
            rdb10.Checked = false;
            rdb12.Checked = false;
            rdb14.Checked = false;
            rdb16.Checked = false;
            rdb18.Checked = false;
            rdbER.Checked = false;
            rdbL.Checked = false;
        }

        protected void btnSalvar_Click(object sender, EventArgs e)
        {
            objFilme.NomeFilme = txtNomeFilme.Text;
            objFilme.GeneroFilme = drpGenero.Text;
            objFilme.Sinopse = txtSinopse.Text;
            objFilme.DtLancamento = Convert.ToDateTime(txtDtLancamento.Text);

            if (rdb10.Checked)
                objFilme.Classificacao = "10";
            else if (rdb12.Checked)
                objFilme.Classificacao = "12";
            else if (rdb14.Checked)
                objFilme.Classificacao = "14";
            else if (rdb16.Checked)
                objFilme.Classificacao = "16";
            else if (rdb18.Checked)
                objFilme.Classificacao = "18";
            else if (rdbL.Checked)
                objFilme.Classificacao = "L";

            if (txtID.Text == "")
            {
                objFilme.Inserir();
            }
            else
            {
                objFilme.IDFilme = int.Parse(txtID.Text);
                objFilme.Alterar();
            }
        }

        protected void gridFilmes_SelectedIndexChanged(object sender, EventArgs e)
        {
            txtID.Text = gridFilmes.SelectedRow.Cells[1].Text;
            txtNomeFilme.Text = HttpUtility.HtmlDecode(gridFilmes.SelectedRow.Cells[2].Text);
            drpGenero.Text = gridFilmes.SelectedRow.Cells[3].Text;

            switch (gridFilmes.SelectedRow.Cells[4].Text)
            {
                case "10": rdb10.Checked = true; break;
                case "12": rdb12.Checked = true; break;
                case "14": rdb14.Checked = true; break;
                case "16": rdb16.Checked = true; break;
                case "18": rdb18.Checked = true; break;
                case "ER": rdbER.Checked = true; break;
                case "L": rdbL.Checked = true; break;
            }

            txtSinopse.Text = HttpUtility.HtmlDecode(gridFilmes.SelectedRow.Cells[5].Text);
            txtDtLancamento.Text = Convert.ToDateTime(gridFilmes.SelectedRow.Cells[6].Text).ToString("dd/MM/yy");
        }

        public void CarregarFilmes()
        {
            gridFilmes.DataSource = objFilme.CarregarGrid();
            gridFilmes.DataBind();
        }
    }
}