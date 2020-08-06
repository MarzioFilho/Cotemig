using System;
using BLL;

namespace ElaboracaoExercicios
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        UsuarioBLL objUsuario = new UsuarioBLL();

        protected void btnEntrar_Click(object sender, EventArgs e)
        {
            if (objUsuario.ValidarLogin(txtUsuario.Text, txtSenha.Text))
            {
                Response.Redirect("Filmes.aspx?nome_usuario=" + txtUsuario.Text);
            }
            else
            {
                Response.Write("<script>alert('Usuário ou senha inválidos!');</script>");
            }
        }
    }
}