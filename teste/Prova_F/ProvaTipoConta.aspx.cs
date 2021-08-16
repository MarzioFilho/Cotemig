using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using BLL;

namespace Prova_F
{
    public partial class ProvaTipoConta : System.Web.UI.Page
    {
        TipoContaBLL objTipo = new TipoContaBLL();

        protected void Page_Load(object sender, EventArgs e)
        {
            if(!IsPostBack)
            {
                CarregarTipo();
            }
        }

        private void CarregarTipo()
        {
            gridTipoConta.DataSource = objTipo.ListarTiposContas();
            gridTipoConta.DataBind();
        }

    }
}