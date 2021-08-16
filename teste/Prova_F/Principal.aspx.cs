using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Prova_F
{
    public partial class Principal : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnTipoConta_Click(object sender, EventArgs e)
        {
            Response.Redirect("ProvaTipoConta.aspx");
        }

        protected void btnConta_Click(object sender, EventArgs e)
        {
            Response.Redirect("ProvaConta.aspx");
        }
    }
}